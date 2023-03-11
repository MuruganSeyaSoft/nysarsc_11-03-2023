@include('frontend.header')


<style>


  
  .wrapper{
    text-align: center;}
  .btn12{
    background: #fefefe;
    border: .625em;
    color: #009688;
    padding: .5em 1em;}
    

img {
    display: inline-block;
    max-width: 50%;
    height: auto;
}
    
      
  .iframe{
    width: 100%;
    height: 600px;
    display: none;}
    /* CSS for responsive iframe */
/* ========================= */

/* outer wrapper: set max-width & max-height; max-height greater than padding-bottom % will be ineffective and height will = padding-bottom % of max-width */
#Iframe-Master-CC-and-Rs {
  max-width: 812px;
  max-height: 100%; 
  overflow: hidden;
}

/* inner wrapper: make responsive */
.responsive-wrapper {
  position: relative;
  height: 0;}
 
.responsive-wrapper iframe {
  position: absolute;top: 0;
  left: 0;width: 100%;height: 100%;margin: 0;
  padding: 0;border: none;}

/* padding-bottom = h/w as % -- sets aspect ratio */
/* YouTube video aspect ratio */
.responsive-wrapper-wxh-572x612 {
  padding-bottom: 107%;
}

/* general styles */
/* ============== */
.set-border {
  border: 5px inset #ddd;
}
.set-box-shadow { 
  -webkit-box-shadow: 4px 4px 14px #4f4f4f;
  -moz-box-shadow: 4px 4px 14px #4f4f4f;
  box-shadow: 4px 4px 14px #4f4f4f;
}
.set-padding {
  padding: 10px;
}
.set-margin {
  margin: 30px;
}
.center-block-horiz {
  margin-left: auto !important;
  margin-right: auto !important;
}

</style>
</head>

<body>


    <!--Sidebar Page Container-->
   <div class="sidebar-page-container"style="    padding: 230px 0px 137px;">
        <div class="container-fluid" style="background: #eee;padding-top: 3%; padding-bottom: 3%;"> 
           <div class="auto-container">
                <span><h2>NEWSLETTER<a href=""><p style="    float: right;">Home</a><a href="">/NewsLetter</a></p></h2>
          </span>
             
           </div>
        </div>
        
  
                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-12">
                    <div class="blog-single">
                         <!-- News Block Three -->
                        <div class="news-block">
                            <div class="inner-box">
                              
                                <div class="lower-content" style="padding:0px;">
                                   
                          
                                
                                   
                                </div>
                            </div>
                        </div>

                       

                       
                    </div>
                </div>
      
                    </div>
                </div>

         

  <div class="wrapper">
 <p style="text-align:center;">Click the below image</p>

  <a href ="NYSARSC-NEWSLETTER-SPRING-2020_small.html" target="_blank"><button class="office-viewer btn12">   <img src="{{asset('frontend_lib/images/news_letter_2020 .jpg')}}"></button></a>
                                        
                
                    
                
            </div>

    <!-- End Sidebar Page Container -->

    @include('frontend.footer')
@include('frontend.script')
</body>
</html>
