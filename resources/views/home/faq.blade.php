@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Frequently Asked <span class="text-green">Questions</span></h1>
        <p class="page-hero-sub">Everything you need to know about Affordableinvprogram and copy trading</p>
    </div>
</section>

<!-- FAQ Content -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>What is Affordableinvprogram?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Affordableinvprogram is a regulated copy trading broker that allows you to automatically copy the trades of professional traders. You earn when they earn — no trading experience needed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>How does copy trading work?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>After creating your account and choosing a plan, you select a professional trader to follow. Every trade they make is automatically copied to your account in real time. When they profit, you profit.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>What is the minimum deposit?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our Basic Plan starts at $500. We offer multiple plans to suit different investment levels — from beginners to high-net-worth investors.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>How do I withdraw my profits?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You can request a withdrawal anytime from your dashboard. We process withdrawals through Bitcoin, Ethereum, USDT, bank transfer, and other supported payment methods. Most withdrawals are processed within 24 hours.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>Is my investment safe?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. Affordableinvprogram is fully regulated and your funds are held in segregated accounts. All our plans come with 100% insurance coverage to protect your capital.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>What markets can I trade?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Through our platform, you can copy trades across Forex, Cryptocurrencies, Stocks, Indices, Commodities, and more — all from a single account.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>Do I need trading experience?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Not at all. That's the power of copy trading. You simply follow expert traders and their trades are automatically replicated in your account. No charts, no analysis, no stress.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
                        <span>How do I contact support?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our support team is available 24/7. You can reach us through the Contact page, email us at support@affordableinvprogram.com, or use the live chat feature on our platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section section-dark text-center">
    <div class="container">
        <h2 class="section-title">Still Have Questions?</h2>
        <p class="section-subtitle">Our support team is available 24/7 to help</p>
        <a href="{{ url('contact') }}" class="btn btn-primary-custom">Contact Support</a>
    </div>
</section>

@include('home.footer')
