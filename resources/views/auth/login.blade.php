
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Affordableinvprogram | Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>
<!--<script src="//code.tidio.co/iilowasz0aomejtmdsoxz1sombiymygb.js" async></script>-->
<!-- Start of LiveChat (www.livechat.com) code --> <script> window.__lc = window.__lc || {}; window.__lc.license = 18305550; window.__lc.integration_name = "manual_channels"; window.__lc.product_name = "livechat"; ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice)) </script> <noscript><a href="https://www.livechat.com/chat-with/18305550/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript> <!-- End of LiveChat code -->

<body style="background-color: rgb(5, 5, 66)">
    <div class="account-pages my-5 pt-sm-5" style="background-color: rgb(5, 5, 66)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="" style="background-color:rgb(123, 194, 123)">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="" style="color: white">Welcome Back !</h5>
                                        <p style="color: white">Sign in to continue to Affordableinvprogram.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a class="auth-logo-light" href="/">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                                <img src="logo1.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>

                                <a class="auth-logo-dark" href="/">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                                <img src="logo1.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <p class="response"></p>
                             

                                   <form class="form-horizontal" action="{{ route('login') }}"  method="POST" >
                                         @csrf
                                      
                                        <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}"  placeholder="Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                       
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="password">
                                     <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        
                                                                         
                                       @error('password')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror                                                </div>
                                    </div>

                                     <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember-check">
                                                
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                            </label>
                                        </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-success waves-effect waves-light" style="background-color: rgb(123, 194, 123)"  type="submit">  {{ __('Login') }}</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        
                                        <p>Don't have an account ? <a href="{{route('register')}}" class="fw-medium text-primary"> Signup now </a> </p>
                                    </div>

                                    <div class="mt-4 text-center">
                                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                   
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- validation init -->
    <script src="assets/js/pages/validation.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- Bootstrap Toasts Js -->
    <script src="assets/js/pages/bootstrap-toastr.init.js"></script>

</body>

</html>
<div class="position-fixed top-0 end-0 p-2" style="z-index: 1005">
    <div id="ErrorToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="https://globaltb.online/user/logo.png" alt="" class="me-2" height="18">
            <strong class="me-auto">Error</strong>
            <small>Now..</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="background-color:red;">
            Hello, world! This is a toast message.
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#login_form').on('submit', function(e) {
            e.preventDefault();
            $(".response").html("Loading...<div class='spinner-border spinner-border-sm' role='status'><span class='sr-only'>Loading...</span></div>")
            var email = $('#email').val();
            var password = $('#password').val();

            if (email == '' || password == '') {
                $(".toast-body").html('Enter all field');
                $("#ErrorToast").toast("show");
                $(".response").html("")
                return false;
            }
            $.ajax({
                type: "POST",
                url: 'https://Affordableinvprogram.net/custom-login',
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    //alert('error');
                    $(".response").html(data.content);
                    if (data.content == 'Successful') {
                        $(".response").html(data.message);
                        window.location = data.redirect;

                    } else
                    if (data.content == 'Error') {
                        $(".response").html(data.message);
                        window.location = data.redirect;
                    }
                },
                error: function(data, errorThrown) {
                    Swal.fire('The Internet?', 'Check network connection!', 'question');
                }
            });
        });
    });
</script>

<script>
    function login(id) {
        id.innerHTML = "Verifying account..";
        setTimeout(function() {
            id.innerHTML = "Log in";
        }, 3000);
    }
</script>