@include('frontend.header')

<style>
  .label {color:#4238ca; font-weight:bold;}
</style>

   
    <!-- Buy Ticket  -->
    <section class="buy-ticket">


        <!--<div class="anim-icons full-width">-->
        <!--    <span class="icon icon-circle-blue wow fadeIn"></span> -->
        <!--    <span class="icon icon-dots wow fadeInleft"></span>-->
        <!--    <span class="icon icon-line-1 wow zoomIn"></span>-->
        <!--    <span class="icon icon-circle-1 wow zoomIn"></span>-->
        <!--</div>-->

        
        <!--<div class="anim-icons full-width">-->
        <!--    <span class="icon icon-circle-blue wow fadeIn"></span>-->
        <!--    <span class="icon icon-circle-1 wow zoomIn"></span>-->
        <!--</div>-->
        <div class="auto-container" style="padding-top:15%;width: 600px;">
            <div class="row">
              

                <div class="col-md-12">
                <h4 style="padding: 1%; font-size: 20px;background-color: #1a4147;color: #fff; border-top: 2px solid #777777;">Login </h4>
<div class="ticket-form" style="border:2px #777777 solid">
                <form class="form-user_login" id="form-user_login" action="javascript:;">
                    @csrf
                <div class="form-group">
                <label class="label">Username</label>
                <input type="text" name="username" placeholder="username" autocomplete="off">
                </div>
                <div class="form-group">
                <label class="label">Password</label>
                <input type="password" name="password" placeholder="Password" autocomplete="off">
                </div>
                <br>
                <div class="msgDiv1"></div>
                <br>

                <div class="form-group col-lg-12 col-md-12 text-right">
                <input type="submit" name="submit" value="Login" class="theme-btn btn-style-one">
                </div>               
                <div class="row">
                <div class="col-lg-6">
                 <p>Not a member? <a href="{{route('register')}}"> Register </a> </p>
                </div>
                <div class="col-lg-6">
                    <!-- <p>or sign up with:</p> -->
                </div></div>
                </form>
</div>

                </div>
                </div>
        </div>
    </section>
    <!-- End Buy Ticket  -->

 
    <!-- Main Footer -->
    @include('frontend.footer')
@include('frontend.script')
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

</div>
</div>
</div>
</div>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>



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


