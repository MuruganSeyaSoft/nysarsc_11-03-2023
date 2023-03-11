<?php
    header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
    header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NYSARSC">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="NYSARSC">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title id="site_title">Home</title>

    <!-- vendor css -->
     <!-- vendor css -->
     <link href="{{asset('admin_lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
     <link href="{{ asset('admin_lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
     <link href="{{asset('admin_lib/Ionicons/css/ionicons.min.css')}}" rel="stylesheet">
     <link href="{{asset('admin_lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
     <link href="{{asset('admin_lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
     <link href="{{asset('admin_lib/highlightjs/github.css')}}" rel="stylesheet">
     <link href="{{asset('admin_lib/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet">
     <link href="{{asset('admin_lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet">
     <link href="{{asset('admin_lib/select2/css/select2.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
     <!-- Bracket CSS -->
     <link rel="stylesheet" href="{{asset('admin_css/bracket.css')}}">
     <link rel="stylesheet" href="{{asset('admin_css/bracket.oreo.css')}}">
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Admin<span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{route('admin_dashboard')}}" class="br-menu-link" id="dashboard">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      
       

        <li class="br-menu-item">
          <a href="{{route('member_management')}}" class="br-menu-link" id="categorymanagement">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Member  Management</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
          <a href="{{route('couponcode_management')}}" class="br-menu-link" id="couponcode_management">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Coupon Code Section</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

       <?php 
       /* <li class="br-menu-item">
          <a href="{{route('annual_conference')}}" class="br-menu-link" id="annual_conference">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Conference Section</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
          <a href="{{route('webinar')}}" class="br-menu-link" id="webinar">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Webinar Section</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        

        <li class="br-menu-item">
          <a href="{{route('b_member')}}" class="br-menu-link" id="b_member">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Become Member</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
          <a href="{{route('bene_member')}}" class="br-menu-link" id="bene_member">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Member Benefits / Fees</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        */?>


        <li class="br-menu-item">
          <a href="{{route('member_peyment_details')}}" class="br-menu-link" id="member_peyment_details">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Member's Payment Details</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->





        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub" id="reports">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Reports</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub" style="display: none;">
            <li class="sub-item"><a href="{{route('master_report',1)}}" class="sub-link">Sate Wise</a></li>
            <li class="sub-item"><a href="{{route('master_report',2)}}" class="sub-link">City Wise</a></li>
            <li class="sub-item"><a href="{{route('master_report',3)}}" class="sub-link">Pincode Wise</a></li>
            <li class="sub-item"><a href="{{route('master_report',4)}}" class="sub-link">Date Wise</a></li>
          </ul>
        </li>



        
        


       


        
        
        <!-- <li class="br-menu-item">
          <a href="#" class="br-menu-link" id="customermanagement">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Settings</span>
          </a>
        </li> -->

      
        

    


        <li class="br-menu-item">
          <a onclick="return confirm('Are you sure to Logout?')"  href="{{route('admin_logout')}}" class="br-menu-link" id="employeemanagement">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Logout</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->







            

      </ul><!-- br-sideleft-menu -->

    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

  
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('content')

      <footer class="br-footer">
        {{--<div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div> --}}
      </footer>

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('admin_lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin_lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('admin_lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin_lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('admin_lib/moment/moment.js')}}"></script>
    <script src="{{asset('admin_lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('admin_lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{asset('admin_lib/peity/jquery.peity.js')}}"></script>
    <script src="{{asset('admin_lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('admin_lib/select2/js/select2.min.js')}}"></script>
    <!--toastr Validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <script src="{{asset('admin_js/bracket.js')}}"></script>

    @yield('scripts')
  </body>
</html>
