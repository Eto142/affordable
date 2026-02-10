@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title"><span class="text-green">Copy Trading</span> Made Simple</h1>
        <p class="page-hero-sub">Follow expert traders and automatically copy their trades in real time. When they profit, you profit.</p>
    </div>
</section>

<!-- How Copy Trading Works -->
<section class="section">
    <div class="container">
        <h2 class="section-title">How Copy Trading Works</h2>
        <p class="section-subtitle">Start earning in just 3 simple steps</p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="how-it-work-card">
                    <div class="how-it-work-icon"><i class="fas fa-user-plus"></i></div>
                    <h3 class="how-it-work-title">1. Create Your Account</h3>
                    <p>Sign up for free, verify your identity and fund your account using any of our supported payment methods — Bitcoin, Ethereum, bank transfer, and more.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="how-it-work-card">
                    <div class="how-it-work-icon"><i class="fas fa-users"></i></div>
                    <h3 class="how-it-work-title">2. Choose a Trader</h3>
                    <p>Browse our leaderboard of verified professional traders. View their performance history, win rate, and risk level — then click "Copy" to follow them.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="how-it-work-card">
                    <div class="how-it-work-icon"><i class="fas fa-coins"></i></div>
                    <h3 class="how-it-work-title">3. Earn & Withdraw</h3>
                    <p>Every trade the expert makes is automatically replicated in your account. Watch your profits grow and withdraw anytime with fast processing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Why Copy Trade with Affordableinvprogram?</h2>
        <p class="section-subtitle">The smartest way to invest in the financial markets</p>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-chart-line" style="color:var(--brand-green); margin-right:10px;"></i>Proven Track Records</h4>
                    <p>Every trader on our platform has a fully transparent, verified track record. See real performance data before you copy anyone.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-shield-alt" style="color:var(--brand-green); margin-right:10px;"></i>100% Insurance</h4>
                    <p>All copy trading plans include full insurance protection. Your capital is secured regardless of market conditions.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-globe" style="color:var(--brand-green); margin-right:10px;"></i>Multi-Market Access</h4>
                    <p>Copy trades across Forex, Crypto, Stocks, Indices, and Commodities — all from a single account with one broker.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-clock" style="color:var(--brand-green); margin-right:10px;"></i>Real-Time Execution</h4>
                    <p>Trades are copied instantly. When the expert enters or exits a position, your account mirrors the action in real time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plans CTA -->
<section class="section text-center">
    <div class="container">
        <h2 class="section-title">Ready to Start Earning?</h2>
        <p class="section-subtitle">Choose a plan and start copying expert traders today</p>
        <a href="{{ route('register') }}" class="btn btn-primary-custom">Create Free Account</a>
    </div>
</section>

@include('home.footer')
