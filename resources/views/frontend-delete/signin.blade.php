@include('frontend.header')

   
    <!-- Buy Ticket  -->
    <section class="buy-ticket">


        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>

        
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
               

                <!-- Form Column -->
                <div class="form-column col-lg-12">
                    <div class="inner-column">
                        <h4>REGISTRATION FORM</h4>
                        <div class="ticket-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="First Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Last Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="User Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="password" required="">
                                </div>

                                
                                <div class="form-group">
                                    <input type="phone" name="email" placeholder="Phone" required="">
                                </div>


                                <!-- <div class="form-group">
                                    <input type="checkbox" name="terms" id="term" required="">
                                    <label for="term">I accept the <span>Terms &amp; Conditions</span></label>
                                </div> -->
<!-- 
                                <div class="form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="Submit"><span class="btn-title">Register Now</span></button>
                                </div> -->
                            </form>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 text-right">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">REGISTER NOW</span></button>
                        </div>
                      

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Buy Ticket  -->

 
    <!-- Main Footer -->
    <footer class="main-footer">
       

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="copyright-text">
                        <p>© Copyright 2020 All Rights Reserved by <a href="index.html">Expert-Themes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Demo</h6>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now</a>
</div><!-- End Color Switcher -->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Seo</a></li>
                <li><a href="#">Bussiness</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Digital</a></li>
                <li><a href="#">Conferance</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
@include('frontend.script')
</body>
</html>

