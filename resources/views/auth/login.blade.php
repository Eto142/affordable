<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Affordableinvprogram | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sign in to your Affordableinvprogram copy trading account" name="description" />
    <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<!-- LiveChat -->
<script> window.__lc = window.__lc || {}; window.__lc.license = 18305550; window.__lc.integration_name = "manual_channels"; window.__lc.product_name = "livechat"; ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice)) </script>
<body class="auth-page">

    <div class="auth-wrapper">
        <!-- Left Branding Panel -->
        <div class="auth-brand-panel">
            <div class="auth-brand-content">
                <a href="/"><img src="{{ asset('logo1.png') }}" alt="Affordableinvprogram" class="auth-logo-img"></a>
                <h2 class="auth-brand-title">Welcome Back, Trader</h2>
                <p class="auth-brand-subtitle">Access your portfolio, monitor your copy trades, and manage your profits from one powerful dashboard.</p>
                <div class="auth-brand-features">
                    <div class="auth-brand-feature"><i class="fas fa-chart-line"></i> Real-time portfolio tracking</div>
                    <div class="auth-brand-feature"><i class="fas fa-copy"></i> Active copy trade monitoring</div>
                    <div class="auth-brand-feature"><i class="fas fa-wallet"></i> Instant deposit & withdrawal</div>
                    <div class="auth-brand-feature"><i class="fas fa-shield-alt"></i> Secured with 2FA encryption</div>
                </div>
                <div class="auth-brand-stats">
                    <div class="auth-brand-stat"><span>150K+</span>Traders</div>
                    <div class="auth-brand-stat"><span>120+</span>Countries</div>
                    <div class="auth-brand-stat"><span>$2.8B+</span>Volume</div>
                </div>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="auth-form-panel">
            <div class="auth-form-container">
                <div class="auth-form-header">
                    <a href="/" class="auth-mobile-logo"><img src="{{ asset('logo1.png') }}" alt="Logo" height="40"></a>
                    <h3 class="auth-form-title">Sign In to Your Account</h3>
                    <p class="auth-form-subtitle">Enter your credentials to access your dashboard</p>
                </div>

                <form class="auth-form" action="{{ route('login') }}" method="POST" id="login_form">
                    @csrf

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-envelope"></i> Email Address</label>
                        <input type="email" name="email" class="auth-input @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Enter your email">
                        @error('email')
                        <span class="auth-error"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-lock"></i> Password</label>
                        <div class="auth-password-wrap">
                            <input type="password" name="password" class="auth-input @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
                            <button type="button" class="auth-pass-toggle" onclick="togglePass('password', this)"><i class="fas fa-eye"></i></button>
                        </div>
                        @error('password')
                        <span class="auth-error"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="auth-field auth-row-between">
                        <label class="auth-checkbox-wrap">
                            <input type="checkbox" class="auth-checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>Remember me</span>
                        </label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="auth-link auth-forgot">Forgot Password?</a>
                        @endif
                    </div>

                    <button type="submit" class="auth-submit-btn" onclick="login(this)">
                        <i class="fas fa-sign-in-alt me-2"></i> Sign In
                    </button>

                    <p class="response"></p>

                    <div class="auth-separator">
                        <span>or</span>
                    </div>

                    <p class="auth-switch-text">Don't have an account? <a href="{{ route('register') }}" class="auth-link">Create Free Account</a></p>
                </form>

                <div class="auth-footer">
                    <p>&copy; <script>document.write(new Date().getFullYear())</script> Affordableinvprogram. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Toast -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1005">
        <div id="ErrorToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header" style="background:#162029; color:#fff; border-bottom:1px solid #1e2d3a;">
                <img src="{{ asset('logo1.png') }}" alt="" class="me-2" height="18">
                <strong class="me-auto">Error</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" style="background:#2d1215; color:#f85149;"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    function togglePass(id, btn) {
        const input = document.getElementById(id);
        const icon = btn.querySelector('i');
        if (input.type === 'password') { input.type = 'text'; icon.classList.replace('fa-eye','fa-eye-slash'); }
        else { input.type = 'password'; icon.classList.replace('fa-eye-slash','fa-eye'); }
    }
    function login(id) {
        id.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Verifying...';
        setTimeout(function() { id.innerHTML = '<i class="fas fa-sign-in-alt me-2"></i> Sign In'; }, 3000);
    }
    </script>


</body>
</html>
