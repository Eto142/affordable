<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Affordableinvprogram | Verify Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Verify your Affordableinvprogram account" name="description" />
    <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('auth/style.css') }}" rel="stylesheet">
</head>
<body class="auth-page">

    <div class="auth-wrapper">
        <!-- Left Branding Panel -->
        <div class="auth-brand-panel">
            <div class="auth-brand-content">
                <a href="/"><img src="{{ asset('logo1.png') }}" alt="Affordableinvprogram" class="auth-logo-img"></a>
                <h2 class="auth-brand-title">One Last Step</h2>
                <p class="auth-brand-subtitle">We've sent a verification PIN to your email. Enter it below to activate your account and start trading.</p>
                <div class="auth-brand-features">
                    <div class="auth-brand-feature"><i class="fas fa-envelope-open-text"></i> Check your inbox for the PIN</div>
                    <div class="auth-brand-feature"><i class="fas fa-clock"></i> PIN expires in 15 minutes</div>
                    <div class="auth-brand-feature"><i class="fas fa-redo"></i> Didn't receive it? Request a new one</div>
                    <div class="auth-brand-feature"><i class="fas fa-check-double"></i> Verify once, trade forever</div>
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
                <a href="/" class="auth-mobile-logo"><img src="{{ asset('logo1.png') }}" alt="Logo" height="40"></a>

                <!-- Step Progress -->
                <div class="auth-steps">
                    <div class="auth-step completed">
                        <div class="auth-step-num"><i class="fas fa-check" style="font-size:0.7rem"></i></div>
                        <span class="auth-step-label">Account</span>
                    </div>
                    <div class="auth-step-line done"></div>
                    <div class="auth-step completed">
                        <div class="auth-step-num"><i class="fas fa-check" style="font-size:0.7rem"></i></div>
                        <span class="auth-step-label">Details</span>
                    </div>
                    <div class="auth-step-line done"></div>
                    <div class="auth-step active">
                        <div class="auth-step-num">3</div>
                        <span class="auth-step-label">Verify</span>
                    </div>
                </div>

                <div class="auth-form-header">
                    <h3 class="auth-form-title">Verify Your Email</h3>
                    <p class="auth-form-subtitle">Enter the 4-digit PIN sent to your email</p>
                </div>

                <div class="auth-info-box">
                    <p><i class="fas fa-envelope" style="color:var(--brand-green); margin-right:8px;"></i>
                        A verification PIN has been sent to <span class="auth-info-email">{{ Auth::user()->email }}</span>.
                        If you haven't received it in a minute or two, click
                        <a href="{{ route('resendCode', Auth::user()->id) }}">Resend PIN</a>.
                    </p>
                </div>

                <form class="auth-form" action="{{ route('code') }}" method="POST">
                    @csrf

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-key"></i> Verification PIN</label>
                        <input type="number" name="digit" class="auth-input auth-pin-input" placeholder="0000" required maxlength="4">
                    </div>

                    <button type="submit" class="auth-submit-btn">
                        <i class="fas fa-check-circle me-2"></i> Verify & Continue
                    </button>

                    <p class="response"></p>
                </form>

                <form method="POST" action="{{ route('logout') }}" style="margin-top: 15px;">
                    @csrf
                    <button type="submit" class="auth-btn-secondary" style="width:100%;">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </button>
                </form>

                <div class="auth-footer">
                    <p>&copy; <script>document.write(new Date().getFullYear())</script> Affordableinvprogram. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
