@include('dashboard.header')

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
                                href="{{url('tradehistory')}}"
                                role="tab" 
                                aria-controls="v-pills-zilliqua-btc-history" 
                                aria-selected="false">
                                    <i class="pe-7s-clock"></i> All Trade History
                            </a>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-zilliqua-btc-tabContent">
                            <!-- history -->
                              <div class="tab-pane fade show active" id="v-pills-zilliqua-btc-history" role="tabpanel" aria-labelledby="v-pills-zilliqua-btc-history-tab">
                                  <div>
                                      <h4 class="text-white">
                                          <span class="">Demo Trading History</span><br />
                                      </h4>
                                      <table class="table table-striped">
                                          <thead>
                                            <tr>
                                                  <th scope="col">Trade Amount</th>
                                                  <th scope="col">Asset</th>
                                                  <th scope="col">Currency</th>
                                                  <th scope="col">Position</th>
                                                  <th scope="col">Profit Amount</th>
                                                  <th scope="col">Loss Amount</th>
                                                  <th scope="col"> Transaction Date</th>
                                                  <th scope="col">Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <script type="text/javascript">                                             <tr>
                                                  <td>
                                                    {amt}
                                                  </td>
                                                  <td>ALGO-BTC  </td>
                                                  <td> ${tradeType}
                                                     </td>
                                                  <td>Buy  </td>

                                                  <td>
                                                      $0.00  
                                                  </td>
                                                  <td>
                                                      $40.00  
                                                  </td>

                                                  <td>

                                                      2023-09-02 14:52:40												      
                                                  </td>
                                                  <td>
                                                      Loss												      </td>
                                                </tr>
                                                                                         <tr>
                                                  <td>
                                                      $90.00 
                                                  </td>
                                                  <td>BCH-BTC  </td>
                                                  <td>Crypto Currency  </td>
                                                  <td>Sell  </td>

                                                  <td>
                                                      $0.00  
                                                  </td>
                                                  <td>
                                                      $90.00  
                                                  </td>

                                                  <td>

                                                      2023-09-02 14:53:35												      
                                                  </td>
                                                  <td>
                                                      Loss												      </td>
                                                </tr>
                                            </script>
                                                                                        </tbody>
                                    </table>
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
	<script type="text/javascript" src="jss/cute-alert-master/cute-alert.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){

			$(".sub").click(function() {

				//buy
				var amt=  parseInt( $("#amtBuy").val() );
				var user = $('#userId').val();
				
				var bonus = parseInt( $('#txt_demoBonus').val() );
				var bal = parseInt( $('#txt_demoBal').val() );

				var e = document.getElementById("curr");
				var cur1 = e.value;

				var ast1=$("#ast1").val();
				var trd1=$("#trd1").val();

				
				if ($("#amtBuy").val() == '') {
					cuteAlert({
						type: "error",
						title: "Enter A Valid Amount",
						message: "You cannot place trade. <br> Enter a valid amount to trade <br> Contact Support for Help.",
						buttonText: "Okay"
					});
					return;
				}

				if (bal <= amt) {
					cuteAlert({
						type: "error",
						title: "Demo Balance Is To Low",
						message: "You cannot place trade. <br> Your demo trading balance is low <br> Contact Support for Help.",
						buttonText: "Okay"
					});
					return;
				}

				placeTrade('Buy', bal, bonus, user, amt, cur1, ast1, trd1);
			});


			$(".sub2").click(function() {
				// sell
				var amt=  parseInt( $("#amtSell").val() );
				// var user = $(this).data('user');
				var user = $('#userId').val();
				var bonus = parseInt( $('#demoBonus').html() );
				var bal = parseInt( $('#demoBal').html() );

				var cur2=$("#curr2").val();
				var ast2=$("#ast2").val();
				var trd2=$("#trd2").val();


				if ($("#amtSell").val() == '') {
					cuteAlert({
						type: "error",
						title: "Enter A Valid Amount",
						message: "You cannot place trade. <br> Enter a valid amount to trade <br> Contact Support for Help.",
						buttonText: "Okay"
					});
					return;
				}

				if (bal <= amt) {
					cuteAlert({
						type: "error",
						title: "Balance Is To Low",
						message: "You cannot trade <br> Your balance is too low <br> Contact Support for Help.",
						buttonText: "Okay"
					});
					return;
				}
				placeTrade('Sell', bal, bonus, user, amt, cur2, ast2, trd2);
			});


			function placeTrade(tradeType, bal, bonus, user, tradeAmt, curr, ast2, trd1){
			
				var amt= parseFloat( tradeAmt, 10).toFixed(2);
				if ( amt < 1 ) {
					cuteAlert({
						type: "error",
						title: "Amount invalid",
						message: "Your trading amount is invalid. <br> Please enter a valid trading amount",
						buttonText: "Okay"
					});
					return;
				}else if(!ast2){
					cuteAlert({
						type: "error",
						title: "Select Asset",
						message: "Please select the asset before trading.",
						buttonText: "Okay"
					});
					return;
				}

				cuteAlert({
				  type: "question",
				  title: `<strong> Are you sure you want to place trade? </strong>`,
				  message: `
				  	Asset Type: ${ast2}.<br>
				  	Order Place @ ${tradeType} Position. <br> 
				  	Amount: $${amt}. <br>
				  	`,
				  confirmText: "Yes!",
				  cancelText: "No, Go Back"
				}).then((e)=>{
					if ( e == ("confirm")){

					  	var sec_2 = parseInt(trd1) + 2000;
					  	var sec_4 = parseInt(trd1) + 4000;
					  	var sec_6 = parseInt(trd1) + 6000;
					  	var sec_8 = parseInt(trd1) + 8000;
					  	var sec_10 = parseInt(trd1) + 12000;

					  	$.Toast.showToast({
							"title":"<h3>CONNECTING TO TRADING SERVER.. <br> <br> PLEASE WAIT </h3>",
							"duration": trd1
						});
					  
					  	
					  	setTimeout(function(){
					  		cuteToast({
							  type: "error", // or 'info', 'error', 'warning'
							  message: `Trade Placed. <br> Opened ${tradeType}: $${amt}`,
							  timer: 4000
							});
					  	}, sec_2);


						setTimeout(function() {
							cuteToast({
							  type: "success", // or 'info', 'error', 'warning'
							  message: `Trade Executed Successfully. <br> Opened ${tradeType}: $${amt}`,
							  timer: 6000
							})
						}, sec_4);

						setTimeout(function() {
							cuteAlert({
							  type: "success",
							  title: `<strong>Trade Executed! </strong>`,
							  message: `
							  	Asset Type: ${ast2}.<br>
							  	Order Place @ ${tradeType} Position. <br> 
							  	Amount: $${amt}. <br>
							  	<br>Check your demo trading history result. 
							  	`,
							});
							setTimeout(function(){
								$('.alert-close').click();
							}, 5000);
						}, sec_8);
						updateBalance({amount: amt, asset: ast2, currency: curr, time: trd1, user: user, position: tradeType});
					} 
				})
			}


			function updateBalance({amount, asset,currency,time, user, position}){
				$.ajax({
			    url:'tradehistory',
			    data:{
			    	amount, 
					asset,
					currency,
					time,
					user,
					position
			    },
			    type:'POST',
			    success: function(data) {
			    	var trd1=time;
			    	var ts = parseInt(trd1) + 6000;
			    	
			    	setTimeout(function() {
				    	if (data.status == true || data.status == 'true') {
			    		 	$("#result").html(data);
					      	$('#demoBal').html(parseInt(data.balance).toFixed(2));
					      	$('#txt_demoBal').val(data.balance);
					      	$('#demoBonus').html(parseInt(data.bonus).toFixed(2));
					      	$('#txt_demoBonus').val(data.bonus);
				    	}
			    	}, ts);
			    },
			    error: function(jqXHR, textStatus, errorThrown) {
		           console.log(textStatus, errorThrown);
		        }
			  });
			}

		});

	</script>