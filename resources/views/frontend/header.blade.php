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
<script src="https://kit.fontawesome.com/fc383a6465.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link href="https://fonts.googleapis.com/css?family=Poppins:700|Raleway" rel="stylesheet">-->
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">-->
<style>
@media only screen and (max-width: 600px) {
    .ss{
        display:none;
    }
    .scroll-to-top {
    position: fixed;
    bottom: 15px;
    right: 15px;
    width: 40px;
    height: 30px;
    color: #ffffff;
    font-size: 18px;
    text-transform: uppercase;
    line-height: 40px;
    text-align: center;
    z-index: 100;
    cursor: pointer;
    background: #a9d158;
    display: none;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}
    .btn-success1 {
    color: #f8f9fa;
    background-color: #a9d158;
    border-color: #28a745;
    width: 90%!important;
    font-size: 18px!important;
    padding-top: 3%!important;
}
    .header-top-two .top-left .links li{
            position: absolute;
    margin-right: 18px;
    padding: 25px 164px;
    padding-right: 22px;
    display: inline-block;
    border-right: 1px solid rgba(245,245,245,0.50);
    }
  .logo {
    width: 150px!important;
  }
}
body {
  font-family: "Raleway";
}

h1 {
  font-family: "Poppins";
  text-align: center;
}

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

.column {
  flex: 100%;
  max-width: 100%;
}

.column img {
  vertical-align: middle;
}

.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 0.5s ease;
  background-color: black;
}

.container:hover .overlay {
  opacity: 0.5;
}

/*.text {*/
/*  color: white;*/
/*  font-size: 20px;*/
/*  position: absolute;*/
/*  top: 50%;*/
/*  left: 50%;*/
/*  transform: translate(-50%, -50%);*/
/*  -ms-transform: translate(-50%, -50%);*/
/*  text-align: center;*/
/*}*/

/* Tablet Styles */
@media only screen and (min-width: 481px) {
    .column {
      flex: 50%;
      max-width: 50%;
    }
}


/* Desktop Styles */
@media only screen and (min-width: 1024px) {
    .column {
      flex: 33.3%;
      max-width: 33.3%;
    }
}
ul li {
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
    margin-left: -10px;
    transform: translateY(-50%);
}

.active .fa {
  transform: translateY(-50%) rotate(180deg);
}






.dropdown-submenu {
  position: relative;
}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}



.no-scroll-y {
	overflow-y: hidden;
}

/* Preloader */
.ctn-preloader {
	align-items: center;
  cursor: none;
	display: flex;
  height: 100%;
  justify-content: center;
	position: fixed;
	left: 0;
  top: 0;
	width: 100%;
  z-index: 900;
}

.ctn-preloader .animation-preloader {
	position: absolute;
  z-index: 100;
}

/* Spinner cargando */
.ctn-preloader .animation-preloader .spinner {
  animation: spinner 1s infinite linear;
	border-radius: 50%;
  border: 3px solid rgba(0, 0, 0, 0.2);
  border-top-color: #000000; /* No se identa por orden alfabetico para que no lo sobre-escriba */
  height: 9em;
  margin: 0 auto 3.5em auto;
  width: 9em;
}

/* Texto cargando */
.ctn-preloader .animation-preloader .txt-loading {
  font: bold 5em 'Montserrat', sans-serif;
	text-align: center;
	user-select: none;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:before {
  animation: letters-loading 4s infinite;
  color: #000000;
  content: attr(data-text-preloader);
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  transform: rotateY(-90deg);
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading {
	color: rgba(0, 0, 0, 0.2);
	position: relative;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before {
  animation-delay: 0.2s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before {
  animation-delay: 0.4s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before {
  animation-delay: 0.6s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before {
  animation-delay: 0.8s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before {
  animation-delay: 1s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before {
  animation-delay: 1.2s;
}

.ctn-preloader .loader-section {
  background-color: #ffffff;
  height: 100%;
	position: fixed;
  top: 0;
  width: calc(50% + 1px);
}

.ctn-preloader .loader-section.section-left {
  left: 0;
}

.ctn-preloader .loader-section.section-right {
  right: 0;
}

/* Efecto de fade en la animación de cargando */
.loaded .animation-preloader {
  opacity: 0;
  transition: 0.3s ease-out;
}

/* Efecto de cortina */
.loaded .loader-section.section-left {
  transform: translateX(-101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}

.loaded .loader-section.section-right {
  transform: translateX(101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}

/* Animación del preloader */
@keyframes spinner {
	to {
		transform: rotateZ(360deg);
	}
}

/* Animación de las letras cargando del preloader */
@keyframes letters-loading {
  0%,
  75%,
  100% {
  	opacity: 0;
    transform: rotateY(-90deg);
  }

  25%,
  50% {
    opacity: 1;
    transform: rotateY(0deg);
  }
}

/* Tamaño de portatil hacia atras (portatil, tablet, celular) */
@media screen and (max-width: 767px) {
	/* Preloader */
	/* Spinner cargando */	
	.ctn-preloader .animation-preloader .spinner {
		height: 8em;
		width: 8em;
	}

	/* Texto cargando */
	.ctn-preloader .animation-preloader .txt-loading {
	  font: bold 3.5em 'Montserrat', sans-serif;
	}
}

@media screen and (max-width: 500px) {
	/* Prelaoder */
	/* Spinner cargando */
	.ctn-preloader .animation-preloader .spinner {
		height: 7em;
		width: 7em;
	}

	/* Texto cargando */
	.ctn-preloader .animation-preloader .txt-loading {
	  font: bold 2em 'Montserrat', sans-serif;
	}
}
</style>
</head>


 	<!-- Header span -->

<div class="page-wrapper">
    <!-- Header Span
    <span class="header-span style-two"></span> -->

    <!-- Main Header-->
    <header class="main-header header-style-two alternate-two">

		<!-- Header Top Two -->
    	<div class="header-top-two">
        	<div class="auto-container" style="background:white!important;">
            	<div class="clearfix">

                    <!--Top Left-->
                    <div class="top-left clearfix">
                    	<ul class="links clearfix">
                        	<li><a href="#">P.O. Box 26651 <br>
Rochester, NY 14626
<img src="{{asset('frontend_lib/images/67347.png')}}" style=" width: 35px; position: absolute; margin-top: -13%; padding-left: 3%;">
</a></li>

                        </ul>
                    </div>
  <div class="logo-box">
                    <div class="logo" style="width: 650px;
    /* height: 150px; */
    text-align: center;"><a href="index.php"><img src="{{asset('frontend_lib/images/nysarsc-logo.jpeg')}}" alt="" title="" ></a></div>
                </div>
                    <!--Top Right-->
                  
                </div>

            </div>
        </div>
        <!-- Header Top End -->

        <div class="main-box">
            <div class="auto-container clearfix" style="background:white!important;">
              

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
                                <li class="current dropdown"><a href="#">EVENTS<i class="fa fa-angle-down ss"></i>
</a>
                                    <ul>
                                       
                                        <li class="dropdown"><a href="#">Annual Conference</a>
                                            <ul>
                                                <li><a href="{{route('conference')}}">Conference 2023</a></li>
                                     
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">MEMBERSHIP <i class="fa fa-angle-down ss"></i></a>
                                    <ul>
                                         <li><a href="{{route('membership_details')}}">Member fees/benefits</a></li>
   
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">EDUCATION  <i class="fa fa-angle-down ss"></i> </a>
                                    <ul>
                                       <li><a href="{{route('webinar_details')}}">Webinar</a></li>
                                        <li><a href="{{route('newsletter_details')}}">Newsletter</a></li>
                                    </ul>
                                </li>
                              
                                <li class="dropdown"><a href="#">RESOURCES  <i class="fa fa-angle-down ss"></i></a>
                                    <ul>
                                        <li><a href="{{route('hub')}}">HUB</a></li>
                                         <li><a href="{{route('links')}}">LINKS</a></li>
                                     
                                    </ul>
                                </li>
                               <li class="dropdown"><a href="#">ABOUT US  <i class="fa fa-angle-down ss"></i></a>
                                    <ul>
                                        <li><a href="{{route('board')}}">Board</a></li>
                                        <li><a href="{{route('committe')}}">Committee</a></li>
                                        <li><a href="{{route('mission')}}">Mission</a></li>
                                        
                                    </ul>
                                </li>
                                <?php  $data = Session::get('fi'); ?>
                                @if($data!='')
                                <li class="dropdown"><a href="#">Welcome - {{$data}}</a>
                                    <ul>
                                    <li><a href="{{route('coupon_code_user_get')}}">Coupon Code Section</a></li>
                                    <li><a href="{{route('reference_user')}}">Referenced Users</a></li>
                                    <li><a href="{{route('setting')}}">Profile Update</a></li>
                                    <li><a href="{{route('change_password')}}">Change Password</a></li>
                                    <li><a href="{{route('web_logout')}}">Logout</a></li>
                                    </ul>
                                </li> 
                                @else
                                <li><a href="{{route('signup')}}">LOGIN</a></li>
                                @endif
                                 <!--<i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 30px;"></i>-->
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer box -->
               
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
                <div class="nav-logo"><a href="index.html"><img src="{{asset('frontend_lib/css/images/nysarsc-logo.jpeg')}}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>$(document).ready(function() {
  
  setTimeout(function() {
    $('#ctn-preloader').addClass('loaded');
    // Una vez haya terminado el preloader aparezca el scroll
    $('body').removeClass('no-scroll-y');

    if ($('#ctn-preloader').hasClass('loaded')) {
      // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
      $('#preloader').delay(1000).queue(function() {
        $(this).remove();
      });
    }
  }, 3000);
  
});</script>