<!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="utf-8">
<title>NYSARC</title>
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

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>ul li {
  list-style: none;
}

.accordion {
  width: 100%;

}

.accordion > li:first-child {
  border: none;
}

.accordion > li {
  position: relative;
  border-top: 1px solid #2ea1de;
}

.accordion .link a {
        position: relative;
    display: block;
    padding: 5px 25px;
    color: #1b3746;
    text-decoration: none;
    font-size: 16px;
}
p {
    margin-top: 0;
     margin-bottom: 0%!important; 
}

.accordion .link > a {

  color: #000;
}




/* submenu */

.submenu {
  display: none;
  background: #f8f9f9;
}

.accordion .submenu > li a {
  display: block;
  padding: 10px 15px;
  text-decoration: none;
  color: #8fa7b3;
  cursor: pointer;
}

.accordion .submenu > li:first-child {
  border: none;
}

.accordion .submenu > li {
  border-top: 1px solid #dae0e0;
}

.accordion .submenu > li a:hover {
  background: #e6ecec;
  color: #1795d8;
  padding: 10px 15px 10px 20px;
  transition: padding 0.2s ease-in;
}

.fa {
  position: absolute;
  top: 50%;
  right: 12px;
  transform: translateY(-50%);
}

.active .fa {
  transform: translateY(-50%) rotate(180deg);
}</style>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
 	<!-- Header span -->


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
                                    <a href="#">Events</a>
                                  
                                    <ul>
                                      <!-- @php( $details = \App\Models\Annual::all() )
                                      @foreach($details as $details)
                                          @if($details->type == 1)
                                            @if($details->status == 1)
                                                 <li class="current dropdown"><a href="{{route('detailspage_web',$details['id'])}}">{{$details->title}}</a> </li>
                                            @endif     
                                          @endif 
                                      @endforeach -->


                                      <li class="current dropdown"><a href="#">Annual Conference</a> 
                                            <ul>
                                                <li><a href="Conference2022_Nysarc.html">Conference 2022</a></li>
                                                <li><a href="Conference2020_Nysarc.html">Conference 2020</a></li>
												
                                            </ul>
                                        </li>


                                        
                                    </ul>

                                    


                                </li>
                               <?php  $data = Session::get('username'); ?>
                                <li class="dropdown"><a href="#">Membership </a>
                                    <ul>
                                        <li><a href="{{route('member_fees')}}">Member fees/benefits</a></li>
                                        <li><a href="{{route('become_member')}}">Become a member</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Education</a>
                                    <ul>
                                        <li><a href="{{route('w_webinar')}}">Webinar</a></li>
                                        <li><a href="{{route('news_letter')}}">Newsletter</a></li>
                                     
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Resources</a>
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
                                <li><a href="{{route('signup')}}">Sign In/Sign Up</a></li>
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
                <div class="nav-logo"><a href="{{route('landing')}}"><img src="{{asset('frontend_lib/images/nysarsc-logo.jpeg')}}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!--End Main Header -->