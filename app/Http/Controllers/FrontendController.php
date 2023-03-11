<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Session;
use DB;
use Redirect;
use App\Models\Admin;
use App\Models\Members;
use App\Models\Annual;
use App\Models\Pagedetails;
use App\Models\Webinar;
use App\Models\Memberbenefits;
use App\Models\Becomemember;
use App\Models\Membercheckout;
use App\Models\Couponcode;
use App\Models\Couponuser;


use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class FrontendController extends Controller
{
    public function landing(Request $request)
    {
        return view('frontend.landing');
    }
    public function conference(Request $request)
    {

        $data = Session::get('username');
        if($data!='')
        {
            $detail = Members::where('username',$data)->first();
            $mem_id=$detail->id;
            $coun = Membercheckout::where('mem_id',$mem_id)->where('page_type',1)->count();
            
        }
        else
            {
                $coun = 0;
            }

            return view('frontend.conference_2023',compact('coun'));
    }

    public function membership_details(Request $request)
    {

        $data = Session::get('username');
        if($data!='')
        {
            $detail = Members::where('username',$data)->first();
            $mem_id=$detail->id;
            $coun = Membercheckout::where('mem_id',$mem_id)->where('page_type',2)->count();
            
        }
        else
            {
                $coun = 0;
            }


            return view('frontend.membership_details',compact('coun'));
    }

    public function webinar_details(Request $request)
    {

        $data = Session::get('username');
        if($data!='')
        {
            $detail = Members::where('username',$data)->first();
            $mem_id=$detail->id;
            $coun = Membercheckout::where('mem_id',$mem_id)->where('page_type',3)->count();
            
        }
        else
            {
                $coun = 0;
            }


            return view('frontend.webinar_details',compact('coun'));
    }
    public function newsletter_details(Request $request)
    {

            return view('frontend.newsletter_details');
    }
    

    

    public function detailspage_web($id,Request $request)
    {
        $data = Session::get('username');
        if($data!='')
        {
            $details = Members::where('username',$data)->first();
            $payment_status=$details->payment_status;
            $pagedetails =Becomemember::get();
            $pagedetails =Annual::where('id',$id)->get();
            return view('frontend.agenda',compact('id','pagedetails','payment_status'));
        }
        else
        {
            $payment_status = 0;
        //     return view('frontend.agenda', [
        //         'errorMessageDuration' => 'error too long',
        //         'route' => 'createPr',
        //         'type' => 'new',
        //         'payment_status' =>$payment_status
        //   ]);
        
            $pagedetails =Becomemember::get();
            $pagedetails =Annual::where('id',$id)->get();
            return view('frontend.agenda',compact('id','pagedetails','payment_status'));
            

            
        }
    }
    public function speaker(Request $request)
    {
        return view('frontend.speaker');
    }
    public function member_fees(Request $request)
    { 
        $details =Memberbenefits::get();
        return view('frontend.member_fees',compact('details'));
    }
    public function become_member(Request $request)
    {

        $data = Session::get('username');
        if($data!='')
        {
            $details = Members::where('username',$data)->first();
            $payment_status=$details->payment_status;
            $pagedetails =Becomemember::where('status',1)->get();
            return view('frontend.become_member',compact('pagedetails','payment_status'));
        }
        else
        {
            $payment_status = 0;
        //     return view('frontend.become_member', [
        //         'errorMessageDuration' => 'error too long',
        //         'route' => 'createPr',
        //         'type' => 'new',
        //         'payment_status' =>$payment_status
        //   ]);
        
         $pagedetails =Becomemember::where('status',1)->get();
            return view('frontend.become_member',compact('pagedetails','payment_status'));

            
        }
    }
    public function w_webinar(Request $request)
    {
        $data = Session::get('username');
        if($data!='')
        {
            $details = Members::where('username',$data)->first();
            $payment_status=$details->payment_status;
            $details = Annual::where('type',2)->where('status',1)->get();
            return view('frontend.webinar',compact('details','payment_status'));
        }
        else
        {
            $payment_status = 0;
        //     return view('frontend.webinar', [
        //         'errorMessageDuration' => 'error too long',
        //         'route' => 'createPr',
        //         'type' => 'new',
        //         'payment_status' =>$payment_status
        //   ]);
        
         $details = Annual::where('type',2)->where('status',1)->get();
            return view('frontend.webinar',compact('details','payment_status'));

            
        }

        
    }
    public function news_letter(Request $request)
    {
        return view('frontend.news_letter');
    }
    public function hub(Request $request)
    {
        return view('frontend.hub');
    }
    public function links(Request $request)
    {
        return view('frontend.links');
    }
    public function committe(Request $request)
    {
        return view('frontend.committe');
    }
    public function board(Request $request)
    {
        return view('frontend.board');
    }
    public function mission(Request $request)
    {
        return view('frontend.mission');
    }
    public function privacy_policy(Request $request)
    {
        return view('frontend.privacy_policy');
    }


    public function register(Request $request)
    {
        return view('frontend.register');
    }

    


    


    public function signup(Request $request)
    {
        return view('frontend.login');
    }

    public function signin(Request $request)
    {
        return view('frontend.signin');
    }
    public function user_registration(Request $request)
    {

        $rules = [
            'first_name'      => 'required',
            'last_name'      => 'required',
            'email'     => 'required|email|unique:members',
            'mobile'    => 'required|integer|digits_between:10,10|unique:members',
            'username'    => 'required|unique:members',
            'password'    => 'required|min:6',
            'street_address'      => 'required',
            'city'      => 'required',
            'state'      => 'required',
            'zipcode'      => 'required|integer',
            'country'      => 'required',
        ];
        $messages = [
            'first_name.required'    => 'First name is required',
            'last_name.required'    => 'Last name is required',
            'email.required'   => 'email is required',
            'email.unique'   => 'Email is Already Used',
            'mobile.required'  => 'Mobile is required',
            'mobile.unique'  => 'Mobile Number is Already Used',
            'username.required'  => 'Username is required',
             'username.unique'   => 'Username is Already Used',
            'password.required'  => 'Password is required',
            'street_address.required'    => 'Last name is required',
            'city.required'    => 'Last name is required',
            'state.required'    => 'Last name is required',
            'zipcode.required'    => 'Last name is required',
            'country.required'    => 'Last name is required',
                 
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);
        if (!$validator->passes()) {
            $messages = $validator->messages();
            $errors = [];
            foreach ($rules as $key => $value) {
                $err = $messages->first($key);
                if ($err) {
                    $errors[$key] = $err;
                }
            }
            return response()->json(['status' => 0, 'message' => $errors]);
            // return response()->json(['status' => 0]);
        }



        try{
            $password=$request->password;
            $data=[
                    'first_name'=>$request->first_name,
                    'last_name'=>$request->last_name,
                    'email'=>$request->email,
                    'mobile'=>$request->mobile,
                    'password'=>$password,
                    'street_address'=>$request->street_address,
                    'city'=>$request->city,
                    'state'=>$request->state,
                    'zipcode'=>$request->zipcode,
                    'country'=>$request->country,
                    'username'=>$request->username,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Members::insert($data);
            DB::commit();
            $succ = "Registered Successfully.Please Login to Continue Our Process";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }

    }

    public function user_login_check(Request $request)
    {

        $rules = [
            'username'    => 'required',
            'password'    => 'required',
        ];
        $messages = [
            'username.required'  => 'Username is required',
            'password.required'  => 'Password is required',
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);
        if (!$validator->passes()) {
            $messages = $validator->messages();
            $errors = [];
            foreach ($rules as $key => $value) {
                $err = $messages->first($key);
                if ($err) {
                    $errors[$key] = $err;
                }
            }
            return response()->json(['status' => 0, 'message' => $errors]);
            // return response()->json(['status' => 0]);
        }



        try{
            $username=$request->username;
            $password=$request->password;

            $e_count = Members::where('username',$username)->where('password',$password)->count();
            
           // echo $e_count;exit;

            if($e_count!= 0)
            {
                 $de = Members::where('username',$username)->where('password',$password)->first();
                 $member_status = $de->member_status;
                 $f = $de->first_name;$l = $de->last_name;  $fi = $f.' '.$l;
                 if($member_status == 1)
                 {

                      Session::put('username', $username);   Session::put('fi', $fi); 
                    $succ = "Login Success";
                    return response()->json(['status' => 1,'message'=>$succ]);
                 }
                 else
                    {
                        $succ = "Your Account Has Been Blocked.Please Contact Nysarsc Administrator";
                        return response()->json(['status' => 0,'message'=>$succ]);
                    
                    }
                 
                   
            }
            else
                {
                    $succ = "Please Check Username and Password";
                    return response()->json(['status' => 0,'message'=>$succ]);
                }
      
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
        
    }

    public function checkout($id,Request $request)
    {
        $page_type = $id;
        $data = Session::get('username');
        if($data!='')
        {
            $detail = Members::where('username',$data)->first();
            $mem_id=$detail->id;
            
            $a = Membercheckout::where('mem_id',$mem_id)->where('parent_id',$mem_id)->where('page_type',$page_type)->count();
            if($a == 0)
            {
                $space = " ";
                $full = $detail->first_name.$space.$detail->last_name;
                     $data=[
                            'fullname'=>$full,
                            'billingname'=>$detail->last_name,
                            'email'=>$detail->email,
                            'phone'=>$detail->mobile,
                            'street_address'=>$detail->street_address,
                            'city'=>$detail->city,
                            'state'=>$detail->state,
                            'zipcode'=>$detail->zipcode,
                            'country'=>$detail->country,
                            'comments'=>NULL,
                            'driving'=>NULL,
                            'mem_id' =>$mem_id,
                            'created_at'=>date('Y-m-d H:i:s'),
                            'updated_at'=>date('Y-m-d H:i:s'),
                            'parent_id'=>$mem_id,
                            'page_type' =>$page_type
                    ];
                    Membercheckout::insert($data);
                    DB::commit();
            
            }
            
            
            
            $details = Membercheckout::where('mem_id',$mem_id)->where('payment_id',0)->get();
            $mem_count = Membercheckout::where('mem_id',$mem_id)->where('payment_id',0)->count();
           // echo "Test";exit;
           $discount = 0;
           $coupon_code = "";
           
        //    $ad = Admin::first();
        //    $ad_price = $ad->price;


                                if($page_type == 1)
                                 {
                                    $ad_price = 250;
                                 } 
                                 elseif($page_type == 2)
                                 {
                                    $ad_price = 5;
                                 }
                                 else
                                 {
                                    $ad_price = 250;
                                 }




           
           $discount_type = 0; $new = 0;
  
  
            return view('frontend.checkout',compact('details','mem_count','page_type','mem_id','discount','coupon_code','ad_price','discount_type','new'));
        }
        else
        {
            return view('frontend.login');

        }
      
    }

    public function checkout_store_member(Request $request)
    {
        $data = Session::get('username');
        $details = Members::where('username',$data)->first();
        $mem_id=$details->id;

        $fullname = $request->fullname;
        $phone = $request->phone;
        $email = $request->email;
        $billingname = $request->billingname;
        $comments = $request->comments;
        $driving = $request->driving;

        $username = $request->username;
        $password = $request->password;

        $rules = [
            'fullname'      => 'required',
            'email'     => 'required|email',
            'phone'    => 'required|integer|digits_between:10,10',
            'street_address'      => 'required',
            'city'      => 'required',
            'state'      => 'required',
            'zipcode'      => 'required|integer',
            'country'      => 'required',
        ];
        $messages = [
            'fullname.required'    => 'Full name is required',
            'email.required'   => 'email is required',
            'mobile.required'  => 'Mobile is required',
            'street_address.required'    => 'Last name is required',
            'city.required'    => 'Last name is required',
            'state.required'    => 'Last name is required',
            'zipcode.required'    => 'Last name is required',
            'country.required'    => 'Last name is required',
           
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);
        if (!$validator->passes()) {
            $messages = $validator->messages();
            $errors = [];
            foreach ($rules as $key => $value) {
                $err = $messages->first($key);
                if ($err) {
                    $errors[$key] = $err;
                }
            }
            return response()->json(['status' => 0, 'message' => $errors]);
            // return response()->json(['status' => 0]);
        }



        try{
            
            $data=[
                    'fullname'=>$request->fullname,
                    'billingname'=>$request->billingname,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'comments'=>$comments,
                    'driving'=>$request->driving,
                    'mem_id' =>$mem_id,
                    'street_address'=>$request->street_address,
                    'city'=>$request->city,
                    'state'=>$request->state,
                    'zipcode'=>$request->zipcode,
                    'country'=>$request->country,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Membercheckout::insert($data);
            DB::commit();

            if($username != '')
            {
                $data=[
                    'first_name'=>$request->fullname,
                    'last_name'=>$request->fullname,
                    'email'=>$request->email,
                    'mobile'=>$request->phone,
                    'password'=>$password,
                    'street_address'=>$request->street_address,
                    'city'=>$request->city,
                    'state'=>$request->state,
                    'zipcode'=>$request->zipcode,
                    'country'=>$request->country,
                    'username'=>$request->username,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Members::insert($data);
            DB::commit();
            }




            $succ = "Registered Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }

        

    }

    public function c_member_delete($id, Request $request)
    {
        $details = Membercheckout::where('id',$id)->delete();
        return back();
    }

    public function checkout_store_member_new(Request $request)
    {
            echo "testing";exit;
    }
    public function change_password(Request $request)
    {
        $page_type = 0;
        $data = Session::get('username');
        if($data!='')
        {
            return view('frontend.change_password'); 
        }
        else
        {
            return view('frontend.login');

        }
    }
    

    public function current_users(Request $request)
    {
        $page_type = 0;
        $data = Session::get('username');
        if($data!='')
        {

            $id_f = Members::where('username',$data)->first();
            $mem_id=$id_f->id;

            $details = Membercheckout::where('mem_id',$mem_id)->where('payment_id',0)->get();
            return view('frontend.current_users',compact('details','mem_id')); 
        }
        else
        {
            return view('frontend.login');

        }
    }


    public function coupon_code_user_get(Request $request)
    {
        $page_type = 0;
        $data = Session::get('username');
        if($data!='')
        {

            $id_f = Members::where('username',$data)->first();
            $mem_id=$id_f->id;

            $details = Couponuser::with('coupon')->where('used',1)->where('mem_id',$mem_id)->get();
           // echo "<pre>";print_r($details);exit;
            return view('frontend.coupon',compact('details')); 
        }
        else
        {
            return view('frontend.login');

        }
    }


    

    

    



    public function setting(Request $request)
    {
        $page_type = 0;
        $data = Session::get('username');
        if($data!='')
        {
            $id_f = Members::where('username',$data)->first();
            $mem_id=$id_f->id;
            $details = Members::where('username',$data)->get();
            return view('frontend.settings',compact('details')); 
        }
        else
        {
            return view('frontend.login');

        }
    }

    public function user_profile_update(Request $request)
    {
        $rules = [
            'first_name'      => 'required',
            'last_name'      => 'required',
            'email'     => 'required',
            'mobile'    => 'required|integer|digits_between:10,10',
            'username'    => 'required',
        ];
        $messages = [
            'first_name.required'    => 'First name is required',
            'last_name.required'    => 'Last name is required',
            'email.required'   => 'email is required',
            'mobile.required'  => 'Mobile is required',
            'username.required'  => 'Username is required',
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);
        if (!$validator->passes()) {
            $messages = $validator->messages();
            $errors = [];
            foreach ($rules as $key => $value) {
                $err = $messages->first($key);
                if ($err) {
                    $errors[$key] = $err;
                }
            }
            return response()->json(['status' => 0, 'message' => $errors]);
            // return response()->json(['status' => 0]);
        }



        try{
           
                $data = Session::get('username');
                $id_f = Members::where('username',$data)->first();
                $mem_id=$id_f->id;

                    $first_name=$request->first_name;
                    $last_name=$request->last_name;
                    $email=$request->email;
                    $mobile=$request->mobile;
                    $username=$request->username;

                    $up = Members::where('id',$mem_id)->update(['first_name'=>$first_name,'last_name'=>$last_name,
                    'email'=>$email,'mobile'=>$mobile,'username'=>$username]);
            $succ = "Updated Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }

    }


    public function password_change(Request $request)
    {
        $rules = [
            'old'      => 'required',
            'newp'      => 'required',
            'newcp'     => 'required',
        ];
        $messages = [
            'old.required'    => 'Old Password is required',
            'newp.required'    => 'New Password is required',
            'newcp.required'   => 'New Confirm Password required',
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);
        if (!$validator->passes()) {
            $messages = $validator->messages();
            $errors = [];
            foreach ($rules as $key => $value) {
                $err = $messages->first($key);
                if ($err) {
                    $errors[$key] = $err;
                }
            }
            return response()->json(['status' => 0, 'message' => $errors]);
            // return response()->json(['status' => 0]);
        }



        try{
           
                    $old=$request->old;
                    $newp=$request->newp;
                    $newcp=$request->newcp;
                    
                $data = Session::get('username');
                $id_f = Members::where('username',$data)->first();
                $mem_id=$id_f->id;
                $password=$id_f->password;
                $old_count = Members::where('password',$old)->count();
                if($old_count!=0)
                {
                    if($newp == $newcp)
                    {
                        $up = Members::where('id',$mem_id)->update(['password'=>$newp]);
                        $succ = "Password Changed Successfully";
                        return response()->json(['status' => 1,'message'=>$succ]);
                    }
                    else
                        {
                            $data = "New Password and Confirm Password Not Matched";
                            return response()->json(['status' => 0,'message'=>$data]);
                        }
                }
                else
                    {
                        $data = "Old Password Not Matched";
                        return response()->json(['status' => 0,'message'=>$data]);
                    }

        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }

    }
    
    public function coupon_code_check(Request $request)
    {
        $coupon = $request->coupon_code;
        $count = Couponcode::where('couponcode',$coupon)->count();
        if($count!=0)
        {
                $coupon_code =  $request->coupon_code;
                $today= date('Y-m-d', strtotime("-0 days"));
                $de = Couponcode::where('couponcode',$coupon)->first();
                $start = $de->start_date;
                $end = $de->end_date;
                $discount = $de->discount;
                $discount_type = $de->discount_type;
                $status = $de->status;
                if($status == 2)
                {
                                $message_text1 = "This code is not valid or has expired";
                                $msg_type1 = "error_msg1";
                                return back()->with($msg_type1, $message_text1);        
                }
                else
                {
                    
               
            
                            if (($today >= $start) && ($today <= $end)){
                                

                                //echo "Current date is between two dates"; exit;
                                $page_type = $request->page_type;
                                $data = Session::get('username');       
                                $detail = Members::where('username',$data)->first();
                                $mem_id=$detail->id;
                                $details = Membercheckout::where('mem_id',$mem_id)->where('payment_id',0)->get();
                                $mem_count = Membercheckout::where('mem_id',$mem_id)->where('payment_id',0)->count();
                                 $ad = Admin::first();

                                 if($page_type == 1)
                                 {
                                    $ad_price = 250;
                                 } 
                                 elseif($page_type == 2)
                                 {
                                    $ad_price = 5;
                                 }
                                 else
                                 {
                                    $ad_price = 250;
                                 }

                               
                                 
                                 $dddd = $mem_count * $ad_price;
                                 
                                  if($discount_type == 2)
                                    {
                                        $percentage = $discount;
                                        $cal = $mem_count * $ad_price;
                                        $new = ($percentage / 100) * $cal;
                                    }
                                    else
                                    {
                                        $cal = 0;
                                        $new = 0;
                                    }

                                   // echo $discount_type;exit;
                                    if($discount_type == 2)
                                    {

                                      // echo $new;exit;

                                        if($new >= $dddd)
                                        {
                                            $message_text1 = "Discount Amount Is Greater then Original Price.Can't Apply Coupon for this Transaction";
                                            $msg_type1 = "error_msg1";
                                            return back()->with($msg_type1, $message_text1);     
                                        }
                                    }
                                    else
                                        {
                                            if($discount >= $dddd)
                                            {
                                                $message_text1 = "Discount Amount Is Greater then Original Price.Can't Apply Coupon for this Transaction";
                                                $msg_type1 = "error_msg1";
                                                return back()->with($msg_type1, $message_text1);     
                                            }
                                        }    


                                
                               // echo $new;exit;
                                
                                return view('frontend.checkout',compact('details','mem_count','page_type','mem_id','discount','coupon_code','ad_price','discount_type','new'));
                                
                            }else{
                                
                                $message_text1 = "Coupon Code Was Expired";
                                $msg_type1 = "error_msg1";
                                return back()->with($msg_type1, $message_text1);
                                
                            }
                            
                }

               
        }
        else
            {
                 $message_text1 = "Coupon Code Not Found";
                 $msg_type1 = "error_msg1";
                 return back()->with($msg_type1, $message_text1);
            }
        
    }

    public function reference_user(Request $request)
    {
        $page_type = 0;
        $data = Session::get('username');
        if($data!='')
        {

            $id_f = Members::where('username',$data)->first();
            $mem_id=$id_f->id;

            $details = Membercheckout::where('mem_id',$mem_id)->get();
            return view('frontend.reference_user',compact('details','mem_id')); 
        }
        else
        {
            return view('frontend.login');

        }
    }
    
    public function web_logout(Request $request)
    {
        Session::flush();
        return redirect()->route('signup');
    }

    
    

    
    
    
    
    
}
