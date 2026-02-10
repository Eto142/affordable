@include('home.header')
    <!-- Hero Section: Copy Trading Broker -->
    <section class="hero-slider">
        <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1920&auto=format&fit=crop')">
            <div class="container">
                <div class="row align-items-center slider-content">
                    <div class="col-lg-6">
                        <h1 class="slide-h1">Welcome to <span class="text-green">Affordableinvprogram</span></h1>
                        <p class="slide-subtitle">
                            The most trusted copy trading broker. Instantly copy top traders, diversify your portfolio, and grow your wealth with ease.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('login') }}" class="btn btn-primary-custom">Login to Account</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-light-custom">Start Copy Trading</a>
                        </div>
                        <ul class="slider-features">
                            <li><i class="fas fa-check"></i> Regulated copy trading broker</li>
                            <li><i class="fas fa-check"></i> Copy expert traders in real time</li>
                            <li><i class="fas fa-check"></i> Transparent performance tracking</li>
                            <li><i class="fas fa-check"></i> Fast withdrawals & 24/7 support</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <!-- TradingView Widget -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget" style="height: 450px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "en",
                                "width": "100%",
                                "height": "100%",
                                "isTransparent": true,
                                "tabs": [
                                    {
                                        "title": "Markets",
                                        "symbols": [
                                            { "s": "CRYPTO:BTCUSD", "d": "Bitcoin" },
                                            { "s": "NASDAQ:AAPL", "d": "Apple" },
                                            { "s": "FX:EURUSD", "d": "EUR/USD" },
                                            { "s": "COMEX:GC1!", "d": "Gold" }
                                        ]
                                    }
                                ]
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Live Market Ticker -->
    <div class="market-ticker">
        <div class="ticker-track">
            <div class="ticker-item"><span class="ticker-name">BTC/USD</span> <span class="ticker-up">+2.34%</span></div>
            <div class="ticker-item"><span class="ticker-name">ETH/USD</span> <span class="ticker-up">+1.87%</span></div>
            <div class="ticker-item"><span class="ticker-name">EUR/USD</span> <span class="ticker-down">-0.15%</span></div>
            <div class="ticker-item"><span class="ticker-name">GBP/USD</span> <span class="ticker-up">+0.32%</span></div>
            <div class="ticker-item"><span class="ticker-name">XAU/USD</span> <span class="ticker-up">+0.78%</span></div>
            <div class="ticker-item"><span class="ticker-name">AAPL</span> <span class="ticker-up">+1.24%</span></div>
            <div class="ticker-item"><span class="ticker-name">TSLA</span> <span class="ticker-up">+2.89%</span></div>
            <div class="ticker-item"><span class="ticker-name">SOL/USD</span> <span class="ticker-up">+5.87%</span></div>
            <div class="ticker-item"><span class="ticker-name">USD/JPY</span> <span class="ticker-down">-0.18%</span></div>
            <div class="ticker-item"><span class="ticker-name">MSFT</span> <span class="ticker-down">-0.34%</span></div>
            <div class="ticker-item"><span class="ticker-name">XRP/USD</span> <span class="ticker-up">+1.93%</span></div>
            <div class="ticker-item"><span class="ticker-name">CRUDE OIL</span> <span class="ticker-down">-0.45%</span></div>
            <!-- Duplicate for seamless loop -->
            <div class="ticker-item"><span class="ticker-name">BTC/USD</span> <span class="ticker-up">+2.34%</span></div>
            <div class="ticker-item"><span class="ticker-name">ETH/USD</span> <span class="ticker-up">+1.87%</span></div>
            <div class="ticker-item"><span class="ticker-name">EUR/USD</span> <span class="ticker-down">-0.15%</span></div>
            <div class="ticker-item"><span class="ticker-name">GBP/USD</span> <span class="ticker-up">+0.32%</span></div>
            <div class="ticker-item"><span class="ticker-name">XAU/USD</span> <span class="ticker-up">+0.78%</span></div>
            <div class="ticker-item"><span class="ticker-name">AAPL</span> <span class="ticker-up">+1.24%</span></div>
            <div class="ticker-item"><span class="ticker-name">TSLA</span> <span class="ticker-up">+2.89%</span></div>
            <div class="ticker-item"><span class="ticker-name">SOL/USD</span> <span class="ticker-up">+5.87%</span></div>
            <div class="ticker-item"><span class="ticker-name">USD/JPY</span> <span class="ticker-down">-0.18%</span></div>
            <div class="ticker-item"><span class="ticker-name">MSFT</span> <span class="ticker-down">-0.34%</span></div>
            <div class="ticker-item"><span class="ticker-name">XRP/USD</span> <span class="ticker-up">+1.93%</span></div>
            <div class="ticker-item"><span class="ticker-name">CRUDE OIL</span> <span class="ticker-down">-0.45%</span></div>
        </div>
    </div>

    <!-- Trust Stats Bar -->
    <div class="trust-bar">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-users"></i></div>
                    <div class="trust-number">150K+</div>
                    <div class="trust-label">Active Traders</div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-globe"></i></div>
                    <div class="trust-number">120+</div>
                    <div class="trust-label">Countries Served</div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <div class="trust-number">$2.8B+</div>
                    <div class="trust-label">Total Traded Volume</div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-headset"></i></div>
                    <div class="trust-number">24/7</div>
                    <div class="trust-label">Customer Support</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title text-start">Advanced Trading Features</h2>
                    <p class="mb-4">
                        We provide the fastest copy trading using modern technologies. No delays in order executions and most
                        accurate quotes. Our platform is available around the clock and on weekends.
                        Affordableinvprogram customer service is available 24/7.
                    </p>
                    <ul class="features-list">
                        <li>Technical analysis tools: 4 chart types, 8 indicators, trend lines</li>
                        <li>Social trading: watch deals across the globe or trade with your friends</li>
                        <li>Over 100 assets including popular stocks</li>
                        <li>Advanced order types and risk management tools</li>
                        <li>Mobile trading app for iOS and Android</li>
                    </ul>
                    <a href="#" class="btn btn-primary-custom mt-3">Explore Features</a>
                </div>
                <div class="col-lg-6">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_advancedchart" style="height: 450px;"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget(
                        {
                            "autosize": true,
                            "symbol": "BINANCE:ETHUSDT",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_top_toolbar": false,
                            "hide_legend": false,
                            "save_image": false,
                            "container_id": "tradingview_advancedchart"
                        }
                        );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>

    <!-- How Copy Trading Works -->
    <section class="section" style="background: var(--darker-bg);">
        <div class="container">
            <h2 class="section-title">How Copy Trading Works</h2>
            <p class="section-subtitle">Start earning in 4 simple steps  no experience required</p>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-icon"><i class="fas fa-user-plus"></i></div>
                    <h4 class="step-title">Create Your Account</h4>
                    <p class="step-desc">Sign up for free in under 2 minutes. Verify your identity and secure your account with two-factor authentication.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-icon"><i class="fas fa-search-dollar"></i></div>
                    <h4 class="step-title">Choose Expert Traders</h4>
                    <p class="step-desc">Browse our ranked leaderboard. Review performance stats, risk scores, and trading history before you follow.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-icon"><i class="fas fa-copy"></i></div>
                    <h4 class="step-title">Copy Their Trades</h4>
                    <p class="step-desc">Set your investment amount and let the platform automatically replicate every trade in real time  hands free.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <div class="step-icon"><i class="fas fa-wallet"></i></div>
                    <h4 class="step-title">Withdraw Profits</h4>
                    <p class="step-desc">Watch your portfolio grow and withdraw earnings anytime to your crypto wallet, bank, or preferred payment method.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trading Instruments Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Trading Instruments</h2>
            <p class="section-subtitle">Access 200+ instruments across multiple asset classes  all from a single powerful platform</p>

            <!-- Category Tabs -->
            <div class="inst-tabs">
                <div class="inst-tab active" data-tab="crypto"><i class="fab fa-bitcoin me-2"></i>Crypto</div>
                <div class="inst-tab" data-tab="forex"><i class="fas fa-exchange-alt me-2"></i>Forex</div>
                <div class="inst-tab" data-tab="stocks"><i class="fas fa-chart-bar me-2"></i>Stocks</div>
                <div class="inst-tab" data-tab="commodities"><i class="fas fa-gem me-2"></i>Commodities</div>
            </div>

            <!-- Crypto Panel -->
            <div class="inst-panel active" id="tab-crypto">
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon crypto"><i class="fab fa-bitcoin"></i></div>
                        <div><div class="inst-name">Bitcoin</div><div class="inst-symbol">BTC / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.1%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">100X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/7</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Popular</span><span class="inst-badge volatile">High Volume</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon crypto"><i class="fab fa-ethereum"></i></div>
                        <div><div class="inst-name">Ethereum</div><div class="inst-symbol">ETH / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.15%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">100X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/7</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Popular</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon crypto"><i class="fas fa-coins"></i></div>
                        <div><div class="inst-name">Solana</div><div class="inst-symbol">SOL / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.2%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">50X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/7</span></div>
                    <div class="inst-tags"><span class="inst-badge volatile">Trending</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon crypto"><i class="fas fa-circle-dot"></i></div>
                        <div><div class="inst-name">Ripple</div><div class="inst-symbol">XRP / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.25%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">50X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/7</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Popular</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon crypto"><i class="fas fa-link"></i></div>
                        <div><div class="inst-name">Chainlink</div><div class="inst-symbol">LINK / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.3%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">50X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/7</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">DeFi</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon crypto"><i class="fas fa-cubes"></i></div>
                        <div><div class="inst-name">Cardano</div><div class="inst-symbol">ADA / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.3%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">50X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/7</span></div>
                    <div class="inst-tags"><span class="inst-badge volatile">Trending</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
            </div>

            <!-- Forex Panel -->
            <div class="inst-panel" id="tab-forex">
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon forex"><i class="fas fa-euro-sign"></i></div>
                        <div><div class="inst-name">EUR / USD</div><div class="inst-symbol">Euro vs US Dollar</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.6 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">1000X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Most Traded</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon forex"><i class="fas fa-pound-sign"></i></div>
                        <div><div class="inst-name">GBP / USD</div><div class="inst-symbol">British Pound vs US Dollar</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.8 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">1000X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Popular</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon forex"><i class="fas fa-yen-sign"></i></div>
                        <div><div class="inst-name">USD / JPY</div><div class="inst-symbol">US Dollar vs Japanese Yen</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.7 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">1000X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">Major Pair</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon forex"><i class="fas fa-dollar-sign"></i></div>
                        <div><div class="inst-name">AUD / USD</div><div class="inst-symbol">Australian Dollar vs US Dollar</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.9 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">500X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">Major Pair</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon forex"><i class="fas fa-dollar-sign"></i></div>
                        <div><div class="inst-name">USD / CAD</div><div class="inst-symbol">US Dollar vs Canadian Dollar</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">1.0 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">500X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">Major Pair</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon forex"><i class="fas fa-franc-sign"></i></div>
                        <div><div class="inst-name">USD / CHF</div><div class="inst-symbol">US Dollar vs Swiss Franc</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.9 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">500X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge volatile">Safe Haven</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
            </div>

            <!-- Stocks Panel -->
            <div class="inst-panel" id="tab-stocks">
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon stocks"><i class="fab fa-apple"></i></div>
                        <div><div class="inst-name">Apple Inc.</div><div class="inst-symbol">AAPL / NASDAQ</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.05%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">20X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">Mon–Fri</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Top Pick</span><span class="inst-badge stable">Blue Chip</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon stocks"><i class="fab fa-google"></i></div>
                        <div><div class="inst-name">Alphabet Inc.</div><div class="inst-symbol">GOOGL / NASDAQ</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.05%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">20X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">Mon–Fri</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">Blue Chip</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon stocks"><i class="fab fa-amazon"></i></div>
                        <div><div class="inst-name">Amazon</div><div class="inst-symbol">AMZN / NASDAQ</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.06%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">20X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">Mon–Fri</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Popular</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon stocks"><i class="fab fa-microsoft"></i></div>
                        <div><div class="inst-name">Microsoft</div><div class="inst-symbol">MSFT / NASDAQ</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.04%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">20X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">Mon–Fri</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">Blue Chip</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon stocks"><i class="fas fa-bolt"></i></div>
                        <div><div class="inst-name">Tesla</div><div class="inst-symbol">TSLA / NASDAQ</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.08%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">20X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">Mon–Fri</span></div>
                    <div class="inst-tags"><span class="inst-badge volatile">High Volatility</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon stocks"><i class="fas fa-chart-line"></i></div>
                        <div><div class="inst-name">S&P 500</div><div class="inst-symbol">SPX / INDEX</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.03%</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">100X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">Mon–Fri</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Top Index</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
            </div>

            <!-- Commodities Panel -->
            <div class="inst-panel" id="tab-commodities">
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon commodities"><i class="fas fa-gem"></i></div>
                        <div><div class="inst-name">Gold</div><div class="inst-symbol">XAU / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.3 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">500X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Most Traded</span><span class="inst-badge volatile">Safe Haven</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon commodities"><i class="fas fa-ring"></i></div>
                        <div><div class="inst-name">Silver</div><div class="inst-symbol">XAG / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.5 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">500X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge popular">Popular</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon commodities"><i class="fas fa-oil-can"></i></div>
                        <div><div class="inst-name">Crude Oil</div><div class="inst-symbol">WTI / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.03</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">200X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge volatile">High Volatility</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon commodities"><i class="fas fa-fire"></i></div>
                        <div><div class="inst-name">Natural Gas</div><div class="inst-symbol">NATGAS / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.03</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">200X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge volatile">Volatile</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon commodities"><i class="fas fa-seedling"></i></div>
                        <div><div class="inst-name">Copper</div><div class="inst-symbol">HG / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.04</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">200X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">Industrial</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
                <div class="inst-card">
                    <div class="inst-card-head">
                        <div class="inst-icon commodities"><i class="fas fa-crown"></i></div>
                        <div><div class="inst-name">Platinum</div><div class="inst-symbol">XPT / USD</div></div>
                    </div>
                    <div class="inst-row"><span class="inst-label">Spread From</span><span class="inst-value inst-spread">0.8 pips</span></div>
                    <div class="inst-row"><span class="inst-label">Leverage</span><span class="inst-leverage">200X</span></div>
                    <div class="inst-row"><span class="inst-label">Trading Hours</span><span class="inst-value">24/5</span></div>
                    <div class="inst-tags"><span class="inst-badge stable">Precious Metal</span></div>
                    <a href="{{ route('register') }}" class="inst-trade-btn">Trade Now</a>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="inst-stats">
                <div class="inst-stat"><div class="inst-stat-num">200+</div><div class="inst-stat-label">Trading Instruments</div></div>
                <div class="inst-stat"><div class="inst-stat-num">0.0</div><div class="inst-stat-label">Spread From (pips)</div></div>
                <div class="inst-stat"><div class="inst-stat-num">1000X</div><div class="inst-stat-label">Max Leverage</div></div>
                <div class="inst-stat"><div class="inst-stat-num">24/7</div><div class="inst-stat-label">Market Access</div></div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('register') }}" class="btn btn-primary-custom">Start Trading Now</a>
            </div>
        </div>
    </section>

    <script>
    // Instrument tabs
    document.querySelectorAll('.inst-tab').forEach(tab => {
        tab.addEventListener('click', function(){
            document.querySelectorAll('.inst-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.inst-panel').forEach(p => p.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('tab-' + this.dataset.tab).classList.add('active');
        });
    });
    </script>

    <!-- Account Plans Section -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">Trading Account Plans</h2>
            <p class="section-subtitle">Choose the plan that fits your trading goals and investment strategy</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">BASIC PLAN</h3>
                        <div class="plan-price">$500</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">10% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $7,500</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card popular">
                        <h3 class="plan-name">SILVER PLAN</h3>
                        <div class="plan-price">$20,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">15% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $117,500</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">GOLD PLAN</h3>
                        <div class="plan-price">$100,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">60% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $420,000</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="plan-card">
                        <h3 class="plan-name">DIAMOND PLAN</h3>
                        <div class="plan-price">$500,000</div>
                        <div class="plan-feature">24/7 Support</div>
                        <div class="plan-feature">Professional Charts</div>
                        <div class="plan-feature">60% Return</div>
                        <div class="plan-feature">Trading Alerts</div>
                        <div class="plan-feature">100% Insurance</div>
                        <div class="plan-roi">ROI: $2,520,000</div>
                        <a href="#" class="btn btn-primary-custom mt-4 w-100">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section" style="background: var(--darker-bg);">
        <div class="container">
            <h2 class="section-title">Why Choose Affordableinvprogram</h2>
            <p class="section-subtitle">The platform trusted by over 150,000 traders worldwide for copy trading excellence</p>
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-bolt"></i></div>
                    <h4 class="why-title">Ultra-Fast Execution</h4>
                    <p class="why-desc">Orders executed in under 30ms. No requotes, no delays  even during high volatility market events.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4 class="why-title">Fully Regulated</h4>
                    <p class="why-desc">Licensed and regulated by top-tier financial authorities. Your funds are held in segregated accounts.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                    <h4 class="why-title">Advanced Analytics</h4>
                    <p class="why-desc">Real-time market data, professional charting tools, and AI-powered trade signals at your fingertips.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4 class="why-title">Zero Hidden Fees</h4>
                    <p class="why-desc">Transparent pricing with tight spreads from 0.0 pips. No commissions on standard accounts.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-users-cog"></i></div>
                    <h4 class="why-title">Smart Copy Trading</h4>
                    <p class="why-desc">Automatically replicate trades from top performers. Set risk limits and let the algorithm do the work.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-headset"></i></div>
                    <h4 class="why-title">24/7 Expert Support</h4>
                    <p class="why-desc">Multilingual support team available around the clock via live chat, email, and phone  whenever you need us.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Happy investors sharing their experiences with Affordableinvprogram</p>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Affordableinvprogram made copy trading so easy. I earned my first $10k in profit by following top traders. Highly recommended!"</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=1" alt="Robert Pope" class="testimonial-avatar">
                            Robert Pope
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"I love the transparency and fast withdrawals. Affordableinvprogram's support team is always there when I need help."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=2" alt="Steve Walter" class="testimonial-avatar">
                            Steve Walter
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Copying expert traders on Affordableinvprogram helped me grow my savings faster than ever. The platform is simple and secure."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=3" alt="Veronica Keith" class="testimonial-avatar">
                            Veronica Keith
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security & Regulation Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Security & Regulation</h2>
            <p class="section-subtitle">Your funds and data are protected by enterprise-grade security infrastructure</p>
            <div class="security-grid">
                <div class="security-card">
                    <div class="security-icon"><i class="fas fa-lock"></i></div>
                    <h4>256-Bit SSL Encryption</h4>
                    <p>All data transmitted is protected with bank-level SSL encryption, ensuring your personal and financial information is always secure.</p>
                </div>
                <div class="security-card">
                    <div class="security-icon"><i class="fas fa-university"></i></div>
                    <h4>Segregated Accounts</h4>
                    <p>Client funds are held in segregated bank accounts, completely separate from company operating funds for maximum protection.</p>
                </div>
                <div class="security-card">
                    <div class="security-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Two-Factor Authentication</h4>
                    <p>Secure your account with 2FA. Every login and withdrawal requires secondary verification for an extra layer of protection.</p>
                </div>
                <div class="security-card">
                    <div class="security-icon"><i class="fas fa-balance-scale"></i></div>
                    <h4>Regulatory Compliance</h4>
                    <p>We operate in full compliance with international financial regulations, adhering to strict KYC and AML policies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="section section-dark">
        <div class="container">
            <h2 class="section-title">We Accept</h2>
            <p class="section-subtitle">Payment Methods for Deposit and withdrawal</p>
            
            <div class="text-center">
                <div class="payment-method">
                    <i class="fab fa-bitcoin fa-2x text-warning"></i>
                    <p class="mt-2 mb-0 text-dark">Bitcoin</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-ethereum fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">Ethereum</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-visa fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">Visa</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-mastercard fa-2x text-danger"></i>
                    <p class="mt-2 mb-0 text-dark">Mastercard</p>
                </div>
                <div class="payment-method">
                    <i class="fas fa-university fa-2x text-info"></i>
                    <p class="mt-2 mb-0 text-dark">Bank Transfer</p>
                </div>
                <div class="payment-method">
                    <i class="fab fa-paypal fa-2x text-primary"></i>
                    <p class="mt-2 mb-0 text-dark">PayPal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Forex Cross Rates Widget -->
    <section class="section">
        <div class="container">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                    "width": "100%",
                    "height": "400",
                    "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD",
                        "CNY"
                    ],
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section" style="background: var(--darker-bg);">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Everything you need to know to get started</p>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-q" onclick="this.parentElement.classList.toggle('active')">
                        What is copy trading and how does it work?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">Copy trading allows you to automatically replicate the trades of experienced, top-performing traders in real time. Simply choose a trader from our leaderboard, allocate your capital, and every trade they make is mirrored in your account proportionally.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q" onclick="this.parentElement.classList.toggle('active')">
                        What is the minimum amount to start trading?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">You can start copy trading with as little as $500 on our Basic Plan. We offer multiple account tiers to match your investment goals and risk appetite.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q" onclick="this.parentElement.classList.toggle('active')">
                        How do I withdraw my profits?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">Withdrawals can be made anytime through your dashboard. We support Bitcoin, USDT, Ethereum, bank transfer, and other methods. Most withdrawals are processed within 24 hours.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q" onclick="this.parentElement.classList.toggle('active')">
                        Is my money safe with Affordableinvprogram?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">Absolutely. We use 256-bit SSL encryption, two-factor authentication, and hold all client funds in segregated bank accounts. We are fully compliant with international financial regulations.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q" onclick="this.parentElement.classList.toggle('active')">
                        Can I stop copying a trader at any time?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">Yes. You have complete control over your copy trading. You can pause, stop, or switch traders at any time directly from your dashboard  no lock-in periods or penalties.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q" onclick="this.parentElement.classList.toggle('active')">
                        What trading instruments are available?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">We offer 200+ instruments across Cryptocurrencies, Forex pairs, Stocks, Commodities, and Indices  all accessible from one powerful trading platform with competitive spreads.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="cta-banner">
        <div class="container" style="position:relative; z-index:1;">
            <h2 class="cta-title">Ready to Start Earning?</h2>
            <p class="cta-subtitle">Join 150,000+ traders worldwide. Open your free account today and start copying top traders in minutes.</p>
            <div class="cta-features">
                <span class="cta-feature"><i class="fas fa-check-circle"></i> Free Account</span>
                <span class="cta-feature"><i class="fas fa-check-circle"></i> No Hidden Fees</span>
                <span class="cta-feature"><i class="fas fa-check-circle"></i> Instant Withdrawals</span>
                <span class="cta-feature"><i class="fas fa-check-circle"></i> 24/7 Support</span>
            </div>
            <a href="{{ route('register') }}" class="cta-btn">Create Free Account <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

@include('home.footer')