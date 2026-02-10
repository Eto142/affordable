@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Trade <span class="text-green">Shares</span></h1>
        <p class="page-hero-sub">Invest in the world's biggest companies. Copy leading equity traders on Affordableinvprogram.</p>
    </div>
</section>

<!-- Shares Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title text-start">Why Trade Shares?</h2>
                <p>Shares let you own a piece of the world's most successful companies. With Affordableinvprogram's copy trading platform, you can mirror professional equity traders who carefully select high-potential stocks.</p>
                <ul class="features-list mt-3">
                    <li>500+ global shares available</li>
                    <li>Trade US, UK, EU and Asian equities</li>
                    <li>Fractional share trading</li>
                    <li>Zero commission on selected shares</li>
                    <li>Copy top equity traders instantly</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom mt-3">Start Share Copy Trading</a>
            </div>
            <div class="col-lg-6">
                <div class="tradingview-widget-container">
                    <div id="tv_shares" style="height:420px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget({autosize:true,symbol:"NASDAQ:AAPL",interval:"D",theme:"dark",style:"1",locale:"en",container_id:"tv_shares"});
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Shares -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Popular Shares</h2>
        <p class="section-subtitle">Some of the most traded stocks on our platform</p>
        <div class="market-table">
            <table class="table table-hover mb-0">
                <thead><tr><th>Share</th><th>Exchange</th><th>Sector</th><th>Min. Trade</th></tr></thead>
                <tbody>
                    <tr><td><i class="fab fa-apple text-success me-2"></i>Apple (AAPL)</td><td>NASDAQ</td><td>Technology</td><td>$10</td></tr>
                    <tr><td>Tesla (TSLA)</td><td>NASDAQ</td><td>Automotive</td><td>$10</td></tr>
                    <tr><td>Amazon (AMZN)</td><td>NASDAQ</td><td>E-Commerce</td><td>$10</td></tr>
                    <tr><td>Microsoft (MSFT)</td><td>NASDAQ</td><td>Technology</td><td>$10</td></tr>
                    <tr><td>Google (GOOGL)</td><td>NASDAQ</td><td>Technology</td><td>$10</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@include('home.footer')
