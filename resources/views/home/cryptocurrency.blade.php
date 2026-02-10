@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Trade <span class="text-green">Cryptocurrencies</span></h1>
        <p class="page-hero-sub">Copy trade Bitcoin, Ethereum, and 50+ top cryptocurrencies with expert traders on Affordableinvprogram.</p>
    </div>
</section>

<!-- Crypto Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title text-start">Why Trade Crypto?</h2>
                <p>Cryptocurrency is one of the most exciting and volatile asset classes in the world. At Affordableinvprogram, you don't need to be an expert — just follow professional crypto traders and profit from their moves.</p>
                <ul class="features-list mt-3">
                    <li>50+ cryptocurrencies including BTC, ETH, SOL, XRP</li>
                    <li>24/7 market — trade any time</li>
                    <li>Leverage up to 1:100</li>
                    <li>Copy top-performing crypto traders</li>
                    <li>Instant deposits via crypto wallets</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom mt-3">Start Crypto Copy Trading</a>
            </div>
            <div class="col-lg-6">
                <div class="tradingview-widget-container">
                    <div id="tv_crypto" style="height:420px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget({autosize:true,symbol:"BINANCE:BTCUSDT",interval:"D",theme:"dark",style:"1",locale:"en",container_id:"tv_crypto"});
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Cryptos -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Popular Cryptocurrencies</h2>
        <p class="section-subtitle">Top crypto assets available for copy trading</p>
        <div class="market-table">
            <table class="table table-hover mb-0">
                <thead><tr><th>Asset</th><th>Symbol</th><th>Market</th><th>Leverage</th></tr></thead>
                <tbody>
                    <tr><td><i class="fab fa-bitcoin text-warning me-2"></i>Bitcoin</td><td>BTC/USD</td><td>24/7</td><td>1:100</td></tr>
                    <tr><td><i class="fab fa-ethereum text-primary me-2"></i>Ethereum</td><td>ETH/USD</td><td>24/7</td><td>1:100</td></tr>
                    <tr><td>Solana</td><td>SOL/USD</td><td>24/7</td><td>1:50</td></tr>
                    <tr><td>Ripple</td><td>XRP/USD</td><td>24/7</td><td>1:50</td></tr>
                    <tr><td>Cardano</td><td>ADA/USD</td><td>24/7</td><td>1:50</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@include('home.footer')
