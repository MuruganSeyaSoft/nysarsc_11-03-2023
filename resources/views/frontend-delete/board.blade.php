@include('frontend.header')

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-12">
                    <div class="blog-single">
                         <!-- News Block Three -->
                        <div class="news-block">
                            <div class="inner-box">
                              
                                <div class="lower-content">
                                   
                                    <h2>BOARD</h2>
                                   
                                  
                                     <section class="pricing-section-two alternate" style="padding:0px;">
        <div class="auto-container">
           

            <div class="outer-box">
                <div class="row">
                    <!-- Pricing Block -->
                    <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                           
                            <div class="price-box">
                                <h2 class="price" style="font-size: 19px;">Cynthia Platteter</h2>
                            </div>
                            <ul class="features">
                                <li class="true"> President</li>
                                <li class="true">   president@nysarsc.com</li>
                               
                            </ul>
                            
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                          
                            <div class="price-box">
                                <h2 class="price" style="font-size: 19px;">Susan Oliver</h2>
                            </div>
                            <ul class="features">
                                <li class="true">  Vice President</li>
                                <li class="true"> vicepresident@nysarsc.com</li>
                               
                            </ul>
                          
                        </div>
                    </div>
                </div>
                    <!-- Pricing Block -->
                    <div class="row">
                    <div class="pricing-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                        <div class="inner-box" style="    padding: 33px 30px 80px;">
                           
                            <div class="price-box">
                                <h2 class="price" style="font-size: 19px;">Michelle McGee</h2>
                            </div>
                            <ul class="features">
                                <li class="true">Secretary</li>
                                <li class="true">  secretary@nysarsc.com</li>
                               
                            </ul>
                            
                        </div>
                    </div>
                     <!-- Pricing Block -->
                     <div class="pricing-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                        <div class="inner-box"  style="    padding: 33px 30px 80px;">
                           
                            <div class="price-box">
                                <h2 class="price" style="font-size: 18px;">Gwendolyn Jones</h2>
                            </div>
                            <ul class="features">
                                <li class="true">Treasurer</li>
                                <li class="true">   treasurer@nysarsc.com 
                                <!--<br>[/vc_column_text][/vc_column][/vc_row]-->
                                </li>
                               
                            </ul>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>>
                                       
                                  
                                   
                                </div>
                            </div>
                        </div>

                       

                       
                    </div>
                </div>

              

                      

                       
                    
                
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

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
</body>
</html>
