@extends('admin.app')
@section('content')

   <!-- ########## START: MAIN PANEL ########## -->
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <!-- <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p> -->
        </div>
      </div>

      <div class="br-pagebody">

      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="row no-gutters widget-1 shadow-base">
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Total Earning</h6>
                <a href="{{route('earning',1)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark1">5,3,9,6,5,9,7,3,5,2</span> -->
                <span>${{$total_paid}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
               
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-4 mg-t-1 mg-sm-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Weekly Earning</h6>
                <a href="{{route('earning',2)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark2">2,8,7,8,2,6,5,3,5,2</span> -->
                <span class="tx-medium tx-inverse tx-32">${{$weekly_paid}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
                
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-4 mg-t-1 mg-lg-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title"> Monthly Earning </h6>
                <a href="{{route('earning',3)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark3">8,6,5,9,8,4,9,3,5,9</span> -->
                <span>${{$monthly_paid}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
              
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          
        </div><!-- row -->

        
        <br>



        <div class="row no-gutters widget-1 shadow-base">
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">TOTAL EARNING FOR CHEQUE</h6>
                <a href="{{route('earning_filter',1)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark1">5,3,9,6,5,9,7,3,5,2</span> -->
                <span>${{$total_paid_cheque}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
               
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-1 mg-sm-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">APPROVED EARNING FOR CHEQUE</h6>
                <a href="{{route('earning_filter',2)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark2">2,8,7,8,2,6,5,3,5,2</span> -->
                <span class="tx-medium tx-inverse tx-32">${{$total_paid_cheque_approved}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
                
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-1 mg-lg-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title"> UNAPPROVED EARNING FOR CHEQUE </h6>
                <a href="{{route('earning_filter',3)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark3">8,6,5,9,8,4,9,3,5,9</span> -->
                <span>${{$total_paid_cheque_unapproved}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
              
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->


          <div class="col-sm-6 col-lg-3 mg-t-1 mg-lg-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title"> TOTAL EARNING FOR CARD </h6>
                <a href="{{route('earning_filter',4)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark3">8,6,5,9,8,4,9,3,5,9</span> -->
                <span>${{$total_paid_card}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
              
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->



          
        </div><!-- row -->



        <br/>


        

        <div class="row no-gutters widget-1 shadow-base">
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Total Members</h6>
                <a href="{{route('member_dashboard',1)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark1">5,3,9,6,5,9,7,3,5,2</span> -->
                <span>{{$total_member}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
               
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-4 mg-t-1 mg-sm-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Active Members</h6>
                <a href="{{route('member_dashboard',2)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark2">2,8,7,8,2,6,5,3,5,2</span> -->
                <span class="tx-medium tx-inverse tx-32">{{$active_member}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
                
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-4 mg-t-1 mg-lg-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title"> In Active Member </h6>
                <a href="{{route('member_dashboard',3)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark3">8,6,5,9,8,4,9,3,5,9</span> -->
                <span>{{$inactive_member}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
              
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          
        </div><!-- row -->

        <br>

        <div class="row no-gutters widget-1 shadow-base">
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Total Coupons</h6>
                <a href="{{route('coupon_dashboard',1)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark1">5,3,9,6,5,9,7,3,5,2</span> -->
                <span>{{$total_coupon}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
               
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-4 mg-t-1 mg-sm-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Active Coupons</h6>
                <a href="{{route('coupon_dashboard',2)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark2">2,8,7,8,2,6,5,3,5,2</span> -->
                <span class="tx-medium tx-inverse tx-32">{{$active_coupon}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
                
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-4 mg-t-1 mg-lg-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title"> In Active Coupons </h6>
                <a href="{{route('coupon_dashboard',3)}}" target="_blank"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark3">8,6,5,9,8,4,9,3,5,9</span> -->
                <span>{{$inactive_coupon}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
              
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          
        </div><!-- row -->
<br>


<div class="row no-gutters widget-1 shadow-base">
          <div class="col-sm-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Coupons Used Members</h6>
                <!--<a href="#"><i class="icon ion-android-more-horizontal"></i></a>-->
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark1">5,3,9,6,5,9,7,3,5,2</span> -->
                <span>{{$ad_cou_count}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
               
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-6 mg-t-1 mg-sm-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Coupons Not Used Members</h6>
                <!--<a href="#"><i class="icon ion-android-more-horizontal"></i></a>-->
              </div><!-- card-header -->
              <div class="card-body">
                <!-- <span id="spark2">2,8,7,8,2,6,5,3,5,2</span> -->
                <span class="tx-medium tx-inverse tx-32">{{$ad_cou_count_not_used}}</span>
              </div><!-- card-body -->
              <div class="card-footer">
                
                <div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          
          
        </div><!-- row -->


<br>



                </tbody>
              </table>
           
            </div><!-- card -->
          </div><!-- col-6 -->

          <div class="col-lg-4"></div>


         
        </div><!-- row -->
      </div><!-- br-pagebody -->

      <footer class="br-footer">
        <!-- <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div> -->
        <!-- <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div> -->
      </footer>
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
    @section('scripts')   
    <script>
        $('#dashboard').addClass('active')
        $('#site_title').html(' | Dashboard ')
    </script> 
    <script src="{{asset('assets/public/admin_lib/d3/d3.js')}}"></script>
    <script src="{{asset('assets/public/admin_lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('assets/public/admin_lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/public/admin_lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/public/admin_lib/flot-spline/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('assets/public/admin_lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/public/admin_lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/public/admin_lib/select2/js/select2.full.min.js')}}"></script>

    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>

@endsection('scripts')