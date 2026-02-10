@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">About <span class="text-green">Affordableinvprogram</span></h1>
        <p class="page-hero-sub">The world's most trusted copy trading broker — empowering everyday investors to trade like professionals.</p>
    </div>
</section>

<!-- About Content -->
<section class="section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title text-start">Who We Are</h2>
                <p>Affordableinvprogram is a regulated copy trading broker that connects everyday investors with top-performing professional traders from around the world. Our mission is simple — make profitable trading accessible, transparent, and affordable for everyone.</p>
                <p>Founded by a team of seasoned financial professionals and fintech innovators, we've built a platform that removes the complexity of traditional trading. Whether you're a complete beginner or an experienced investor, Affordableinvprogram gives you the tools to grow your wealth with confidence.</p>
            </div>
            <div class="col-lg-6">
                <div class="about-stats-grid">
                    <div class="about-stat-card">
                        <div class="about-stat-number">50K+</div>
                        <div class="about-stat-label">Active Investors</div>
                    </div>
                    <div class="about-stat-card">
                        <div class="about-stat-number">$2B+</div>
                        <div class="about-stat-label">Total Volume Traded</div>
                    </div>
                    <div class="about-stat-card">
                        <div class="about-stat-number">120+</div>
                        <div class="about-stat-label">Countries Served</div>
                    </div>
                    <div class="about-stat-card">
                        <div class="about-stat-number">99.9%</div>
                        <div class="about-stat-label">Uptime Guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Why Choose Affordableinvprogram?</h2>
        <p class="section-subtitle">We stand apart from other brokers with our transparent, client-first approach</p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="how-it-work-card">
                    <div class="how-it-work-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="how-it-work-title">Regulated & Secure</h3>
                    <p>We operate under strict regulatory compliance, with segregated client funds and industry-leading security protocols to keep your investments safe.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="how-it-work-card">
                    <div class="how-it-work-icon"><i class="fas fa-users"></i></div>
                    <h3 class="how-it-work-title">Copy Expert Traders</h3>
                    <p>Browse verified expert traders with transparent track records. Copy their trades automatically and earn as they earn — no experience required.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="how-it-work-card">
                    <div class="how-it-work-icon"><i class="fas fa-bolt"></i></div>
                    <h3 class="how-it-work-title">Instant Withdrawals</h3>
                    <p>Request a withdrawal anytime and receive your funds quickly. We support Bitcoin, Ethereum, bank transfers, and multiple payment methods.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Our Core Values</h2>
        <p class="section-subtitle">The principles that guide everything we do</p>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-eye" style="color:var(--brand-green); margin-right:10px;"></i>Transparency</h4>
                    <p>Every trader's performance is publicly displayed. You see real results, real profits, and real track records before committing a single dollar.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-handshake" style="color:var(--brand-green); margin-right:10px;"></i>Trust</h4>
                    <p>We've earned the trust of over 50,000 investors globally. Our 100% insurance policy on all plans ensures your capital is protected.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-rocket" style="color:var(--brand-green); margin-right:10px;"></i>Innovation</h4>
                    <p>We continuously improve our copy trading engine, charts, and tools to give you the best possible trading experience.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card">
                    <h4 style="color:#fff; margin-bottom:10px;"><i class="fas fa-headset" style="color:var(--brand-green); margin-right:10px;"></i>24/7 Support</h4>
                    <p>Our dedicated support team is available around the clock to assist you with anything — from deposits to trading strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section section-dark text-center">
    <div class="container">
        <h2 class="section-title">Ready to Start Copy Trading?</h2>
        <p class="section-subtitle">Join thousands of investors already growing their wealth with Affordableinvprogram</p>
        <a href="{{ route('register') }}" class="btn btn-primary-custom">Create Free Account</a>
    </div>
</section>

@include('home.footer')
