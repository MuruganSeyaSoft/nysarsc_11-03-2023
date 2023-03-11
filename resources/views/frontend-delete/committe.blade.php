@include('frontend.header')

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container" style="padding: 110px 0px 137px;">
        <div class="container-fluid" style="background: #eee;padding-top: 3%; padding-bottom: 3%;"> 
        <div class="auto-container">

    <h2>COMMITTEES</h2>
    <span style="float: right;">Home/Committees</span>
</div>
</div>
 <div class="auto-container">
            <div class="row clearfix">
   
                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-12">
                    <div class="blog-single">
                         <!-- News Block Three -->
                        <div class="news-block">
                            <div class="inner-box">
                              
                                <div class="lower-content" style="padding: 0px 0px 0px;">
                                   
                                      
                                       <h4 style="padding-top:10%;"><a href="">Annual Conference Planning Committee</a></h4><br />
                                   <span class="comm_sec">Joelle Bolam (Co-chair)<b style="color:#a9d158;">email Joelle</b></span><br>
                                   <span class="comm_sec">Donna Franchini (Co-chair)<b style="color:#a9d158;">email Donna</b></span><br>
                                   <span class="comm_sec">Wendy Fieser</span><br>
                                   <span class="comm_sec">Carolyn Crawmer</span><br>
                                   <span class="comm_sec">P K Dave</span><br>
                                  
                                   
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
