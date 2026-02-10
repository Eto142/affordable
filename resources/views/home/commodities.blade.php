@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Trade <span class="text-green">Commodities</span></h1>
        <p class="page-hero-sub">Access gold, oil, silver, and more. Copy commodity experts on Affordableinvprogram.</p>
    </div>
</section>

<!-- Commodities Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title text-start">Why Trade Commodities?</h2>
                <p>Commodities such as gold, crude oil, and natural gas are essential hedge instruments and profit-generating assets. With Affordableinvprogram, copy commodity specialists who navigate global supply and demand dynamics.</p>
                <ul class="features-list mt-3">
                    <li>Trade gold, silver, oil, and natural gas</li>
                    <li>Leverage up to 1:100</li>
                    <li>Hedge against inflation and market volatility</li>
                    <li>Ultra-tight spreads on metals</li>
                    <li>Follow top commodity traders</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom mt-3">Start Commodity Copy Trading</a>
            </div>
            <div class="col-lg-6">
                <div class="tradingview-widget-container">
                    <div id="tv_commodities" style="height:420px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget({autosize:true,symbol:"TVC:GOLD",interval:"D",theme:"dark",style:"1",locale:"en",container_id:"tv_commodities"});
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Available Commodities -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Available Commodities</h2>
        <p class="section-subtitle">Trade the world's most popular commodities</p>
        <div class="market-table">
            <table class="table table-hover mb-0">
                <thead><tr><th>Commodity</th><th>Category</th><th>Session</th><th>Leverage</th></tr></thead>
                <tbody>
                    <tr><td><i class="fas fa-coins text-warning me-2"></i>Gold (XAU/USD)</td><td>Precious Metals</td><td>24/5</td><td>1:100</td></tr>
                    <tr><td>Silver (XAG/USD)</td><td>Precious Metals</td><td>24/5</td><td>1:50</td></tr>
                    <tr><td>Crude Oil (WTI)</td><td>Energy</td><td>24/5</td><td>1:50</td></tr>
                    <tr><td>Brent Oil</td><td>Energy</td><td>24/5</td><td>1:50</td></tr>
                    <tr><td>Natural Gas</td><td>Energy</td><td>24/5</td><td>1:30</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@include('home.footer')
