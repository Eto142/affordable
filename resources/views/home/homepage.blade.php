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
    <!-- Copy Trading Notifications -->
    <div class="inv-box-a" id="inv-box-a">
        <div class="inv-block">
            <i class="fa fa-users" style="font-size:32px;color:#04d189;"></i>
            <div>
                <div class="inv-title">Copy Trading Update</div>
                <div class="inv-text"></div>
            </div>
        </div>
    </div>
    <div class="inv-box-b" id="inv-box-b">
        <div class="inv-block">
            <i class="fa fa-chart-line" style="font-size:32px;color:#1991ff;"></i>
            <div>
                <div class="inv-title">Affordableinvprogram Alert</div>
                <div class="inv-text"></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
    <script>
    // Affordableinvprogram copy trading notifications
    const invNames = ["Chidi","Amina","Emeka","Ngozi","Tunde","Fatima","Bola","Ada","Kelechi","Seyi"];
    const invCountries = ["Nigeria","Ghana","Kenya","South Africa","UK","Canada","UAE","USA"];
    function pick(list){ return list[Math.floor(Math.random()*list.length)]; }
    function money(min,max){ return (Math.random()*(max-min)+min).toFixed(2); }
    let toggleA = true;
    let toggleB = false;
    function showA(){
        let name = pick(invNames);
        let country = pick(invCountries);
        let amount = toggleA ? money(200,8000) : money(500,20000);
        let msg = toggleA
            ? `${name} from ${country} just copied a trade and earned <b>$${amount}</b>!`
            : `${name} from ${country} withdrew <b>$${amount}</b> profit from copy trading.`;
        toggleA = !toggleA;
        $("#inv-box-a .inv-text").html(msg);
        $("#inv-box-a").fadeIn(500);
        setTimeout(()=>$("#inv-box-a").fadeOut(500), 4200);
    }
    function showB(){
        let name = pick(invNames);
        let amount = toggleB ? money(50,700) : money(200,3500);
        let msg = toggleB
            ? `${name} just started following a new expert trader!`
            : `${name} received a copy trading signal: <b>+$${amount}</b> potential profit!`;
        toggleB = !toggleB;
        $("#inv-box-b .inv-text").html(msg);
        $("#inv-box-b").fadeIn(500);
        setTimeout(()=>$("#inv-box-b").fadeOut(500), 4200);
    }
    setInterval(showA, 6500);
    setInterval(showB, 9000);
    </script>

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

    <!-- Trading Instruments Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Trade Multiple Instruments</h2>
            <p class="section-subtitle">Get immediate access to cryptocurrencies, stock indices, commodities and forex with a single platform</p>
            
            <div class="market-table">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Instrument</th>
                            <th>Symbol</th>
                            <th>Price</th>
                            <th>Change</th>
                            <th>Leverage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-bitcoin text-warning me-2 fs-5"></i>
                                    Bitcoin
                                </div>
                            </td>
                            <td>BTC/USD</td>
                            <td>$45,230.50</td>
                            <td class="positive">+2.34%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-ethereum text-primary me-2 fs-5"></i>
                                    Ethereum
                                </div>
                            </td>
                            <td>ETH/USD</td>
                            <td>$3,210.75</td>
                            <td class="positive">+1.67%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-euro-sign text-info me-2 fs-5"></i>
                                    EUR/USD
                                </div>
                            </td>
                            <td>EUR/USD</td>
                            <td>1.0854</td>
                            <td class="negative">-0.23%</td>
                            <td>1000X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-chart-line text-success me-2 fs-5"></i>
                                    S&P 500
                                </div>
                            </td>
                            <td>SPX</td>
                            <td>4,530.20</td>
                            <td class="positive">+0.89%</td>
                            <td>100X</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-gem text-warning me-2 fs-5"></i>
                                    Gold
                                </div>
                            </td>
                            <td>XAU/USD</td>
                            <td>$1,980.40</td>
                            <td class="positive">+0.56%</td>
                            <td>500X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-light-custom">View All Instruments</a>
            </div>
        </div>
    </section>

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

@include('home.footer')