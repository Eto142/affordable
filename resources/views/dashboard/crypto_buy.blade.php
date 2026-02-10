@include('dashboard.header')

<body class="crypt-dark"  style="background-color: rgb(2, 2, 28)">
   
	<!-- taper -->
	<div class="tradingview-widget-container">
		<div class="tradingview-widget-container__widget"></div>
		<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
			{
			"symbols": [
			  {
			    "title": "S&P 500",
			    "proName": "INDEX:SPX"
			  },
			  {
			    "title": "Shanghai Composite",
			    "proName": "INDEX:XLY0"
			  },
			  {
			    "title": "EUR/USD",
			    "proName": "FX_IDC:EURUSD"
			  },
			  {
			    "title": "BTC/USD",
			    "proName": "BITFINEX:BTCUSD"
			  },
			  {
			    "title": "ETH/USD",
			    "proName": "BITFINEX:ETHUSD"
			  }
			],
			"theme": "dark",
			"isTransparent": false,
			"displayMode": "adaptive",
			"locale": "en"
			}
		</script>
	</div>

<div class="row">
    <div class="col-12">
        <div class="crypt-dash-withdraw mt-3 d-block" id="bitcoin">
            <div class="crypt-withdraw-heading">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                    </div>
                </div>
            </div>
            <div class="crypt-withdraw-body bg-white">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            
                            <a 
                                class="nav-link active" 
                                data-toggle="pill" 
                                href="#" 
                                role="tab" 
                                aria-controls="v-pills-zilliqua-btc-history" 
                                aria-selected="false">
                                    <i class="pe-7s-clock"></i> Buy Crypto
                            </a>

                            
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-zilliqua-btc-tabContent">
                            <!-- history -->
                              <div class="tab-pane fade show active" id="v-pills-zilliqua-btc-history" role="tabpanel" aria-labelledby="v-pills-zilliqua-btc-history-tab">
                                  <div>
                                      <h4 class="text-white">
                                          <span class="">Buy Crypto</span><br />
                                      </h4>
                                      <br>
<p><a href="https://www.trustwallet.com"  style="color:gold;">Trustwallet.com</a></p><br>
<p><a href="https://changelly.com/"  style="color:gold;">Changelly.com</a></p><br>
<p><a href="https://www.bitcoin.com/"  style="color:gold;">Bitcoin.com</a> </p> <br>
 <p><a href="https://www.coinmama.com"  style="color:gold;">Coinmama.com</a></p><br>
 <p><a href="https://www.yellowcard.io"  style="color:gold;">Yellowcard.io</a></p><br>
 <p><a href="https://www.remitano.com"  style="color:gold;">Remitano.com</a></p><br>
 <p><a href="https://www.luno.com"  style="color:gold;">Luno.com</a></p><br>
 <p><a href="https://www.cex.io"  style="color:gold;">Cex.io</a></p><br>
 <p><a href="https://www.cashapp.com"  style="color:gold;">Cashapp.com</a></p><br>
 <p><a href="https://www.paxful.com"  style="color:gold;">Paxful.com</a></p><br>
                                  </div>
                                  
                              </div>

                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('dashboard.footer')