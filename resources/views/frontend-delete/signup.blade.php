@include('frontend.header')

<style>
  .label {color:#4238ca; font-weight:bold;}
</style>

   
    <!-- Buy Ticket  -->
    <section class="buy-ticket">


        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span> 
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>

        
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container" style="padding-top:5%;">
            <div class="row">
                <div class="col-md-6" style="border: 2px solid;padding-left:0px;padding-right:0px;">

                <h4 style="padding: 1%;font-size: 20px;background-color:#1a4147;color:#fff;">Registration Form</h4>
<div class="ticket-form">
<form class="form-user" id="form-user" action="javascript:;">
@csrf
<span style="display:flex;">
<div class="col-lg-6">
<div class="form-group">
<label class="label">First Name</label>
<input type="text" name="first_name" placeholder="First Name" autocomplete="off">
</div></div>
<div class="col-lg-6">
<div class="form-group">
<label class="label">Last Name</label>
<input type="text" name="last_name" placeholder="Last Name" autocomplete="off">
</div></div></span>
<span style="display:flex;">
<div class="col-lg-6">
<div class="form-group">
<label class="label">Email</label>
<input type="email" name="email" placeholder="Your Email" autocomplete="off">
</div></div>
<div class="col-lg-6">
<div class="form-group">
<label class="label">Mobile</label>
<input type="phone" name="mobile"  autocomplete="off">
</div>
</div>
</span>
<div class="col-lg-12">
<div class="form-group">
<label class="label">Street Address</label>
<input type="phone" name="street_address"  autocomplete="off">
</div></div>
<span style="display:flex;">
    <div class="col-lg-6">
<div class="form-group">
<label class="label">City</label>
<input type="phone" name="city"  autocomplete="off">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="label">State</label>
<input type="phone" name="state"  autocomplete="off">
</div>
</div>
</span>
<span style="display:flex;">
<div class="col-lg-6">
<div class="form-group">
<label class="label">Zipcode</label>
<input type="phone" name="zipcode"  autocomplete="off">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="label">Country</label>
<input type="phone" name="country"  autocomplete="off">
</div>
</div>
</span>
<span style="display:flex;">
    <div class="col-lg-6">
<div class="form-group">
<label class="label">Username</label>
<input type="text" name="username" placeholder="User Name" autocomplete="off">
</div>
</div>
   <div class="col-lg-6">
<div class="form-group">
<label class="label">Password</label>
<input type="password" name="password" placeholder="password" autocomplete="off">
</div>

</div>
</span>
 <div class="msgDiv"></div>
           

<div class="form-group col-lg-12 col-md-12 text-right" style="padding-top: 5%;">
<input type="submit" name="submit" value="Register Now" class="theme-btn btn-style-one">
</div>                      
</form>
</div>

                </div>

                <div class="col-md-6">
                <h4 style="padding: 1%;font-size: 20px;background-color:#1a4147;color:#fff;">Login Form</h4>
<div class="ticket-form" style="border:2px #777777 solid">
<form class="form-user_login" id="form-user_login" action="javascript:;">
    @csrf
<div class="form-group">
<label class="label">Username</label>
<input type="text" name="username" placeholder="username" autocomplete="off" readonly 
    onfocus="this.removeAttribute('readonly');">
</div>
<div class="form-group">
<label class="label">Password</label>
<input type="password" name="password" placeholder="Password" autocomplete="off" readonly 
    onfocus="this.removeAttribute('readonly');">
</div>

<div class="msgDiv1"></div>
<br>

<div class="form-group col-lg-12 col-md-12 text-right">
<input type="submit" name="submit" value="Login" class="theme-btn btn-style-one">
</div>                      

</form>
</div>

                </div>
                </div>
        </div>
    </section>
    <!-- End Buy Ticket  -->

 
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


<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>
    $("#form-user").validate({
        normalizer: function(value) {
            return $.trim(value);
        },
        rules: {
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            email: {
                required: true
            },
            mobile: {
                required: true
            },
            username: {
                required: true
            },
            password: {
                required: true
            },
             street_address: {
                required: true
            },
             city: {
                required: true
            },
             state: {
                required: true
            },
             zipcode: {
                required: true
            },
             country: {
                required: true
            },


        },
        messages: {
            first_name: {
                required: "First Name is required"
            },
            last_name: {
                required: "Last Name is required"
            },
            email: {
                required: "Email is required"
            },
            mobile: {
                required: "Mobile Number is required"
            },
            username: {
                required: "Username is required"
            },
            password: {
                required: "Password is required"
            },
             street_address: {
                required: "Street Address is required"
            },
             city: {
                required: "City is required"
            },
             state: {
                required: "State is required"
            },
             zipcode: {
                required: "Zipcode is required"
            },
             country: {
                required: "Country is required"
            },


        },

        submitHandler: function(form) {
            $('.msgDiv').html(``);
            var data = new FormData(form);
            $.ajax({
                type: "post",
                url: "{{route('user_registration')}}",
                data: data,
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.status == 1) {

                        $('.msgDiv').html(` <div class="alert alert-success">` + data.message + `</div>`);
                        setTimeout(function() {
                            $('.msgDiv').html(``);
                            window.location.reload();
                        }, 1000);

                    } else {
                        //var errors = data.message;
                      //alert(errors);
                      var object = ((data.message));
                      //alert(JSON.stringify(data.message.mobile));

                     // alert(fg);

//                       var output = '';
// for (var property in object) {
//   output += property + ': ' + object[property]+'; ';
// }
// alert(output);



                      let txt = "";
                      
                        for (let x in object) {
                        txt += object[x] + '<br/>';
                        };
                        //  alert(txt);

                        // var html = "";
                        // $.each(data.errors, function(key, value) {
                        //     html += value + "<br/>";
                        // });
                      //  document.getElementById("demo").innerHTML = txt;
                       // alert(txt);

                        $('.msgDiv').html(`<div class="alert alert-danger m-2">` + txt + `</div>`);
                        // setTimeout(function() {
                        //     $('.msgDiv').html(``);
                        //     window.location.reload();
                        // }, 1000);
                    }
                }
            });
            return false;
        }
    });

</script>



<script>
    $("#form-user_login").validate({
        normalizer: function(value) {
            return $.trim(value);
        },
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            },


        },
        messages: {
            username: {
                required: "Username is required"
            },
            password: {
                required: "Password is required"
            },


        },

        submitHandler: function(form) {
            $('.msgDiv').html(``); $('.msgDiv1').html(``); 
            var data = new FormData(form);
            $.ajax({
                type: "post",
                url: "{{route('user_login_check')}}",
                data: data,
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.status == 1) {

                        $('.msgDiv1').html(` <div class="alert alert-success">` + data.message + `</div>`);
                        setTimeout(function() {
                            $('.msgDiv1').html(``);
                           // window.location.reload();
                           window.location.href = "{{URL::to('/')}}"
                        }, 1000);

                    } else {
                        //var errors = data.message;
                      //alert(errors);
                      var object = ((data.message));

                    $('.msgDiv1').html(`<div class="alert alert-danger m-2">` + object + `</div>`);
                       
                    }
                }
            });
            return false;
        }
    });

</script>







</body>
</html>

