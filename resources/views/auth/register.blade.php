<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Affordableinvprogram | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Create your free Affordableinvprogram copy trading account" name="description" />
    <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('auth/style.css') }}" rel="stylesheet">
</head>
<!-- LiveChat -->
<script> window.__lc = window.__lc || {}; window.__lc.license = 18305550; window.__lc.integration_name = "manual_channels"; window.__lc.product_name = "livechat"; ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice)) </script>
<body class="auth-page">

    <div class="auth-wrapper">
        <!-- Left Branding Panel -->
        <div class="auth-brand-panel">
            <div class="auth-brand-content">
                <a href="/"><img src="{{ asset('logo1.png') }}" alt="Affordableinvprogram" class="auth-logo-img"></a>
                <h2 class="auth-brand-title">Start Your Copy Trading Journey</h2>
                <p class="auth-brand-subtitle">Join 150,000+ traders worldwide. Copy top-performing experts and grow your wealth on autopilot.</p>
                <div class="auth-brand-features">
                    <div class="auth-brand-feature"><i class="fas fa-check-circle"></i> Free to register</div>
                    <div class="auth-brand-feature"><i class="fas fa-check-circle"></i> Copy expert traders instantly</div>
                    <div class="auth-brand-feature"><i class="fas fa-check-circle"></i> Fast & secure withdrawals</div>
                    <div class="auth-brand-feature"><i class="fas fa-check-circle"></i> 24/7 live support</div>
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
                    <h3 class="auth-form-title">Create Your Account</h3>
                    <p class="auth-form-subtitle">Get started in under 2 minutes — completely free</p>
                </div>

                <form method="POST" action="{{ route('register') }}" id="regester" class="auth-form" novalidate>
                    @csrf
                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" class="auth-input @error('name') is-invalid @enderror" id="fullname" name="name" placeholder="Enter your full name" value="{{ old('name') }}">
                        @error('name')
                        <span class="auth-error"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-envelope"></i> Email Address</label>
                        <input type="email" class="auth-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                        <span class="auth-error"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-coins"></i> Currency</label>
                        <select class="auth-input auth-select" id="country" name="currency" required>
                            <option value="$">USD — US Dollar</option>
                            <option value="£">GBP — British Pound</option>
                            <option value="€">EUR — Euro</option>
                            <option value="$">AUD — Australian Dollar</option>
                        </select>
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-lock"></i> Password</label>
                        <div class="auth-password-wrap">
                            <input type="password" class="auth-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Create a strong password">
                            <button type="button" class="auth-pass-toggle" onclick="togglePass('password', this)"><i class="fas fa-eye"></i></button>
                        </div>
                        @error('password')
                        <span class="auth-error"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-shield-alt"></i> Confirm Password</label>
                        <div class="auth-password-wrap">
                            <input type="password" class="auth-input" id="password2" name="password_confirmation" placeholder="Re-enter your password">
                            <button type="button" class="auth-pass-toggle" onclick="togglePass('password2', this)"><i class="fas fa-eye"></i></button>
                        </div>
                    </div>

                    <div class="auth-field">
                        <label class="auth-checkbox-wrap">
                            <input type="checkbox" class="auth-checkbox" required>
                            <span>I agree to the <a href="#" class="auth-link">Terms of Use</a> and <a href="#" class="auth-link">Privacy Policy</a></span>
                        </label>
                    </div>

                    <button type="submit" class="auth-submit-btn" id="div" onclick="create(this)">
                        <i class="fas fa-user-plus me-2"></i> Create Account
                    </button>

                    <p class="response"></p>

                    <div class="auth-separator">
                        <span>or</span>
                    </div>

                    <p class="auth-switch-text">Already have an account? <a href="{{ route('login') }}" class="auth-link">Sign In</a></p>
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
    function create(id) {
        id.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Creating account...';
        setTimeout(function() { id.innerHTML = '<i class="fas fa-user-plus me-2"></i> Create Account'; }, 3000);
    }
    </script>


</body>
</html>