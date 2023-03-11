<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PaymentController;
   


Route::get('/admin',[AdminController::class,'admin'])->name('admin'); 
Route::get('/admin_dashboard',[AdminController::class,'admin_dashboard'])->name('admin_dashboard');
Route::post('/admin_auth_login',[AdminController::class,'admin_auth_login'])->name('admin_auth_login'); 


//Member Management
Route::get('/member_management',[AdminController::class,'member_management'])->name('member_management');   
Route::get('/member_status_inactive/{id}',[AdminController::class,'member_status_inactive'])->name('member_status_inactive');
Route::get('/member_status_active/{id}',[AdminController::class,'member_status_active'])->name('member_status_active'); 
Route::post('/member_store',[AdminController::class,'member_store'])->name('member_store');
Route::post('/member_update',[AdminController::class,'member_update'])->name('member_update');
//Member Management

//Annual Conference 
Route::get('/annual_conference',[AdminController::class,'annual_conference'])->name('annual_conference');  
Route::get('/annual_conference_second/{id}',[AdminController::class,'annual_conference_second'])->name('annual_conference_second');  
Route::post('/conference_store_second',[AdminController::class,'conference_store_second'])->name('conference_store_second'); 
Route::post('/annual_conference_second_update',[AdminController::class,'annual_conference_second_update'])->name('annual_conference_second_update'); 
Route::get('/annual_conference_details/{id}',[AdminController::class,'annual_conference_details'])->name('annual_conference_details'); 
Route::post('/submenu_description',[AdminController::class,'submenu_description'])->name('submenu_description');  



// Report management
Route::get('/master_report/{id}',[AdminController::class,'master_report'])->name('master_report');
Route::post('/report_generation',[AdminController::class,'report_generation'])->name('report_generation');  








Route::get('/title_status_inactive/{id}',[AdminController::class,'title_status_inactive'])->name('title_status_inactive'); 
Route::get('/title_status_active/{id}',[AdminController::class,'title_status_active'])->name('title_status_active'); 
Route::post('/title_update',[AdminController::class,'title_update'])->name('title_update'); 
Route::get('/agenda/{id}',[AdminController::class,'agenda'])->name('agenda');
Route::post('/agenda_store',[AdminController::class,'agenda_store'])->name('agenda_store');  
Route::get('/agenda_view/{id}',[AdminController::class,'agenda_view'])->name('agenda_view'); 
Route::get('/agenda/{id}',[AdminController::class,'agenda'])->name('agenda');
Route::post('/conference_store',[AdminController::class,'conference_store'])->name('conference_store'); 
Route::get('/agenda_delete/{id}',[AdminController::class,'agenda_delete'])->name('agenda_delete'); 


Route::get('/speaker/{id}',[AdminController::class,'speaker'])->name('speaker'); 
Route::get('/speaker_view/{id}',[AdminController::class,'speaker_view'])->name('speaker_view'); 
Route::get('/speaker_delete/{id}',[AdminController::class,'speaker_delete'])->name('speaker_delete');  
Route::post('/speaker_store',[AdminController::class,'speaker_store'])->name('speaker_store'); 

Route::get('/presentation_download/{id}',[AdminController::class,'presentation_download'])->name('presentation_download'); 
Route::post('/presentation_store',[AdminController::class,'presentation_store'])->name('presentation_store'); 
Route::get('/presentation_view/{id}',[AdminController::class,'presentation_view'])->name('presentation_view');  
Route::get('/presentation_pdf_delete/{id}',[AdminController::class,'presentation_pdf_delete'])->name('presentation_pdf_delete');  
Route::get('/presentation_delete/{id}',[AdminController::class,'presentation_delete'])->name('presentation_delete'); 
//Annual Conference

//Webinar
Route::get('/webinar',[AdminController::class,'webinar'])->name('webinar');
Route::post('/webinar_store',[AdminController::class,'webinar_store'])->name('webinar_store');
Route::post('/webinar_update',[AdminController::class,'webinar_update'])->name('webinar_update');    
Route::get('/webinar_delete/{id}',[AdminController::class,'webinar_delete'])->name('webinar_delete'); 
Route::get('/webinar_status_active/{id}',[AdminController::class,'webinar_status_active'])->name('webinar_status_active');
Route::get('/webinar_status_deactive/{id}',[AdminController::class,'webinar_status_deactive'])->name('webinar_status_deactive');
//Webinar End

//become Member
Route::get('/b_member',[AdminController::class,'b_member'])->name('b_member');
Route::post('/b_member_store',[AdminController::class,'b_member_store'])->name('b_member_store');
Route::post('/b_member_update',[AdminController::class,'b_member_update'])->name('b_member_update');    
Route::get('/b_member_delete/{id}',[AdminController::class,'b_member_delete'])->name('b_member_delete'); 
Route::get('/b_member_status_active/{id}',[AdminController::class,'b_member_status_active'])->name('b_member_status_active');
Route::get('/b_member_status_deactive/{id}',[AdminController::class,'b_member_status_deactive'])->name('b_member_status_deactive');
//become Member

//Member benefits
Route::get('/bene_member',[AdminController::class,'bene_member'])->name('bene_member');
Route::post('/bene_member_store',[AdminController::class,'bene_member_store'])->name('bene_member_store');
Route::post('/bene_member_update',[AdminController::class,'bene_member_update'])->name('bene_member_update');    
Route::get('/bene_member_delete/{id}',[AdminController::class,'bene_member_delete'])->name('bene_member_delete'); 
Route::get('/bene_member_status_active/{id}',[AdminController::class,'bene_member_status_active'])->name('bene_member_status_active');
Route::get('/bene_member_status_deactive/{id}',[AdminController::class,'bene_member_status_deactive'])->name('bene_member_status_deactive');
//Member benefits



//Member Management
Route::get('/couponcode_management',[AdminController::class,'couponcode_management'])->name('couponcode_management');   
Route::get('/couponcode_status_inactive/{id}',[AdminController::class,'couponcode_status_inactive'])->name('couponcode_status_inactive');
Route::get('/couponcode_status_active/{id}',[AdminController::class,'couponcode_status_active'])->name('couponcode_status_active'); 
Route::post('/couponcode_store',[AdminController::class,'couponcode_store'])->name('couponcode_store');
Route::post('/couponcode_update',[AdminController::class,'couponcode_update'])->name('couponcode_update');
//Member Management

//
Route::get('/member_peyment_details',[AdminController::class,'member_peyment_details'])->name('member_peyment_details');   
Route::get('/c_member_view/{id}',[AdminController::class,'c_member_view'])->name('c_member_view');   

//Dashboard Details

Route::get('/earning/{id}',[AdminController::class,'earning'])->name('earning'); 
Route::get('/earning_filter/{id}',[AdminController::class,'earning_filter'])->name('earning_filter'); 
Route::get('/member_dashboard/{id}',[AdminController::class,'member_dashboard'])->name('member_dashboard');  
Route::get('/coupon_dashboard/{id}',[AdminController::class,'coupon_dashboard'])->name('coupon_dashboard');  

Route::get('/price_up',[AdminController::class,'price_up'])->name('price_up'); 
Route::post('/price_update',[AdminController::class,'price_update'])->name('price_update'); 


Route::get('/assign_couponcode',[AdminController::class,'assign_couponcode'])->name('assign_couponcode'); 
Route::post('/assign_coupon_user',[AdminController::class,'assign_coupon_user'])->name('assign_coupon_user'); 
Route::get('/remove_coupon_user/{id}',[AdminController::class,'remove_coupon_user'])->name('remove_coupon_user'); 



Route::get('/admin_logout',[AdminController::class,'admin_logout'])->name('admin_logout');  





//Front End Details 

Route::get('/',[FrontendController::class,'landing'])->name('landing'); 
Route::get('/conference',[FrontendController::class,'conference'])->name('conference'); 
Route::get('/detailspage_web/{id}',[FrontendController::class,'detailspage_web'])->name('detailspage_web'); 
Route::get('/speaker',[FrontendController::class,'speaker'])->name('speaker'); 
Route::get('/member_fees',[FrontendController::class,'member_fees'])->name('member_fees'); 
Route::get('/become_member',[FrontendController::class,'become_member'])->name('become_member'); 
Route::get('/w_webinar',[FrontendController::class,'w_webinar'])->name('w_webinar'); 
Route::get('/news_letter',[FrontendController::class,'news_letter'])->name('news_letter'); 
Route::get('/hub',[FrontendController::class,'hub'])->name('hub'); 
Route::get('/links',[FrontendController::class,'links'])->name('links'); 
Route::get('/board',[FrontendController::class,'board'])->name('board'); 
Route::get('/committe',[FrontendController::class,'committe'])->name('committe'); 
Route::get('/mission',[FrontendController::class,'mission'])->name('mission');
Route::get('/signin',[FrontendController::class,'signin'])->name('signin');
Route::get('/signup',[FrontendController::class,'signup'])->name('signup');  
Route::post('/user_registration',[FrontendController::class,'user_registration'])->name('user_registration');
Route::post('/user_login_check',[FrontendController::class,'user_login_check'])->name('user_login_check'); 
Route::get('/web_logout',[FrontendController::class,'web_logout'])->name('web_logout');  
Route::get('/checkout/{id}',[FrontendController::class,'checkout'])->name('checkout'); 
Route::post('/checkout_store_member',[FrontendController::class,'checkout_store_member'])->name('checkout_store_member');
Route::post('/checkout_store_member_new',[FrontendController::class,'checkout_store_member_new'])->name('checkout_store_member_new'); 
Route::get('/c_member_delete/{id}',[FrontendController::class,'c_member_delete'])->name('c_member_delete'); 

//Payment Details 

Route::get('/pay',[PaymentController::class,'pay'])->name('pay'); 
Route::post('/dopay/online',[PaymentController::class,'handleonlinepay'])->name('dopay.online');   
Route::post('/cheque_insert',[PaymentController::class,'cheque_insert'])->name('cheque_insert');  
Route::get('/cheque_payment_status/{id}',[PaymentController::class,'cheque_payment_status'])->name('cheque_payment_status');  



//Payment Details End

Route::get('/setting',[FrontendController::class,'setting'])->name('setting');  
Route::post('/user_profile_update',[FrontendController::class,'user_profile_update'])->name('user_profile_update'); 
Route::post('/password_change',[FrontendController::class,'password_change'])->name('password_change');  
Route::get('/coupon_code_check',[FrontendController::class,'coupon_code_check'])->name('coupon_code_check'); 



//New 

Route::get('/membership_details',[FrontendController::class,'membership_details'])->name('membership_details'); 
Route::get('/webinar_details',[FrontendController::class,'webinar_details'])->name('webinar_details'); 
Route::get('/newsletter_details',[FrontendController::class,'newsletter_details'])->name('newsletter_details'); 
Route::get('/privacy_policy',[FrontendController::class,'privacy_policy'])->name('privacy_policy'); 
Route::get('/register',[FrontendController::class,'register'])->name('register'); 
Route::get('/change_password',[FrontendController::class,'change_password'])->name('change_password'); 
Route::get('/current_users',[FrontendController::class,'current_users'])->name('current_users'); 
Route::get('/coupon_code_user_get',[FrontendController::class,'coupon_code_user_get'])->name('coupon_code_user_get'); 

Route::get('/reference_user',[FrontendController::class,'reference_user'])->name('reference_user'); 



//Front End Details End  

