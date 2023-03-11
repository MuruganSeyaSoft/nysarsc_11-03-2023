@include('frontend.header')

</head>

<body>

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container"style="    padding: 230px 0px 137px;">
        <div class="container-fluid" style="background: #eee;padding-top: 3%; padding-bottom: 3%;"> 
           <div class="auto-container">
                <span><h2>Coupon Code<a href=""><p style="    float: right;">Home/</a><a href="">Couponcoe</a></p></h2>
          </span>
             
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
                              
                                <div class="lower-content">
                                   
                                  
                                     <section class="pricing-section-two alternate" style="padding:0px;">
        <div class="auto-container">
           

            <div class="outer-box">
                <div class="row">
                    <!-- Pricing Block -->
                    @foreach($details as $details)
                    <div class="pricing-block-two col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                           
                            <div class="price-box">
                                <h2 class="price" style="font-size: 19px;">{{$details->couponcode_id}}</h2>
                            </div>
                            <ul class="features">
                                <li class="true"> <b style="color:red;">Start Date </b>&nbsp;:&nbsp; {{$details['coupon']->start_date}}</li>
                                <li class="true">  <b style="color:red;">End Date </b>&nbsp;:&nbsp; {{$details['coupon']->end_date}}</li>
                                <li class="true">  <b style="color:red;">
                                <input type="text" value="{{$details->couponcode_id}}" id="myInput{{$details->couponcode_id}}" style="display:none;" >

                             </b>&nbsp;&nbsp; <button onclick="myFunction{{$details->couponcode_id}}()">Copy Code</button></li>
                            </ul>

                            <script>
                            function myFunction{{$details->couponcode_id}}() {
                            // Get the text field
                            var copyText = document.getElementById("myInput{{$details->couponcode_id}}");

                            // Select the text field
                            copyText.select();
                            copyText.setSelectionRange(0, 99999); // For mobile devices

                            // Copy the text inside the text field
                            navigator.clipboard.writeText(copyText.value);
                            
                            // Alert the copied text
                            alert("Code Copied ");
                            }
                            </script>


                            
                        </div>
                    </div>
                    @endforeach

                                       <!-- Pricing Block -->
                    
                </div>
                </div>
            </div>
        </div>
    </section>
                                       
                                  
                                   
                                </div>
                            </div>
                        </div>

                       

                       
                    </div>
                </div>

              

                      

                       
                    
                
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
    @include('frontend.footer')
@include('frontend.script')
</body>
</html>
