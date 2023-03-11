
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{asset('frontend_lib/js/jquery.js')}}"></script>
<script src="{{asset('frontend_lib/js/popper.min.js')}}"></script>
<script src="{{asset('frontend_lib/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend_lib/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend_lib/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend_lib/js/appear.js')}}"></script>
<script src="{{asset('frontend_lib/js/owl.js')}}"></script>
<script src="{{asset('frontend_lib/js/jquery.countdown.js')}}"></script>
<script src="{{asset('frontend_lib/js/wow.js')}}"></script>
<script src="{{asset('frontend_lib/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>

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
//*****************GO RENT********************
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});

</script>