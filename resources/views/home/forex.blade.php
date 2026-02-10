@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Trade <span class="text-green">Forex</span></h1>
        <p class="page-hero-sub">Access the world's largest financial market. Copy trade Forex with expert traders on Affordableinvprogram.</p>
    </div>
</section>

<!-- Forex Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title text-start">Why Trade Forex?</h2>
                <p>The foreign exchange market is the largest and most liquid market in the world, with over $6 trillion traded daily. At Affordableinvprogram, you can copy expert Forex traders and benefit from currency movements without managing trades yourself.</p>
                <ul class="features-list mt-3">
                    <li>50+ major, minor and exotic currency pairs</li>
                    <li>Leverage up to 1:1000</li>
                    <li>24/5 market access</li>
                    <li>Tight spreads and fast execution</li>
                    <li>Copy professional Forex traders instantly</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom mt-3">Start Forex Copy Trading</a>
            </div>
            <div class="col-lg-6">
                <div class="tradingview-widget-container">
                    <div id="tv_forex" style="height:420px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget({autosize:true,symbol:"FX:EURUSD",interval:"D",theme:"dark",style:"1",locale:"en",container_id:"tv_forex"});
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Forex Pairs -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Popular Forex Pairs</h2>
        <p class="section-subtitle">Trade the most popular currency pairs with Affordableinvprogram</p>
        <div class="market-table">
            <table class="table table-hover mb-0">
                <thead><tr><th>Pair</th><th>Spread</th><th>Leverage</th><th>Session</th></tr></thead>
                <tbody>
                    <tr><td>EUR/USD</td><td>0.1 pips</td><td>1:1000</td><td>24/5</td></tr>
                    <tr><td>GBP/USD</td><td>0.3 pips</td><td>1:500</td><td>24/5</td></tr>
                    <tr><td>USD/JPY</td><td>0.2 pips</td><td>1:1000</td><td>24/5</td></tr>
                    <tr><td>AUD/USD</td><td>0.4 pips</td><td>1:500</td><td>24/5</td></tr>
                    <tr><td>USD/CAD</td><td>0.3 pips</td><td>1:500</td><td>24/5</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@include('home.footer')
