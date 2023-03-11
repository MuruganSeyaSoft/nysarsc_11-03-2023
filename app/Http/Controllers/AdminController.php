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
use App\Models\Annualdetail;
use App\Models\Pagedetails;
use App\Models\Webinar;
use App\Models\Memberbenefits;
use App\Models\Becomemember;
use App\Models\Couponcode; 
use App\Models\Membercheckout;
use App\Models\PaymentLogs;
use App\Models\Couponuser;

use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminController extends Controller
{
    public function admin(request $request)
    {
        return view('admin.login');
    }
    public function admin_auth_login(Request $request)
    {
       
        $email = $request->email; $password1 = $request->password;
        //$hashedPassword = Hash::make($password);
        $pass = Admin::where('email',$email)->get();
        $passs = $pass[0]->password;
        //echo $passs;exit;
        if (Hash::check($password1, $passs)) 
        {
            $p_a_acount = 1;
        }
        else
        {
            $p_a_acount = 0;
        }
        // echo $p_a_acount;exit;
        $data_count  = Admin::where('email',$email)->count();
        if($p_a_acount == 1 && $data_count == 1)
        {
            Session::put('email', $email);
            return response()->json(['status' => 1 , 'msg' => "Login Success"]); 
        }
        else
            {
                return response()->json(['status' => 0 , 'msg' => "Please Check Username and Password"]);
            }


    }
    public function admin_dashboard(Request $request)
    {
        $val  =  Session::get('email');
        if($val!='')
        {
            //Earning Section

            
            $week = date('Y-m-d', strtotime("-6 days"));
            $month = date('Y-m-d', strtotime("-30 days"));
            $total_paid = PaymentLogs::sum('amount');
            $weekly_paid = PaymentLogs::whereDate('updated_at', '>=', $week)
            ->sum('amount');
            $monthly_paid = PaymentLogs::whereDate('updated_at', '>=', $month)
            ->sum('amount');

            //Cheque Details 

            $total_paid_cheque= PaymentLogs::where('payment_mode',2)->sum('amount');
            $total_paid_cheque_approved= PaymentLogs::where('payment_mode',2)->where('approved_status',1)->sum('amount');
            $total_paid_cheque_unapproved= PaymentLogs::where('payment_mode',2)->where('approved_status',2)->sum('amount');

            $total_paid_card= PaymentLogs::where('payment_mode',1)->sum('amount');



            //Members Details
            $total_member = Members::count();
            $active_member = Members::where('member_status',1)->count();
            $inactive_member = Members::where('member_status','!=',1)->count();

             //Coupons Details
             $total_coupon = Couponcode::count();
             $active_coupon = Couponcode::where('status',1)->count();
             $inactive_coupon = Couponcode::where('status','!=',1)->count();
             
             $ad_cou_count = PaymentLogs::where('discount_amount','!=',0)->count();
             $ad_cou_count_not_used = PaymentLogs::where('discount_amount',0)->count();
             






            
            return view('admin.dashboard',compact('total_paid','weekly_paid','monthly_paid','total_member','active_member',
            'inactive_member','total_coupon','active_coupon','inactive_coupon','ad_cou_count_not_used','ad_cou_count',
            'total_paid_cheque','total_paid_cheque_approved','total_paid_cheque_unapproved','total_paid_card'));
        }
        else
            {
                return redirect()->route('admin');
            }
    }

    public function member_management(Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $member = Members::get();
        return view('admin.member_management',compact('member'));
        }
    }
    
    public function member_status_active($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $update = Members::where('id',$id)->update(['member_status'=>1]);
        return redirect()->route('member_management');
        }
    }

    public function member_status_inactive($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $update = Members::where('id',$id)->update(['member_status'=>2]);
        return redirect()->route('member_management');
        }
    }

    public function member_store(Request $request)
    {
        $rules = [
            'first_name'      => 'required',
            'last_name'      => 'required',
            'email'     => 'required|email|unique:members',
            'mobile'    => 'required|integer|digits_between:10,10|unique:members',
            'username'    => 'required',
            'password'    => 'required',
        ];
        $messages = [
            'first_name.required'    => 'First name is required',
            'last_name.required'    => 'Last name is required',
            'email.required'   => 'Admin email is required',
            'email.unique'   => 'Email is Already Used',
            'mobile.required'  => 'Mobile is required',
            'mobile.unique'  => 'Mobile Number is Already Used',
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
           // echo "Test"; exit;
            $password=bcrypt($request->password);
            $data=[
                    'first_name'=>$request->first_name,
                    'last_name'=>$request->last_name,
                    'email'=>$request->email,
                    'mobile'=>$request->mobile,
                    'password'=>$password,
                    'username'=>$request->username,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Members::insert($data);
            DB::commit();
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }

    }    

    public function member_update(Request $request)
    {

        $c_id = $request->c_id;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $mobile = $request->mobile1;
        $username = $request->username;
        $update = Members::where('id',$c_id)->update(['first_name'=>$first_name,'last_name'=>$last_name,
        'email'=>$email, 'mobile'=>$mobile,'username'=>$username]);
        return Redirect::back()->withErrors(['msg' => 'Member Information Uploaded Successfully']);
    }

    public function conference_store(Request $request)
    {
        $rules = [
            'new_c_title'      => 'required',
            'payment'      => 'required|integer',
        ];
        $messages = [
            'new_c_title.required'    => 'Agenda Details  is required',
            'payment.required'    => 'Payment  is required',
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
        }
        try{
           // echo "Test"; exit;
          
            $data=[
                    'title'=>$request->new_c_title,
                    'payment'=>$request->payment,
                    'type'=>$request->type,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Annual::insert($data);
            DB::commit();
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
    }

    public function annual_conference(Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
            $title = Annual::where('type',1)->get();
            return view('admin.annual_conference_before',compact('title'));
        }
    }

    public function annual_conference_second($id,Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
            $annual_id = $id;
            $title = Annualdetail::where('annual_id',$annual_id)->get();
            $det = Annual::where('id',$annual_id)->where('type',1)->first();
            $name_title = $det->title;
            return view('admin.annual_conference',compact('title','annual_id','name_title'));
        }
    }

    public function conference_store_second(Request $request)
    {
        $rules = [
            'sub_menu'      => 'required',
        ];
        $messages = [
            'sub_menu.required'    => 'Submenu Title  is required',
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
        }
        try{
           // echo "Test"; exit;
          
            $data=[
                    'title'=>$request->sub_menu,
                    'annual_id'=>$request->annual_id,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Annualdetail::insert($data);
            DB::commit();
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
    }


    public function annual_conference_second_update(Request $request)
    {
        $title = $request->sub_menu;
        $c_id = $request->c_id;
        $update = Annualdetail::where('id',$c_id)->update(['title'=>$title]);
        return Redirect::back()->withErrors(['msg' => 'Data Updated Successfully']);
    }
    
    public function annual_conference_details($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
            $sub_menu_id  = $id;


            $Pagedetails =Annualdetail::where('id',$sub_menu_id)->get();
            return view('admin.annual_conference_details',compact('sub_menu_id','Pagedetails'));
        }
    }

    public function submenu_description(Request $request)
    {
        $sub_menu_id = $request->sub_menu_id;
        $description = $request->description;
        $update = Annualdetail::where('id',$sub_menu_id)->update(['details'=>$description]);
        $succ = "Added Data Successfully";
        return response()->json(['status' => 1,'message'=>$succ]);
        //return Redirect::back()->withErrors(['msg' => 'Data A Successfully']);
    }
    

    





























    

    public function title_status_active($id, Request $request)
    {
        $update = Annual::where('id',$id)->update(['status'=>1]);
        return Redirect::back()->withErrors(['msg' => 'Active  Updated Successfully']);
    }
    public function title_status_inactive($id, Request $request)
    {
        $update = Annual::where('id',$id)->update(['status'=>2]);
        return Redirect::back()->withErrors(['msg' => 'Inactive Updated Successfully']);
    }
    public function title_update(Request $request)
    {
        $title = $request->title;
        $c_id = $request->c_id;
        $payment = $request->payment;
        $update = Annual::where('id',$c_id)->update(['title'=>$title,'payment'=>$payment]);
        return Redirect::back()->withErrors(['msg' => 'Data Updated Successfully']);
    }
    public function agenda($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $Pagedetails =Annual::where('id',$id)->get();
        $type=$Pagedetails[0]->type;
        return view('admin.agenda',compact('id','Pagedetails','type'));
        }
    }
    public function agenda_store(Request $request)
    {
        $agenda = $request->agenda; $page_type = $request->page_type; 

        $rules = [
            'agenda'      => 'required',
        ];
        $messages = [
            'agenda.required'    => 'Description are Required',
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
        }

        try{
            $update = Annual::where('id',$request->annual_title_id)->update(['agenda'=>$agenda]);
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$page_type]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
        
    }

    public function agenda_view($id,Request $request)
    {
        $details =Annual::where('id',$id)->get();
        $type=$details[0]->type;
        return view('admin.agenda_view',compact('details','type'));
    }
    public function agenda_delete($id, Request $request)
    {
        $update = Annual::where('id',$id)->update(['agenda'=>null]);
        return Redirect::back()->withErrors(['msg' => 'Removed  Details Successfully']);
    }

    public function speaker($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $details =Annual::where('id',$id)->get();
        return view('admin.speaker',compact('details','id'));
        }
    }

    public function speaker_store(Request $request)
    {
        $speaker = $request->speaker; 

        $rules = [
            'speaker'      => 'required',
        ];
        $messages = [
            'speaker.required'    => 'Description are Required',
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
        }

        try{
            $update = Annual::where('id',$request->annual_title_id)->update(['speaker'=>$speaker]);
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
        
    }

    public function speaker_view($id,Request $request)
    {
        $details =Annual::where('id',$id)->get();
        return view('admin.speaker_view',compact('details'));
    }
    public function speaker_delete($id, Request $request)
    {
        $update = Annual::where('id',$id)->update(['speaker'=>null]);
        return Redirect::back()->withErrors(['msg' => 'Removed Speaker Details Successfully']);
    }

    public function presentation_download($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $details =Annual::where('id',$id)->get();
        return view('admin.presentation_download',compact('details','id'));
        }
    }
    public function presentation_store(Request $request)
    {

        $ff = $request->pdf;

        $presentation = $request->presentation;
        $annual_title_id = $request->annual_title_id;

        $update = Annual::where('id',$request->annual_title_id)->update(['downloadsoption'=>$presentation]);
        if($ff =='')
        {
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }
        else
        {
            
    
            if($request->hasFile('pdf')) {
    
                $imageNameArr = [];
                foreach ($request->pdf as $file) {

                    $imageName = time().'-'.$file->getClientOriginalName();
                    $imageNameArr[] = $imageName;
                    $file->move(public_path('presentation'), $imageName);

                    $data=[
                        'annual_title_id'=>$request->annual_title_id,
                        'data' => $imageName,
                        'page_type'=>3,
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s'),
                        ];
                        PageDetails::insert($data);
                        DB::commit();

    
                    
                }

                $succ = "Added Data Successfully";
                return response()->json(['status' => 1,'message'=>$succ]);

    
            } 
            else
            {
                $succ = "Please Check Details ";
                return response()->json(['status' => 0,'message'=>$succ]);
            }
           
            

        }
            
    }

    public function presentation_view($id,Request $request)
    {
        $details =Annual::where('id',$id)->get();
        $pageDetails =PageDetails::where('annual_title_id',$id)->get();
        return view('admin.presentation_view',compact('details','pageDetails'));
    }
    public function presentation_delete($id, Request $request)
    {
        $update = Annual::where('id',$id)->update(['downloadsoption'=>null]);
        $update = PageDetails::where('annual_title_id',$id)->delete();
        return Redirect::back()->withErrors(['msg' => 'Removed Presentation  Details Successfully']);
    }

    public function presentation_pdf_delete($id, Request $request)
    {
        $update = PageDetails::where('id',$id)->delete();
        return Redirect::back()->withErrors(['msg' => 'Removed  Details Successfully']);
    }

    public function webinar(Request $request)
    {
         $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
            $title = Annual::where('type',2)->get();
            return view('admin.webinar',compact('title'));
        }

    }
    public function webinar_store(Request $request)
    {
        $rules = [
            'webinar'      => 'required',
        ];
        $messages = [
            'webinar.required'    => 'Webinar Details  is required',
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
        }
        try{
           // echo "Test"; exit;
          
            $data=[
                    'data'=>$request->webinar,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Webinar::insert($data);
            DB::commit();
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
    }
    public function webinar_update(Request $request)
    {
        $data = $request->web_up; $w_id = $request->w_id;
        $update = Webinar::where('id',$w_id)->update(['data'=>$data]);
        return Redirect::back()->withErrors(['msg' => 'Data Updated Successfully']);
    }
    public function webinar_delete($id, Request $request)
    {
        $delete = Webinar::where('id',$id)->delete();;
        return Redirect::back()->withErrors(['msg' => 'Removed Webinar Details Successfully']);
    }

    public function webinar_status_active($id, Request $request)
    {
        $delete = Webinar::where('id',$id)->update(['status'=>1]);
        return Redirect::back()->withErrors(['msg' => 'Active Status Updated  Successfully']);
    }
    public function webinar_status_deactive($id, Request $request)
    {
        $delete = Webinar::where('id',$id)->update(['status'=>2]);
        return Redirect::back()->withErrors(['msg' => 'Deactive Status Updated  Successfully']);
    }



    public function b_member(Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $details =Becomemember::get();
        return view('admin.become_member',compact('details'));
        }
    }
    public function b_member_store(Request $request)
    {
        $rules = [
            'b_member'      => 'required',
        ];
        $messages = [
            'b_member.required'    => 'Become Member Details  is required',
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
        }
        try{
           // echo "Test"; exit;
          
            $data=[
                    'data'=>$request->b_member,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Becomemember::insert($data);
            DB::commit();
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
    }
    public function b_member_update(Request $request)
    {
        $data = $request->b_member; $w_id = $request->w_id;
        $update = Becomemember::where('id',$w_id)->update(['data'=>$data]);
        return Redirect::back()->withErrors(['msg' => 'Data Updated Successfully']);
    }
    public function b_member_delete($id, Request $request)
    {
        $delete = Becomemember::where('id',$id)->delete();;
        return Redirect::back()->withErrors(['msg' => 'Removed Becomemember Details Successfully']);
    }

    public function b_member_status_active($id, Request $request)
    {
        $delete = Becomemember::where('id',$id)->update(['status'=>1]);
        return Redirect::back()->withErrors(['msg' => 'Active Status Updated  Successfully']);
    }
    public function b_member_status_deactive($id, Request $request)
    {
        $delete = Becomemember::where('id',$id)->update(['status'=>2]);
        return Redirect::back()->withErrors(['msg' => 'Deactive Status Updated  Successfully']);
    }

    

    public function bene_member(Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $details =Memberbenefits::get();
        return view('admin.member_benefits',compact('details'));
        }
    }
    public function bene_member_store(Request $request)
    {
        $rules = [
            'bene_member'      => 'required',
        ];
        $messages = [
            'bene_member.required'    => 'Become Member Details  is required',
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
        }
        try{
           // echo "Test"; exit;
          
            $data=[
                    'data'=>$request->bene_member,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Memberbenefits::insert($data);
            DB::commit();
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
    }
    public function bene_member_update(Request $request)
    {
        $data = $request->bene_member; $w_id = $request->w_id;
        $update = Memberbenefits::where('id',$w_id)->update(['data'=>$data]);
        return Redirect::back()->withErrors(['msg' => 'Data Updated Successfully']);
    }
    public function bene_member_delete($id, Request $request)
    {
        $delete = Memberbenefits::where('id',$id)->delete();;
        return Redirect::back()->withErrors(['msg' => 'Removed Data Details Successfully']);
    }

    public function bene_member_status_active($id, Request $request)
    {
        $delete = Memberbenefits::where('id',$id)->update(['status'=>1]);
        return Redirect::back()->withErrors(['msg' => 'Active Status Updated  Successfully']);
    }
    public function bene_member_status_deactive($id, Request $request)
    {
        $delete = Memberbenefits::where('id',$id)->update(['status'=>2]);
        return Redirect::back()->withErrors(['msg' => 'Deactive Status Updated  Successfully']);
    }




    public function couponcode_management(Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $couponcode = Couponcode::get();
        return view('admin.couponcode_management',compact('couponcode'));
        }
    }
    
    public function couponcode_status_active($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $update = Couponcode::where('id',$id)->update(['status'=>1]);
        return redirect()->route('couponcode_management');
        }
    }

    public function couponcode_status_inactive($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $update = Couponcode::where('id',$id)->update(['status'=>2]);
        return redirect()->route('couponcode_management');
        }
    }

    public function couponcode_store(Request $request)
    {
        
          $discount_type = $request->discount_type;$discount = $request->discount;
          if($discount_type == 2)
          {
                if($discount>100)
                {
                     return response()->json(['status' => 3, 'message' => "Max Allowed Percentage is 100"]);   
                }
                   
          }
             
        
        $rules = [
            'couponcode'      => 'required |unique:couponcodes',
            'start_date'      => 'required',
            'end_date'     => 'required',
            'coupon_limit'    => 'required|integer',
            'discount'    => 'required|integer',
            'discount_type'    => 'required',
        ];
        $messages = [
            'couponcode.required'    => 'Coupon Code is required',
            'start_date.required'    => 'Start Date of Coupon Code is required',
            'end_date.required'   => 'End Date of Coupon Code is required',
            'couponcode.unique'   => 'Coupons Code is  Already Used',
            'coupon_limit.required'  => 'Coupon Limits is required',
            'discount.required'  => 'Discount Amount is required',
            'discount_type.required'  => 'Discount Type is required',
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
           // echo "Test"; exit;
           
           
           
            $discount = $request->discount;
            $discount_type = $request->discount_type;
            if($discount_type == 2)
            {
                    if($discount>100)
                    {
                        $succ = "Max Allowed Percentage is 100";
                        return response()->json(['status' => 0,'message'=>$succ]);
                    }
            }
        
         
            $data=[
                    'couponcode'=>$request->couponcode,
                    'discount'=>$request->discount,
                    'discount_type'=>$request->discount_type,
                    'coupon_limit'=>$request->coupon_limit,
                    'start_date'=>$request->start_date,
                    'end_date'=>$request->end_date,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Couponcode::insert($data);
            DB::commit();
            $succ = "Added Data Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }

    }    

    public function couponcode_update(Request $request)
    {

        $c_id = $request->c_id;
        $coupon_code = $request->couponcode;
        $coupon_limit = $request->coupon_limit;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $old_code = $request->old_code;
        
        $discount = $request->discount;
        
        $discount_type = $request->discount_type;
        if($discount_type == 2)
        {
                if($discount>100)
                {
                     return Redirect::back()->withErrors(['msg' => 'Max Allowed Percentage is 100']);
                }
        }
        
        
        if($old_code != $coupon_code)
        {
            $count = Couponcode::where('couponcode',$coupon_code)->count();
            if($count!=0)
            {
                return Redirect::back()->withErrors(['msg' => 'Coupon Code is Already Exists']);
            }
            else
            {
                $update = Couponcode::where('id',$c_id)->update(['couponcode'=>$coupon_code,'coupon_limit'=>$coupon_limit,
                'start_date'=>$start_date, 'end_date'=>$end_date ,'discount'=>$discount,'discount_type'=>$discount_type]);
                return Redirect::back()->withErrors(['msg' => 'Code Details Uploaded Successfully']);
            }
        }
        else
        {
            $update = Couponcode::where('id',$c_id)->update(['couponcode'=>$coupon_code,'coupon_limit'=>$coupon_limit,
            'start_date'=>$start_date, 'end_date'=>$end_date ,'discount'=>$discount,'discount_type'=>$discount_type]);
            return Redirect::back()->withErrors(['msg' => 'Code Details Uploaded Successfully']);
        }
           
        
    }

    public function member_peyment_details(Request $request)
    {

        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $membercheckout = PaymentLogs::with('member')->with('membercout')->get();
        //echo "<pre>";print_r($membercheckout[0]);exit;
        return view('admin.payment_member',compact('membercheckout'));
        }

       
    }

    public function c_member_view(Request $request,$id)
    {

        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
           $details = Membercheckout::where('payment_id',$id)->get();
           return view('admin.payment_checkout_member',compact('details'));

        }

       
    }

    public function earning($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
            if($id == 1)
            {   $pagedetails = "Overall Earning";
                $membercheckout = PaymentLogs::with('member')->with('membercout')->get();
            }
            elseif($id == 2)
            {
                $pagedetails = "Weekly Earning";
                $week = date('Y-m-d', strtotime("-6 days"));
                $membercheckout = PaymentLogs::whereDate('updated_at', '>=', $week)->with('member')->with('membercout')->get();
                
            }
            else
                {
                    $pagedetails = "Monthly Earning";
                    $month = date('Y-m-d', strtotime("-30 days"));
                    $membercheckout = PaymentLogs::whereDate('updated_at', '>=', $month)->with('member')->with('membercout')->get();
                }
           
            return view('admin.earning',compact('membercheckout','pagedetails'));

        }
    }



    public function earning_filter($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
            if($id == 1)
            {   $pagedetails = "TOTAL EARNING FOR CHEQUE";
                $membercheckout = PaymentLogs::where('payment_mode',2)->with('member')->with('membercout')->get();
            }
            elseif($id == 2)
            {
                $pagedetails = "APPROVED EARNING FOR CHEQUE";
                $membercheckout = PaymentLogs::where('payment_mode',2)->where('approved_status',1)->with('member')->with('membercout')->get();
                
            }
            elseif($id == 3)
            {
                $pagedetails = "UNAPPROVED EARNING FOR CHEQUE";
                $membercheckout = PaymentLogs::where('payment_mode',2)->where('approved_status',2)->with('member')->with('membercout')->get();
                
            }
            else
                {
                    $pagedetails = "TOTAL EARNING FOR CARD";
                    $membercheckout = PaymentLogs::where('payment_mode',1)->with('member')->with('membercout')->get();
                }
           
            return view('admin.earning',compact('membercheckout','pagedetails'));

        }
    }




    public function member_dashboard($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
            if($id == 1)
            {
                $member = Members::get();
            }
            elseif($id == 2)
            {
                $member = Members::where('member_status',1)->get();
            }
            else
                {
                    $member = Members::where('member_status','!=',1)->get();
                }
            
            return view('admin.member_dashboard',compact('member'));
        }
    }

    public function coupon_dashboard($id, Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        
            if($id == 1)
            {
                $couponcode = Couponcode::get();
            }
            elseif($id == 2)
            {
                $couponcode = Couponcode::where('status',1)->get();
            }
            else
                {
                    $couponcode = Couponcode::where('status','!=',1)->get();
                }

        return view('admin.couponcode_dashboard',compact('couponcode'));
        }
    }
    
    
    public function price_up( Request $request)
    {
        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
        $admin = Admin::get();
       return view('admin.price_change',compact('admin'));
        }
    }
    
    
 
 
 
 public function price_update(Request $request)
    {
        
          $rules = [
            'price'    => 'required|integer|min:1|max:1000',
        ];
        $messages = [
            'price.required'  => 'Price is required',
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
        }
        try{
           // echo "Test"; exit;
          
            $price = $request->price;
            $up = Admin::where('id',1)->update(['price'=>$price]);
            DB::commit();
            $succ = "Price Updated Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }
    }
    
    public function master_report($id,Request $request)
    {
        if($id == 1)
        {
            $details = Membercheckout::groupBy('state')->get();
        }
        elseif($id == 2)
        {
            $details = Membercheckout::groupBy('city')->get();
        }
        elseif($id == 3)
        {
            $details = Membercheckout::groupBy('zipcode')->get();
        }

        elseif($id == 4)
        {
            $details = Membercheckout::get();
        }

       return view('admin.master_report',compact('id','details'));
    }
    public function report_generation(Request $request)
    {
        

        $val  =  Session::get('email');
        if($val=='')
        {
            return redirect()->route('admin');
        }
        else
        {
          
                $id_v = $request->id_v;
                if($id_v == 1)
                {
                    $choose = $request->choose;
                    $details = Membercheckout::where('state', 'like', '%'.$choose.'%')->with('member')->with('payment')->get();
                }
                elseif($id_v == 2)
                {
                    $choose = $request->choose;
                    $details = Membercheckout::where('city', 'like', '%'.$choose.'%')->with('member')->with('payment')->get();
                }
                elseif($id_v == 3)
                {
                    $choose = $request->choose;
                    $details = Membercheckout::where('zipcode',$choose)->with('member')->with('payment')->get();
                }

                elseif($id_v == 4)
                {
                    $from = $request->from;  $to = $request->to;
                    $details = Membercheckout::whereBetween(DB::raw('DATE(created_at)'), [$from, $to])
                    ->with('member')->with('payment')->get();
                }


              //  echo "<pre>";print_r($details);exit;
               
                return view('admin.master_report_details',compact('details'));
        }

    

        
    }

    public function assign_couponcode(Request $request)
    {
        

        $member_code = Couponuser::with('member')->get();

        
        $member_details = Members::where('member_status',1)->get();
       // echo "<pre>";print_r($member_code);exit;
        $couponcode = Couponcode::where('status',1)->get();
        return view('admin.assign_couponcode',compact('couponcode','member_details','member_code'));
    }

    public function assign_coupon_user(Request $request)
    {
        
      
        $couponcode = $request->couponcode;
        $member_id = $request->member;

        $rules = [
            'couponcode'      => 'required',
            'member'      => 'required',
        ];
        $messages = [
            'couponcode.required'    => 'Couponcode   is required',
            'member.required'    => 'Member  is required',
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
        }
        try{
           // echo "Test"; exit;

           

           $couponcode = $request->couponcode;
           $member_id = $request->member;
   
           $da = Couponuser::where('couponcode_id',$couponcode)->where('mem_id',$member_id)->count();
           if($da!=0)
           {
            $succ = "Already Couponcode Assigned This Member";
            return response()->json(['status' => 10,'message'=>$succ]);
           }

          
            $data=[
                    'couponcode_id'=>$request->couponcode,
                    'mem_id'=>$request->member,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
            ];
            Couponuser::insert($data);
            DB::commit();
            $succ = "Assign Couponcode Successfully";
            return response()->json(['status' => 1,'message'=>$succ]);
        }catch(\Exception $e){
            DB::rollback();
            print_r($e->getMessage());
            $data=$e->getMessage();
            throw $e;
            return response()->json(['status' => 0,'message'=>$data]);
        }

     
       
    }
    public function remove_coupon_user($id,Request $request)
    {
        
        $update = Couponuser::where('id',$id)->delete();
        return Redirect::back()->withErrors(['msg' => 'Removed  Successfully']);
    }


  




    public function admin_logout(request $request)
    {
        Session::flush();
        return redirect()->route('admin');
    }

}
