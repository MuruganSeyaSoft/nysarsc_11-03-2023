<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <!-- Twitter -->
        <meta name="twitter:site" content="@themepixels">
        <meta name="twitter:creator" content="@themepixels">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Nysarsc">
        <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
        <!-- Facebook -->
        <meta property="og:url" content="http://themepixels.me/bracketplus">
        <meta property="og:title" content="Nysarsc">
        <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
        <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">
        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels"> --}}
        <title>Nysarsc - Admin Panel</title>
        <!-- vendor css -->
        <link href="{{asset('admin_lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin_lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <!-- Bracket CSS -->
        <!-- <link rel="stylesheet" href="{{asset('assets/css/gold.css')}}"> -->
        <link rel="stylesheet" href="{{asset('admin_css/bracket.css')}}">
        <link rel="stylesheet" href="{{asset('admin_css/bracket.oreo.css')}}">
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center ht-100v">
       
            <form role="form" method="post" action="javascript:;" id="loginForm">
                <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
                    <div class="login-wrapper wd-300 wd-xs-500 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
                    <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">
                        <h2>Admin Login</h2></div>
                    <div class="tx-white-5 tx-center mg-b-60"></div>
                    <div class="msgDiv"></div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control fc-outline-dark" placeholder="Enter your email">
                    </div><!-- form-group -->
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control fc-outline-dark" placeholder="Enter your password">
                        <a href="" class="tx-primary tx-12 d-block mg-t-10"></a>
                    </div><!-- form-group -->
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                    <div class="mg-t-60 tx-center"></div>
                    </div><!-- login-wrapper -->
                </div><!-- overlay-body -->
            </form>
        </div><!-- d-flex -->


        <script src="{{asset('admin_lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin_lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
        <script src="{{asset('admin_lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- <script src="{{asset('js/jquery.validate.js')}}"></script> -->
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script>
            $("#loginForm").validate({
                normalizer: function (value) {
                    return $.trim(value);
                },
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: 'Email is  required',
                        email: 'Email is invalid'
                    },
                    password: {
                        required: 'Password is required'
                    }
                },
                submitHandler: function (form) {
                    var form = document.getElementById('loginForm');
                    var data = new FormData(form);
                    $('.msgDiv').html(``);
                    $.ajax({
                        type: "POST",
                        url: "{{route('admin_auth_login')}}",
                        data: $(form).serialize(),
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            if (data.status == 1) {
                                window.location.href = "{{route('admin_dashboard')}}";
                            } else {
                                var html = data.msg;
                                $.each(data.response, function (key, value) {
                                    html += value + "<br/>";
                                });
                                $('.msgDiv').html(` <div class="alert alert-danger">` + html + `</div> `);
                                setTimeout(function () {
                                    $('.msgDiv').html(``);
                                }, 6000);
                            }
                        }
                    });
                    return false;
                }
            });
        </script>    
    </body>
</html>