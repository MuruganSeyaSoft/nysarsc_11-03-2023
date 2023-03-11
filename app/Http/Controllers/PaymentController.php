<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use App\Models\PaymentLogs;
use App\Models\Members;
use Session;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\TestMail2;
use App\Models\Membercheckout;
use App\Models\Couponuser;


class PaymentController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth'); // later enable it when needed user login while payment
    }

    // start page form after start
    public function pay() {
        return view('frontend.pay');
    }

    public function handleonlinepay(Request $request) {
        $input = $request->input();
        
        /* Create a merchantAuthenticationType object with authentication details
          retrieved from the constants file */
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));

        // Set the transaction's refId
        $refId = 'ref' . time();
        $cardNumber = preg_replace('/\s+/', '', $input['cardNumber']);
        
        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($cardNumber);
        $creditCard->setExpirationDate($input['expiration-year'] . "-" .$input['expiration-month']);
        $creditCard->setCardCode($input['cvv']);

        // Add the payment data to a paymentType object
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        // Create a TransactionRequestType object and add the previous objects to it
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount($input['amount']);
        $transactionRequestType->setPayment($paymentOne);

        // Assemble the complete transaction request
        $requests = new AnetAPI\CreateTransactionRequest();
        $requests->setMerchantAuthentication($merchantAuthentication);
        $requests->setRefId($refId);
        $requests->setTransactionRequest($transactionRequestType);

        // Create the controller and get the response
        $controller = new AnetController\CreateTransactionController($requests);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

        if ($response != null) {
            // Check to see if the API request was successfully received and acted upon
            if ($response->getMessages()->getResultCode() == "Ok") {
                // Since the API request was successful, look for a transaction response
                // and parse it to display the results of authorizing the card
                $tresponse = $response->getTransactionResponse();

                if ($tresponse != null && $tresponse->getMessages() != null) {
//                    echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "\n";
//                    echo " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
//                    echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
//                    echo " Auth Code: " . $tresponse->getAuthCode() . "\n";
//                    echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n";
                    $message_text = $tresponse->getMessages()[0]->getDescription().", Transaction ID: " . $tresponse->getTransId();
                    $msg_type = "success_msg";  
                    $no_of_register = 6; 
                    

                    $data = Session::get('username');
                    $details = Members::where('username',$data)->first();
                    $mem_id=$details->id;

                                       
                    $last_id = PaymentLogs::create([                                         
                        'amount' => $input['amount'],
                        'response_code' => $tresponse->getResponseCode(),
                        'transaction_id' => $tresponse->getTransId(),
                        'auth_id' => $tresponse->getAuthCode(),
                        'message_code' => $tresponse->getMessages()[0]->getCode(),
                        'name_on_card' => trim($input['owner']),
                        'quantity'=>1,
                        'created_at' =>now(),
                        'updated_at' =>now(),
                        'mem_id' =>$mem_id,
                        'coupon_code' => $input['coupon_code'],
                        'discount_amount' => $input['discount_amount'],
                        'discount_type' => $input['discount_type'],
                    ]);
                    
                    $trans = $tresponse->getTransId();

                    $last=$last_id->id;
                    
                    
                    
                    
                  //  echo $last;exit;

                    $page_type = $request->page_type;

                    $data = Session::get('username');
                    $details = Members::where('username',$data)->first();
                    $mem_id=$details->id;
                    $mem_email=$details->email;
                    $coupon  = $request->coupon_code;

                    $update = Couponuser::where('couponcode_id',$coupon)->where('mem_id',$mem_id)->update(['used'=>2]);
                    
        
                    
                    $update = Membercheckout::where('mem_id',$mem_id)->where('payment_id',0)->update(['payment_id'=>$last,'source_email'=>$mem_email,'transaction_id'=>$trans,'page_type'=>$page_type]);
                    $upd = Members::where('username',$data)->where('id',$mem_id)->update(['payment_status'=>1]);
                    
                     $m_c = Membercheckout::where('mem_id',$mem_id)->where('payment_id',$last)->count();
                     $upp = PaymentLogs::where('id',$last)->update(['quantity'=>$m_c]);
                     
                            
                     $details = Membercheckout::with('member')->where('mem_id',$mem_id)->where('payment_id',$last)->get();
                     
                    // echo "<pre>";print_r($details[0]['member']->first_name);exit;
                    
                    foreach($details as $details)
                    {
                        $email_address = $details->email;
                            if($page_type !=2)
                            {
                            
                                Mail::to($email_address)->send(new TestMail($details));
                            }
                            else
                            {
                                Mail::to($email_address)->send(new TestMail($details));
                            }

                            
                    }



                  



                } else {
                    $message_text = 'There were some issue with the payment. Please try again later.';
                    $msg_type = "error_msg";                                    

                    if ($tresponse->getErrors() != null) {
                        $message_text = $tresponse->getErrors()[0]->getErrorText();
                        $msg_type = "error_msg";                                    
                    }
                }
                // Or, print errors if the API request wasn't successful
            } else {
                $message_text = 'There were some issue with the payment. Please try again later.';
                $msg_type = "error_msg";                                    

                $tresponse = $response->getTransactionResponse();

                if ($tresponse != null && $tresponse->getErrors() != null) {
                    $message_text = $tresponse->getErrors()[0]->getErrorText();
                    $msg_type = "error_msg";                    
                } else {
                    $message_text = $response->getMessages()->getMessage()[0]->getText();
                    $msg_type = "error_msg";
                }                
            }
        } else {
            $message_text = "No response returned";
            $msg_type = "error_msg";
        }
        return back()->with($msg_type, $message_text);
    }



    public function cheque_insert(Request $request)
    {

       // print_r($request->all());exit;
       
                   
                    $file = $request->file('photo');
                   
                    $ff = 'cheque_document/'.$file->getClientOriginalName();
                    $infoPath = pathinfo(public_path($ff));
                    $extension = $infoPath['extension'];
                    //echo "Murugan14";exit;
                  //  echo $extension;exit;

                  if($extension == "jpeg")
                  {
                  }
                  elseif($extension == "png")
                  {
                  }
                  elseif($extension == "jpg")
                  {
                  }
                  else
                  {
                    $message_text3 = "Allowed Only JPG,JPEG,PNG Format";
                    $msg_type3 = "error_msg";
                    return back()->with($msg_type3, $message_text3);
                  }

                   

                        //echo "Murugabb";exit;
                        $destinationPath = 'cheque_document/';
                        $file->move($destinationPath,$file->getClientOriginalName());
                        $i_path = $destinationPath.$file->getClientOriginalName();


                            $data = Session::get('username');
                            $details = Members::where('username',$data)->first();
                            $mem_id=$details->id;
                            $last_id = PaymentLogs::create([                                         
                                'amount' => $request->amount,
                                'response_code' => NULL,
                                'transaction_id' => $request->cheque_no,
                                'auth_id' => NULL,
                                'message_code' => NULL,
                                'name_on_card' => NULL,
                                'quantity'=>1,
                                'created_at' =>now(),
                                'updated_at' =>now(),
                                'mem_id' =>$mem_id,
                                'coupon_code' => $request->coupon_code,
                                'discount_amount' => $request->discount_amount,
                                'discount_type' => $request->discount_type,
                                'payment_mode' =>2,
                                'approved_status' =>2,
                                'cheque_document' =>$i_path,
                            ]);
                            $trans = NULL;
                            $last=$last_id->id;
                            $page_type = $request->page_type;
                            $data = Session::get('username');
                            $details = Members::where('username',$data)->first();
                            $mem_id=$details->id;
                            $mem_email=$details->email;
                            $update = Membercheckout::where('mem_id',$mem_id)->where('payment_id',0)->update(['payment_id'=>$last,'source_email'=>$mem_email,'transaction_id'=>$trans,'page_type'=>$page_type]);
                            $upd = Members::where('username',$data)->where('id',$mem_id)->update(['payment_status'=>1]);
                            $m_c = Membercheckout::where('mem_id',$mem_id)->where('payment_id',$last)->count();
                            $upp = PaymentLogs::where('id',$last)->update(['quantity'=>$m_c]);
                            $message_text = "Check Upload Successfully..Please Wait for Administrative Confirmation Mail";
                            $msg_type = "success_msg_che";
                            return back()->with($msg_type, $message_text);

                



    }
    public function cheque_payment_status($id, Request $request)
    {

            $get_details = PaymentLogs::where('id',$id)->first();
            $mem_id = $get_details->mem_id;

            $upp = PaymentLogs::where('id',$id)->update(['approved_status'=>1,'updated_at'=>now()]);
            $details = Membercheckout::with('member')->where('mem_id',$mem_id)->where('payment_id',$id)->get();        
            foreach($details as $details)
            {
                $email_address = $details->email;
                Mail::to($email_address)->send(new TestMail($details));
            }

            return Redirect::back()->withErrors(['msg' => 'Cheque Status Updated Successfully']);


    }

}