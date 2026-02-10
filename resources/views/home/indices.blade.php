@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Trade <span class="text-green">Indices</span></h1>
        <p class="page-hero-sub">Get exposure to global stock markets through index trading. Copy expert traders on Affordableinvprogram.</p>
    </div>
</section>

<!-- Indices Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <h2 class="section-title text-start">Why Trade Indices?</h2>
                <p>Stock indices let you trade the performance of entire markets rather than individual stocks. With Affordableinvprogram, you can copy expert traders who specialize in indices like the S&P 500, NASDAQ, and Dow Jones.</p>
                <ul class="features-list mt-3">
                    <li>Major global indices — S&P 500, NASDAQ, FTSE, DAX</li>
                    <li>Leverage up to 1:100</li>
                    <li>Low commissions and tight spreads</li>
                    <li>Copy professional index traders</li>
                    <li>Diversified market exposure</li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-primary-custom mt-3">Start Index Copy Trading</a>
            </div>
            <div class="col-lg-6">
                <div class="tradingview-widget-container">
                    <div id="tv_indices" style="height:420px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget({autosize:true,symbol:"FOREXCOM:SPXUSD",interval:"D",theme:"dark",style:"1",locale:"en",container_id:"tv_indices"});
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Available Indices -->
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title">Available Indices</h2>
        <p class="section-subtitle">Trade the world's top stock indices</p>
        <div class="market-table">
            <table class="table table-hover mb-0">
                <thead><tr><th>Index</th><th>Region</th><th>Session</th><th>Leverage</th></tr></thead>
                <tbody>
                    <tr><td><i class="fas fa-chart-line text-success me-2"></i>S&P 500</td><td>USA</td><td>Mon–Fri</td><td>1:100</td></tr>
                    <tr><td>NASDAQ 100</td><td>USA</td><td>Mon–Fri</td><td>1:100</td></tr>
                    <tr><td>Dow Jones 30</td><td>USA</td><td>Mon–Fri</td><td>1:100</td></tr>
                    <tr><td>FTSE 100</td><td>UK</td><td>Mon–Fri</td><td>1:50</td></tr>
                    <tr><td>DAX 40</td><td>Germany</td><td>Mon–Fri</td><td>1:50</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@include('home.footer')
