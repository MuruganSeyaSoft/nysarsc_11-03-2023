<!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="utf-8">
<title>COMMITTEES_NYSASRC</title>
<!-- Stylesheets -->
<link href="{{asset('frontend_lib/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend_lib/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend_lib/css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{asset('frontend_lib/css/color-switcher-design.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('frontend_lib/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend_lib/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


        <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,500');

@color-card-background: #2d3638;
@color-tag-background: #191e20;
@color-anchor: #e37544;
@color-body-copy: #b9bcbd;
@breakpoint-medium: "screen and (min-width: 700px)";

html, body {
  background-color: #fff;
}

.form-popup-bg {
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
}
.form-popup-bg {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
  overflow-y: auto;
  z-index: 10000;
}
.form-popup-bg.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}
.form-container {
    background-color: #2d3638;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    position:relative;
  padding: 40px;
  color: #fff;
}
.close-button {
  background:none;
  color: #fff;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 0;
  right: 0;
  border: solid 1px #fff;
}

.form-popup-bg:before{
    content:'';
    background-color: #fff;
  opacity: .25;
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}



        .form-control{
                display: block;
    width: 100%;
    height: 40px;
    padding: 0px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
.container{
  float:none;
  /*margin-top: 150px;*/
}
.steps {
    margin-top: -41px;
    display: inline-block;
    float: right;
    font-size: 16px
}
.step {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
    position: relative
}
.step_line {
    margin: 0;
    width: 0;
    height: 0;
    border-left: 16px solid #fff;
    border-top: 16px solid transparent;
    border-bottom: 16px solid transparent;
    z-index: 1008;
    position: absolute;
    left: 99px;
    top: 1px
}
.step_line.backline {
    border-left: 20px solid #f7f7f7;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    z-index: 1006;
    position: absolute;
    left: 99px;
    top: -3px
}
.step_complete {
    background: #357ebd
}
.step_complete a.check-bc, .step_complete a.check-bc:hover,.afix-1,.afix-1:hover{
    color: #eee;
}
.step_line.step_complete {
    background: 0;
    border-left: 16px solid #357ebd
}
.step_thankyou {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
}
.step.check_step {
    margin-left: 5px;
}
.ch_pp {
    text-decoration: underline;
}
.ch_pp.sip {
    margin-left: 10px;
}
.check-bc,
.check-bc:hover {
    color: #222;
}
.SuccessField {
    border-color: #458845 !important;
    -webkit-box-shadow: 0 0 7px #9acc9a !important;
    -moz-box-shadow: 0 0 7px #9acc9a !important;
    box-shadow: 0 0 7px #9acc9a !important;
    background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
}

.btn-xs{
    line-height: 28px;
}

/*login form*/
.login-container{
    margin-top:30px ;
}
.login-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login-container-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #357ebd;/*#4d90fe;*/
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-container-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-help{
  font-size: 12px;
}

.asterix{
    background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
}

/* images*/
ol, ul {
  list-style: none;
}
.hand {
  cursor: pointer;
  cursor: pointer;
}
.cards{
    padding-left:0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .mastercard {
  background-position: -51px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .amex {
  background-position: -102px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards li:last-child {
  margin-right: 0;
}
/* images end */




.panel-footer{
    background:#fff;
}
.btn{
    border-radius: 1px;
}
.btn-sm, .btn-group-sm > .btn{
    border-radius: 1px;
}
.input-sm, .form-horizontal .form-group-sm .form-control{
    border-radius: 1px;
}

.panel-info {
    border-color: #999;
}

.panel-heading {
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
}
.panel {
    border-radius: 1px;
}
.panel-info > .panel-heading {
    color: #eee;
    border-color: #999;
}
.panel-info > .panel-heading {
    background-image: linear-gradient(to bottom, #555 0px, #888 100%);
}

hr {
    border-color: #999 -moz-use-text-color -moz-use-text-color;
}

.panel-footer {
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    border-top: 1px solid #999;
}

.btn-link {
    color: #888;
}

hr{
    margin-bottom: 10px;
    margin-top: 10px;
}

/** MEDIA QUERIES **/
@media only screen and (max-width: 989px){
    .span1{
        margin-bottom: 15px;
        clear:both;
    }
}

@media only screen and (max-width: 764px){
    .inverse-1{
        float:right;
    }
}

@media only screen and (max-width: 586px){
    .cart-titles{
        display:none;
    }
    .panel {
        margin-bottom: 1px;
    }
}

.form-control {
    border-radius: 1px;
}

@media only screen and (max-width: 486px){
    .col-xss-12{
        width:100%;
    }
    .cart-img-show{
        display: none;
    }
    .btn-submit-fix{
        width:100%;
    }
    
}
/*
@media only screen and (max-width: 777px){
    .container{
        overflow-x: hidden;
    }
}*/
table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}

.btn {
  color: #fff;
  background: #0079c1;
  font-weight: 700;
  text-align: center;
  text-decoration: none;
  border: 0;
  outline: 0;

  padding: 12px 35px;
  display: inline-block;
 
}
.btn:hover, .btn:focus{
    color:#fff!important;
}

.btn_sec {
  color: #fff;
  background: #0079c1;
  font-weight: 700;
  text-align: left;
  text-decoration: none;
  border: 0;
  outline: 0;

  padding: 12px 35px;
  display: inline-block;
}


.each {
     /* top: 50%; */
    /* padding-left: 100%; */
    transform: translate(-50%, -170%);
 
    float: right;
}

.coupon-card h3{
    font-size: 28px;
    font-weight: 400;
    line-height: 40px;

}
.coupon-card p{
    font-size: 15px;

}
/*.coupon-row{*/
/*    display: flex;*/
/*    align-items: center;*/
/*    margin: 25px auto;*/
/*    width: fit-content;*/

/*}*/
#cpnCode{
    border: 1px dashed #000;
    padding: 10px 20px;
    border-right: 0;

}
#cpnBtn{
       border: 1px solid #212529;
    background: #212529;
    padding: 10px 2px;
    color: #fff;
    cursor: pointer;
}
.circle1, .circle2{
    background: #f0fff3;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);

}
.circle1{
    left: -25px;
}
.circle2{
    right: -25px;
}

@media only screen and (max-width: 915px) and (min-width: 412px)  {
    
    .cpn_code1{
        
    }
}
        </style>
    </head>
    <body>
        <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
 	<!-- Header span -->

     @php
    $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
@endphp
   
    <!-- Main Header-->
    <header class="main-header">
        <div class="main-box">
        	<div class="auto-container clearfix">
            	<div class="logo-box">
                	<div class="logo"><a href="{{route('landing')}}"><img src="{{asset('frontend_lib/images/nysarsc-logo.jpeg')}}" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown">
                                    <a href="#">EVENTS</a>
                                  
                                    <ul>
                                      @php $zz = \App\Models\Annual::all()   @endphp
                                            @foreach($zz as $zz)
                                                @if($zz->type == 1)
                                                    <li class="current dropdown"><a href="{{route('detailspage_web',$zz['id'])}}">{{$zz->title}}</a> </li>
                                                @endif 
                                            @endforeach

                                            @php   @endphp
                                       
                                    </ul>

                                    


                                </li>
                               <?php  $data = Session::get('username'); ?>
                                <li class="dropdown"><a href="#">MEMBERSHIP </a>
                                    <ul>
                                        <li><a href="{{route('member_fees')}}">Member fees/benefits</a></li>
                                        <li><a href="{{route('become_member')}}">Become a member</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">EDUCATION</a>
                                    <ul>
                                        <li><a href="{{route('w_webinar')}}">Webinar</a></li>
                                        <li><a href="{{route('news_letter')}}">Newsletter</a></li>
                                     
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">RESOURCES</a>
                                    <ul>
                                        <li><a href="{{route('hub')}}">HUB</a></li>
                                        <li><a href="{{route('links')}}">LINKS</a></li>
                                        
                                    </ul>
                                </li>
                                <!-- <li><a href="contact.html">RESOURCES</a></li> -->
                                 <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="{{route('board')}}">Board</a></li>
                                        <li><a href="{{route('committe')}}">Committee</a></li>
                                        <li><a href="{{route('mission')}}">Mission</a></li>
                                        
                                    </ul>
                                </li>

                                @if($data!='')
                                <li class="dropdown"><a href="#">Welcome - {{$data}}</a>
                                    <ul>
                                        <li><a href="{{route('setting')}}">Settings</a></li>
                                        <li><a href="{{route('web_logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{route('signup')}}">Signin / Signup</a></li>
                                @endif


                               
                                
                            </ul>
                        </div>
                    </nav>


                    <!-- Main Menu End-->

                    <!-- Outer box -->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="flaticon-search"></span></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('frontend_lib/images/nysarsc-logo.jpeg')}}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!--End Main Header -->

<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-top: 150px;">
<div class="row">

    <div class="col-lg-6">
<div class="cpn_code" style="border: 1px #7a6868 solid;padding: 2%;text-align: center;    background-image: linear-gradient(to bottom, #555 0px, #888 100%);border-radius: 50px;">
<lable>Payment Mode </label>    
<select id='purpose' class="form-control">
    <!-- <option value="0">Please Select</option> -->
    <option value="1" selected>Card Payment</option>
    <option value="2">Cheque Payment</option>
</select>
</div>

        </div>
         <div class="col-lg-6">
  <div class="cpn_code" style="border: 1px #7a6868 solid;padding: 2%;text-align: center;    background-image: linear-gradient(to bottom, #555 0px, #888 100%);border-radius: 50px;">
        <form  class="form-horizontal cpn_code1" method="get" action="{{ route('coupon_code_check') }}">
                @csrf
                <input type="hidden" name="page_type" value="{{$page_type}}">
            <input type="text" name="coupon_code" placeholder="Coupon Code" value="{{$coupon_code}}" class="cpn_code1"  style=" background: azure;
    padding: 1%;
    border: 2px #715e5e dashed;
    height: 42.5px;">
            <button class="cpn_code2 btn btn-success cpn_code2" style="width:175px;">Apply Coupon Code</button>
        </form>
    </div>
    </div>
    </div>
    </div>




    
    <br/>
                                @if(session('success_msg_che'))
                            <div class="alert alert-success fade in alert-dismissible show">                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                                </button>
                                <h6>{{ session('success_msg_che') }}</h6>
                                <h6>Please Wait For Administrative Confirmation Mail..
                               </h6>
                                <script>
                                    setTimeout(function() {
                                        location.href = "{{route('landing')}}";
                                }, 9000);
                                </script>
                            </div>
                            @endif
                            @if(session('error_msg3'))
                            <div class="alert alert-danger fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                                </button>    
                                {{ session('error_msg3') }}
                            </div>
                            @endif
                            <br/>






    
<div class="container wrapper">
 
            <div class="" >
                <!-- First -->
                <form id="payment-card-info" class="form-horizontal" method="post" action="{{ route('dopay.online') }}">
                @csrf
                <input type="hidden" name="page_type" value="{{$page_type}}">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                  
    
     @if(session('error_msg1'))
                            <div class="alert alert-danger fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                                </button>    
                                {{ session('error_msg1') }}
                            </div>
                            @endif
                            <br/>
    
    <br/>
       
                      <!--CREDIT CART PAYMENT-->
                    <!-- <div class="panel panel-info" style='display:none;' id='business'> -->
                    <div class="panel panel-info"  id='business'>
                        <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                        <div class="panel-body">

                            <div class="form-group">
                                <div class="col-md-12"><strong>Name Of Card:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control"  id="owner" name="owner" value="{{ old('owner') }}" required/></div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card Number:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" id="cardNumber" name="cardNumber" value="{{ old('cardNumber') }}" required onkeypress="return onlyNumberKey(event)" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>CVV:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" id="cvv" name="cvv" value="{{ old('cvv') }}" required minlength="3" maxlength="3" onkeypress="return onlyNumberKey(event)" /></div>
                            </div>
                            
                              <div class="form-group" style="display:none;">
                                <div class="col-md-12"><strong>Coupon Code:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" id="coupon_code" name="coupon_code" value="{{$coupon_code}}"  /></div>
                            </div>
                            
                            
                          
                            
                            
                            
                            <!-- <div class="form-group">-->
                            <!--     <form>-->
                            <!--    <div class="col-md-12"><input type="text" class="form-control" placeholder="Coupon Code"><br/>-->
                            <!--    <div class="col-md-12"><button class="btn btn-warning">Apply Code</button></div>-->
                            <!--    </div>-->
                            <!--    </form>-->
                            <!--</div>-->
                            
                            @if($discount_type == 2)
                            
                              @php $ammt = $ad_price; $tot =($ammt * $mem_count)-$new; $tot_a =$ammt * $mem_count; @endphp
                            @else
                            
                            
                            @php $ammt = $ad_price; $tot =($ammt * $mem_count)-$discount; $tot_a =$ammt * $mem_count; @endphp
                            
                            @endif
                            
                            
                            <!--<div class="form-group">-->
                            <!--    <div class="col-md-12"><strong>Total Person Registered&nbsp;&nbsp;:&nbsp; &nbsp;&nbsp;<b style="color:red;">{{$mem_count}}</b></strong></div>-->
                            <!--    <div class="col-md-12"></div>-->
                                
                            <!--</div>-->
                            
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Total Amount&nbsp;&nbsp;:&nbsp; &nbsp;<b style="color:red;">( {{$mem_count}} * {{$ammt}}  = {{$tot_a}} )</b></strong></div>
                                <div class="col-md-12"></div>
                                
                            </div>
                            
                            
                              <div class="form-group">
                                <div class="col-md-12"><strong>Discount&nbsp;&nbsp;:&nbsp; - &nbsp;<b style="color:red;">@if($discount_type == 2)( {{$discount}} % OFF)  @else    {{$discount}} OFF @endif</b></strong></div>
                                <div class="col-md-12"><input type="hidden" class="form-control" id="discount" name="discount_amount" value="{{$discount}}"  /></div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Amount</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" id="amount" name="amount" min="1" value="{{$tot}}" required readonly /></div>
                                
                            </div>
                            
                            <input type="hidden" name="discount_type" id="discount_type" value="{{$discount_type}}">
                      
            
       
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Expiration Month and Year</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="expiration-month" name="expiration-month" style="float: left; width: 100px; margin-right: 10px;">
                                    @foreach($months as $k=>$v)
                                     <option value="{{ $k }}" {{ old('expiration-month') == $k ? 'selected' : '' }}>{{ $v }}</option>                                                        
                                    @endforeach
                                 </select>  
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="expiration-year" name="expiration-year"  style="float: left; width: 100px;">
                                                        
                                    @for($i = date('Y'); $i <= (date('Y') + 15); $i++)
                                     <option value="{{ $i }}">{{ $i }}</option>            
                                    @endfor
                                </select>
                                </div>
                            </div>
                            
</form>
                            @if($tot!=0)
                             @if($mem_count!=0)
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-submit-fix">Pay Now</button>
                                    </div>
                                </div>
                                @endif
                            @endif
                        </div>
                        
                        
                        <script>
		function onlyNumberKey(evt) {
			
			// Only ASCII character in that range allowed
			var ASCIICode = (evt.which) ? evt.which : evt.keyCode
			if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
				return false;
			return true;
		}
	</script>
	
	
	

                        <br/>
                                @if(session('success_msg'))
                            <div class="alert alert-success fade in alert-dismissible show">                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                                </button>
                                <h6>{{ session('success_msg') }}</h6>
                                <h6>Please Wait .. Page Will be Automatically Reloaded..
                               </h6>
                                <script>
                                    setTimeout(function() {
                                        location.href = "{{route('landing')}}";
                                }, 9000);
                                </script>
                            </div>
                            @endif
                            @if(session('error_msg'))
                            <div class="alert alert-danger fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                                </button>    
                                {{ session('error_msg') }}
                            </div>
                            @endif
                            <br/>

                    </div>


                    <!--CREDIT CART PAYMENT END-->




                    <div  class="panel panel-info" style='display:none;' id='passing' >

                    
                                
                    <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Cheque Payment</div>
                        <div class="panel-body">
                                                                                                                      
                        <form  class="form-horizontal cpn_code1" method="post" action="{{ route('cheque_insert') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-12"><strong>Cheque  Number:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" id="cheque_no" name="cheque_no"  required  onkeypress="return onlyNumberKey(event)"/></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Upload Cheque:</strong></div>
                                <div class="col-md-12"><input type="file" name="photo"  class="form-control" id=""  required /></div>
                            </div>
                            
                              <div class="form-group" style="display:none;">
                                <div class="col-md-12"><strong>Coupon Code:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" id="coupon_code" name="coupon_code" value="{{$coupon_code}}"  /></div>
                            </div>
                            
                            
                            @if($discount_type == 2)
                            
                              @php $ammt = $ad_price; $tot =($ammt * $mem_count)-$new; $tot_a =$ammt * $mem_count; @endphp
                            @else
                            
                            
                            @php $ammt = $ad_price; $tot =($ammt * $mem_count)-$discount; $tot_a =$ammt * $mem_count; @endphp
                            
                            @endif
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Total Amount&nbsp;&nbsp;:&nbsp; &nbsp;<b style="color:red;">( {{$mem_count}} * {{$ammt}}  = {{$tot_a}} )</b></strong></div>
                                <div class="col-md-12"></div>
                                
                            </div>
                            
                            
                              <div class="form-group">
                                <div class="col-md-12"><strong>Discount&nbsp;&nbsp;:&nbsp; - &nbsp;<b style="color:red;">@if($discount_type == 2)( {{$discount}} % OFF)  @else    {{$discount}} OFF @endif</b></strong></div>
                                <div class="col-md-12"><input type="hidden" class="form-control" id="discount" name="discount_amount" value="{{$discount}}"  /></div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Amount</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" id="amount" name="amount" min="1" value="{{$tot}}" required readonly /></div>
                                
                            </div>
                            
                            <input type="hidden" name="discount_type" id="discount_type" value="{{$discount_type}}">
                      
            
                            @if($tot!=0)
                             @if($mem_count!=0)
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-submit-fix">Pay Now</button>
                                    </div>
                                </div>
                                @endif
                            @endif
                        </div>
                           
                            
</form>
                           
                        
                        
                        <script>
		function onlyNumberKey(evt) {
			
			// Only ASCII character in that range allowed
			var ASCIICode = (evt.which) ? evt.which : evt.keyCode
			if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
				return false;
			return true;
		}
	</script>
	
	
	






</div>

































                    <!--REVIEW ORDER-->
                    <!--<div class="panel panel-info">-->
                    <!--    <div class="panel-heading">-->
                    <!--        Review Order <div class="pull-right"><small><a class="afix-1" href="#">Edit Cart</a></small></div>-->
                    <!--    </div>-->
                    <!--    <div class="panel-body">-->
                    <!--        <div class="form-group">-->
                    <!--            <div class="col-sm-3 col-xs-3">-->
                    <!--                <img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />-->
                    <!--            </div>-->
                    <!--            <div class="col-sm-6 col-xs-6">-->
                    <!--                <div class="col-xs-12">Product name</div>-->
                    <!--                <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>-->
                    <!--            </div>-->
                    <!--            <div class="col-sm-3 col-xs-3 text-right">-->
                    <!--                <h6><span>$</span>25.00</h6>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="form-group"><hr /></div>-->
                    <!--        <div class="form-group">-->
                    <!--            <div class="col-sm-3 col-xs-3">-->
                    <!--                <img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />-->
                    <!--            </div>-->
                    <!--            <div class="col-sm-6 col-xs-6">-->
                    <!--                <div class="col-xs-12">Product name</div>-->
                    <!--                <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>-->
                    <!--            </div>-->
                    <!--            <div class="col-sm-3 col-xs-3 text-right">-->
                    <!--                <h6><span>$</span>25.00</h6>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="form-group"><hr /></div>-->
                    <!--        <div class="form-group">-->
                    <!--            <div class="col-sm-3 col-xs-3">-->
                    <!--                <img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />-->
                    <!--            </div>-->
                    <!--            <div class="col-sm-6 col-xs-6">-->
                    <!--                <div class="col-xs-12">Product name</div>-->
                    <!--                <div class="col-xs-12"><small>Quantity:<span>2</span></small></div>-->
                    <!--            </div>-->
                    <!--            <div class="col-sm-3 col-xs-3 text-right">-->
                    <!--                <h6><span>$</span>50.00</h6>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="form-group"><hr /></div>-->
                    <!--        <div class="form-group">-->
                    <!--            <div class="col-xs-12">-->
                    <!--                <strong>Subtotal</strong>-->
                    <!--                <div class="pull-right"><span>$</span><span>200.00</span></div>-->
                    <!--            </div>-->
                    <!--            <div class="col-xs-12">-->
                    <!--                <small>Shipping</small>-->
                    <!--                <div class="pull-right"><span>-</span></div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="form-group"><hr /></div>-->
                    <!--        <div class="form-group">-->
                    <!--            <div class="col-xs-12">-->
                    <!--                <strong>Order Total</strong>-->
                    <!--                <div class="pull-right"><span>$</span><span>150.00</span></div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--REVIEW ORDER END-->
                </div>
             
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                       
    
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Address</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Billing Address</h4>
                                </div>
                            </div>
                            <form class="form-horizontal"  id="form-user" action="javascript:;">
                             @csrf
                            <div class="form-group">
                                <div class="col-md-6 col-xs-6">
                                    <strong>Full Name  &nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                    <input type="text"  id="fullname" placeholder="" name="fullname" class="form-control" value="" />
                                </div>
                                 <div class="col-md-6 col-xs-6">
                                    <strong>Phone&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                    <input type="text" name="phone" id="phone" placeholder="" class="form-control" value="" />
                                </div>
                                
                                <div class="span1"></div>
                            </div>
                            
                            
                            
                             <div class="form-group">
                                <div class="col-md-6 col-xs-6">
                                    <strong>Email&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="">
                                </div>
                                 <div class="col-md-6 col-xs-6">
                                    <strong>Building name (Optional):</strong>
                                      <input type="text" id="billingname" placeholder="" name="billingname" class="form-control" value="" />
                                </div>
                                
                                <div class="span1"></div>
                            </div>
                            
                            
                             <div class="form-group">
                                <div class="col-md-6 col-xs-6">
                                    <strong>Street Address&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                    <input type="text" id="street_address" placeholder="" name="street_address" class="form-control" value="" />
                                </div>
                                 <div class="col-md-6 col-xs-6">
                                    <strong>City&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                      <input type="text" id="city" placeholder="" name="city" class="form-control" value="" />
                                </div>
                                
                                <div class="span1"></div>
                            </div>
                            
                            
                            
                            
                             <div class="form-group">
                                <div class="col-md-6 col-xs-6">
                                    <strong>State&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                    <input type="text" id="state" placeholder="" name="state" class="form-control" value="" />
                                </div>
                                 <div class="col-md-6 col-xs-6">
                                    <strong>Zipcode&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                      <input type="text" id="zipcode" placeholder="" name="zipcode" class="form-control" value="" />
                                </div>
                                
                                <div class="span1"></div>
                            </div>
                            
                            
                             <div class="form-group">
                                <div class="col-md-6 col-xs-6">
                                    <strong>Country&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                    <input type="text" id="country" placeholder="" name="country" class="form-control" value="" />
                                </div>
                                 <div class="col-md-6 col-xs-6">
                                    <strong>Driving License Number&nbsp;<b style="color:red;">(*)</b>&nbsp;:</strong>
                                      <input type="text" id="driving" placeholder="" name="driving" class="form-control" value="" />
                                </div>
                                
                                <div class="span1"></div>
                            </div>
                            

                            
                            
                                        <div class="form-group">
                                <div class="col-md-12"><strong>Comments:</strong></div>
                                <div class="col-md-12">
                                <input type="text" class="form-control" id="comments" name="comments" placeholder="" >
                                </div>
                            </div>
                            <br>
                            <div class="msgDiv"></div>
                             <br>
                

                            <div class="form-group">
                            <div class="col-md-12"><strong></strong></div>
                                <div class="col-md-12">
                                <button class="btn btn-success">Register Another Person</button>
                                </div>
                              
                                </div>


</form>



                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                <table>
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <!-- <th>Billing Name</th> -->
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Delete</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($details as $details)
                    <tr>
                      <td data-column="First Name">{{$details->fullname}}</td>
                      <!-- <td data-column="Last Name">{{$details->billingname}}</td> -->
                      <td data-column="Job Title">{{$details->email}}</td>
                      <td data-column="Twitter">{{$details->phone}}</td>
                      
                     
                    @if($mem_id != $details->parent_id)
                      <td data-column="Twitter">
                      <a  onclick="return confirm('Are you sure to delete?')" 
                                href="{{route('c_member_delete',$details['id'])}}"><b style="color:red;">Delete</b></a>
                      </td>
                      @else
                      
                        <td data-column="Twitter">
                      <a href="#"><b style="color:red;"><del>Delete</del></b></a>
                      </td>
                      
                      
                      @endif
                      
                    </tr>

                 


                    @endforeach
                  
                   
                  </tbody>
                </table>
                </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
               <div style="padding-top:3%;padding-bottom:2%;">

     

            </div>

    </div>
        <!-- Main Footer -->



    <!-- Main Footer -->
    <footer class="main-footer">
       

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="copyright-text">
                        <p>© Copyright 2023 All Rights Reserved by <a href="index.html">Seyasoft</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<script>
    function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });

</script>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="{{asset('frontend_lib/js/jquery.js')}}"></script>
<script src="{{asset('frontend_lib/js/popper.min.js')}}"></script>
<script src="{{asset('frontend_lib/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend_lib/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend_lib/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend_lib/js/appear.js')}}"></script>
<script src="{{asset('frontend_lib/js/owl.js')}}"></script>
<script src="{{asset('frontend_lib/js/wow.js')}}"></script>
<script src="{{asset('frontend_lib/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>$(function() {
  $('.accordion li').click(function(){
    $(this).toggleClass(' active ');
    $(this).siblings().removeClass(' active '); 
    $('.submenu').stop().slideUp();
    $('.active .submenu').stop().slideDown();
    return false;
  });
});
</script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>

        $(function(){
            'use strict';

            $('#datatable1').DataTable({
              
            responsive: true,

            // responsive: { details: false} // Hide Plus Button on Datatable 


            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            },
            "paging": true,
            "ordering": true,
            "searching": true,
            "info": false,
            "bLengthChange" : false,    
            stateSave: true, 
            "ordering": false
            });
            // $('.dataTables_filter').addClass('pull-left');
            // Select2
            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity }); 

        });

        
        $("#form-user").validate({
        normalizer: function(value) {
            return $.trim(value);
        },
        rules: {
            fullname: {
                required: true
            },
           
            phone: {
                required: true
            },
            email: {
                required: true
            },
             street_address: {
                required: true
            },
             city: {
                required: true
            },
             state: {
                required: true
            },
             zipcode: {
                required: true
            },
             country: {
                required: true
            },
             driving: {
                required: true
            },
            


        },
        messages: {
            fullname: {
                required: "Full Name is required"
            },
           
            phone: {
                required: "Phone Number is required"
            },
            email: {
                required: "Email ID is required"
            },
            street_address: {
                required: "Street Address is required"
            },
            city: {
                required: "City is required"
            },
            state: {
                required: "State is required"
            },
            zipcode: {
                required: "Zipcode is required"
            },
            country: {
                required: "Country is required"
            },
            driving: {
                required: "Driving is required"
            },


        },

        submitHandler: function(form) {
            $('.msgDiv').html(``);
            var data = new FormData(form);
            $.ajax({
                type: "post",
                url: "{{route('checkout_store_member')}}",
                data: data,
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.status == 1) {

                        $('.msgDiv').html(` <div class="alert alert-success">` + data.message + `</div>`);
                        setTimeout(function() {
                            $('.msgDiv').html(``);
                            window.location.reload();
                        }, 1000);

                    } else {
                        //var errors = data.message;
                      //alert(errors);
                      var object = ((data.message));
                      //alert(JSON.stringify(data.message.mobile));

                     // alert(fg);

//                       var output = '';
// for (var property in object) {
//   output += property + ': ' + object[property]+'; ';
// }
// alert(output);



                      let txt = "";
                      
                        for (let x in object) {
                        txt += object[x] + '<br/>';
                        };
                        //  alert(txt);

                        // var html = "";
                        // $.each(data.errors, function(key, value) {
                        //     html += value + "<br/>";
                        // });
                      //  document.getElementById("demo").innerHTML = txt;
                       // alert(txt);

                        $('.msgDiv').html(`<div class="alert alert-danger m-2">` + txt + `</div>`);
                        // setTimeout(function() {
                        //     $('.msgDiv').html(``);
                        //     window.location.reload();
                        // }, 1000);
                    }
                }
            });
            return false;
        }
    });


 var cpnBtn = document.getElementById("cpnBtn");
            var cpnCode = document.getElementById("cpnCode");

            cpnBtn.onclick = function(){
                navigator.clipboard.writeText(cpnCode.innerHTML);
                cpnBtn.innerHTML ="COPIED";
                setTimeout(function(){
                    cpnBtn.innerHTML="COPY CODE";
                }, 3000);
            }
    </script>





<script>
$('#purpose').on('change', function () {
    if (this.value == '1') {
        $("#business").show();
        $("#passing").hide();
    } else if(this.value == '2') {
        $("#business").hide();
        $("#passing").show();
    }
    else
    {
        $("#business").hide();
        $("#passing").hide();
    }

});
</script>



    </body>
</html>