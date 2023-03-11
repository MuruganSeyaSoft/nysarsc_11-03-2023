@include('frontend.header')
<style>.btn-success1:hover {
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
                <span><h2>Check Out Member's List </p></h2>
          </span>
             
           </div>
        </div>
            <!-- <div class="auto-container">-->
            <!--<div class="row clearfix">-->
      
                <!--Content Side / Blog Sidebar-->
            <!--    <div class="content-side col-lg-12">-->
            <!--        <div class="blog-single">-->
                         <!-- News Block Three -->
            <!--            <div class="news-block">-->
            <!--                <div class="inner-box">-->
                              
            <!--                    <div class="lower-content">-->
                                 
                                   
                                  
            <!--                            <p style="line-height: 25px;">Join NYSASRC and become part of the Association that unites all of us Resident Service Coordinators. NYSARSC hosts an annual conference where you we will meet your peers from across New York State. The conference is an excellent opportunity to learn from some of the best speakers about all the topics we all face daily.</p>-->
            <!--                            <br><p style="line-height: 25px;">It's crazy, but the things you love, prospective buyers might hate—and that means you might have a hard time unloading your home when it comes time to sell. Here's how to choose wisely</p>-->
            <!--                            <br><p>Annual membership Fee is only $5.00 !  Click HERE to become a member.</p>-->
                                  
                                   
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

                       

                       
            <!--        </div>-->
            <!--    </div>-->

              

                      

                       
                    
                
            </div>
        </div>

        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

        <div class="container">
        <table border="1">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <!-- <th>Billing Name</th> -->
                      <th>Email</th>
                      <th>Phone</th>
                      <!-- <th>Delete</th> -->
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($details as $details)
                    <tr>
                      <td data-column="First Name">{{$details->fullname}}</td>
                      <!-- <td data-column="Last Name">{{$details->billingname}}</td> -->
                      <td data-column="Job Title">{{$details->email}}</td>
                      <td data-column="Twitter">{{$details->phone}}</td>
                      
                     
                 {{--   @if($mem_id != $details->parent_id)
                      <td data-column="Twitter">
                      <a  onclick="return confirm('Are you sure to delete?')" 
                                href="{{route('c_member_delete',$details['id'])}}"><b style="color:red;">Delete</b></a>
                      </td>
                      @else
                      
                        <td data-column="Twitter">
                      <a href="#"><b style="color:red;"><del>Delete</del></b></a>
                      </td>
                      
                      
                      @endif   --}}
                      
                    </tr>

                 


                    @endforeach
                  
                   
                  </tbody>
                </table>
        </div>
          <div style="padding-top:5%;padding-bottom:5%;text-align:center;">
    
<span class="input-group-btn">
          <a href="{{ url()->previous() }}" style="color:#fff!important;">      <button class="btn btn-success1 btn-lg"  type="submit" style="padding-top:2%;">Return Back to Checkout</a></button>
              </span></div>
    </div>
    <!-- End Sidebar Page Container -->
@include('frontend.footer')
@include('frontend.script')
</body>
</html>
