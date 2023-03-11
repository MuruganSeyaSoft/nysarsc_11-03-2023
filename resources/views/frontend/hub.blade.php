@include('frontend.header')
<style>
        @media only screen and (max-width: 600px) {
        .mbe1{
                margin-top:70px!important;
        }
        .mbe2{
                 margin-left: 0%!important; 
                padding-top: 20%!important;
        }
    }
</style>
<body>

    <!--Sidebar Page Container-->
 <div class="sidebar-page-container"style="    padding: 230px 0px 137px;">
        <div class="container-fluid" style="background: #eee;padding-top: 3%; padding-bottom: 3%;"> 
           <div class="auto-container">
                <span><h2>HUB<a href=""><p  class="mbe1" style="    float: right;">Home/</a><a href="">Hub</a></p></h2>
          </span>
             
           </div>
        </div>
 
                    <div class="container">
           
                <div class="col-lg-12">
                     			<p  class="mbe2" style="margin-left: 30%; padding-top: 5%;">US <span style="font-weight: 400;">Housing &amp; Urban Development Dept. page for NYS Seniors   </span><a href="https://www.hud.gov/states/new_york/homeownership/seniors" target="_blank" rel="noopener"><img decoding="async" class="alignnone size-full wp-image-1938" src="https://www.nysarsc.com/wp-content/uploads/Right-circle-for-links.png" alt="" width="28" height="28" srcset="https://www.nysarsc.com/wp-content/uploads/Right-circle-for-links.png 144w, https://www.nysarsc.com/wp-content/uploads/Right-circle-for-links-75x75.png 75w, https://www.nysarsc.com/wp-content/uploads/Right-circle-for-links-100x100.png 100w" sizes="(max-width: 28px) 100vw, 28px" style="width: 15px";/></a></p>

                </div>
            
        </div>
              

        
</div>
    <!-- End Sidebar Page Container -->

    @include('frontend.footer')
@include('frontend.script')
</body>
</html>
