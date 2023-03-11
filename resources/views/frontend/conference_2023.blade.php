@include('frontend.header')
<style>
    .btn-success1:hover {
    color: #fff;
    background-color: #a9d158;
    border-color: #a9d158;
    }
    .btn-success1 {
    color: #f8f9fa;
    background-color: #a9d158;
    border-color: #28a745;
    width: 25%;
    font-size: 18px!important;
    padding-top: 1%!important;
    }
    @media only screen and (max-width: 600px) {
        .mbe{
                font-size:16px!important;
        }
    }
</style>
<body>

    <!--Sidebar Page Container-->
  <div class="sidebar-page-container"style="    padding: 230px 0px 137px;">
        <div class="container-fluid" style="background: #eee;padding-top: 3%; padding-bottom: 3%;"> 
           <div class="auto-container">
                <span><h2>CONFERENCE 2023<a href=""><p style="    float: right;">Home</a>/<a href="">Conference 2023</a></p></h2>
          </span>
             
           </div>
        </div>
       <!--      <div class="auto-container">-->
       <!--     <div class="row clearfix">-->
       <!--Content Side / Blog Sidebar-->
       <!--         <div class="content-side col-lg-12">-->
       <!--             <div class="blog-single">-->
       <!--                   News Block Three -->
       <!--                 <div class="news-block">-->
       <!--                     <div class="inner-box">-->
                              
       <!--                         <div class="lower-content">-->
                                 
                                  
       <!--                                 <p>Our 2023 Annual Conference will take place June 7-9 in Saratoga Springs NY at the Embassy Suites Hotel.</p>-->
       <!--                                  <p>We will have more information for you very soon.</p>-->
                                  
       <!--                         </div>-->
       <!--                     </div>-->
       <!--                 </div>-->

                       

                       
       <!--             </div>-->
       <!--         </div>-->

              

                      

                       
                    
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <p  class="mbe" style="font-size:18px;">Our 2023 Annual Conference will take place June 7-9 in Saratoga Springs NY at the Embassy Suites Hotel.</p>
                                         <p  class="mbe" style="font-size:18px!important;">We will have more information for you very soon.</p>
                </div>
                <hr>
                    <h4>Conference Rate</h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p style="color:red;">Early Bird $250.00 Registration</p> <br><br><br> &nbsp;&nbsp;&nbsp;&nbsp;
                    <p style="color:red;">after April 30 th , 2022 $275.00</p>

            </div>
        </div>

                
                <div style="padding-top:5%;padding-bottom:5%;text-align:center;">
            
                <span class="input-group-btn">
                @php $no = 1; @endphp
                <a href="{{route('checkout',$no)}}" style="color:#fff!important;">   
                <button class="btn btn-success1 btn-lg"  type="submit" style="padding-top:2%;">JOIN US</a></button>
                    </span></div>
            </div>
    <!-- End Sidebar Page Container -->

@include('frontend.footer')
@include('frontend.script')
</body>
</html>
