@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Trade <span class="text-green">Stocks</span></h1>
        <p class="page-hero-sub">Buy and sell global stocks with zero commission. Copy pro stock traders on Affordableinvprogram.</p>
    </div>
</section>

<!-- Stocks Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title text-start">Why Trade Stocks With Us?</h2>
                <p>Stock trading gives you direct exposure to the financial performance of individual companies. Affordableinvprogram provides a seamless stock copy-trading experience — mirror successful traders and build your portfolio effortlessly.</p>
                <ul class="features-list mt-3">
                    <li>Trade 1000+ global stocks</li>
                    <li>Zero commission on selected stocks</li>
                    <li>Fractional shares from $1</li>
                    <li>Real-time market data</li>
                    <li>Copy elite stock traders</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom mt-3">Start Stock Copy Trading</a>
            </div>
            <div class="col-lg-6">
                <div class="tradingview-widget-container">
                    <div id="tv_stocks" style="height:420px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget({autosize:true,symbol:"NASDAQ:TSLA",interval:"D",theme:"dark",style:"1",locale:"en",container_id:"tv_stocks"});
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Stocks -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Top-Traded Stocks</h2>
        <p class="section-subtitle">Most popular stocks among our copy traders</p>
        <div class="market-table">
            <table class="table table-hover mb-0">
                <thead><tr><th>Stock</th><th>Exchange</th><th>Sector</th><th>Min. Trade</th></tr></thead>
                <tbody>
                    <tr><td><i class="fas fa-car text-success me-2"></i>Tesla (TSLA)</td><td>NASDAQ</td><td>Automotive / EV</td><td>$1</td></tr>
                    <tr><td>NVIDIA (NVDA)</td><td>NASDAQ</td><td>Semiconductors</td><td>$1</td></tr>
                    <tr><td>Meta Platforms (META)</td><td>NASDAQ</td><td>Social Media</td><td>$1</td></tr>
                    <tr><td>Netflix (NFLX)</td><td>NASDAQ</td><td>Streaming</td><td>$1</td></tr>
                    <tr><td>Berkshire Hathaway (BRK.B)</td><td>NYSE</td><td>Conglomerate</td><td>$1</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@include('home.footer')
