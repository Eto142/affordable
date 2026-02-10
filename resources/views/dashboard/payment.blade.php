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
                                    href="{{url('deposits')}}"
                                    role="tab"
                                    aria-controls="v-pills-zilliqua-btc-deposit"
                                    aria-selected="true" style="color: green">
                                <i class="pe-7s-bottom-arrow"></i> Deposit
                            </a>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-zilliqua-btc-tabContent">

                            
                            
                            <!-- deposit -->
                            <div class="tab-pane fade show active" id="v-pills-zilliqua-btc-deposit" role="tabpanel"
                                 aria-labelledby="v-pills-zilliqua-btc-deposit-tab">

                                 @if (session('status'))
                                 <div class="alert alert-success" role="alert">
                                     {{ session('status') }}
                                 </div>
                             @endif
                             @if($message = Session::get('success'))
                               <div class="alert alert-success">
                            <p>{{$message}}</p>
           </div>
        @endif
            <h6 class="text-uppercase">{{$item}} Payment</h6>
            <p class="title1" style="color: green">SEND
                 @if($item=='Bitcoin')
                <strong>{{$btc_amount}}</strong>
                @elseif($item=='Ethereum')
                <strong>{{$eth_amount}}</strong>
                @endif
      
                {{$item}} TO THE WALLET ADDRESS BELOW OR
                SCAN THE QR CODE WITH YOUR WALLET APP
              </p>

  



              <div class="col-lg-4">
                <div class="">
                    <!-- Table Head -->
                
                    
                        @if($item=='Bitcoin')
                        @foreach($payment as $payments)
                     <input placeholder="Amount" name="amount" type="text" class="form-control crypt-input-lg"  value="{{$payments->btc_address}}" readonly required>
                     <br>
                     <center><img src="{{asset('manager/uploads/manager/'.$payments->btcImage)}}" width="60%" height="50%" /></center>
                     <br>
                     @endforeach
                     @elseif($item=='Usdt')
                     
                     @foreach($payment as $payments)
                     <input placeholder="Amount" name="amount" type="text" value="{{$payments->usdt_address}}" readonly class="form-control crypt-input-lg" required>
                     <center><img src="{{asset('manager/uploads/manager/'.$payments->usdtImage)}}" width="60%" height="50%" />
                        @endforeach</center>
                     @elseif($item=='Ethereum')
                
                     @foreach($payment as $payments)
                     <input placeholder="Amount" name="amount" type="text" class="form-control crypt-input-lg"  value="{{$payments->eth_address}}" readonly required>
                     <br>
                     <center><img src="{{asset('manager/uploads/manager/'.$payments->ethImage)}}" width="60%" height="50%" /></center>
                     @endforeach
                     @endif
                      
                     <center>
                        <form class="deposit-form" method="post" action="{{ url('/make-deposit')}}" enctype="multipart/form-data">         
                          {{csrf_field()}}

                          <p class="title1 text-success" style="color: green">Upload Payment proof after payment.</p>
                          <div class="input-group input-text-select mb-3">
                              
                            
                              <input type="file" name="image"  class="form-control crypt-input-lg" required>
                              <input type="hidden" name="amount" value="{{$amount}}">
                              <input type="hidden" name="paymethd_method" value="{{$item}}">
                        
                            
                           </div>
                      
                                                          </div>
                      
                                                          <input type="submit" name="" style="background-color: green" class="crypt-button-green-full mt-2"
                                                                 value="Confirm Payment">
                                                      </form>
                                                  </div>
                                              </center>
                      
                                              </div>
                </div>
            </div>
                                    
                </div>
            </div>
        </div>
    </div>	
</div>








     <div class="input-group input-text-select mb-3">
    
     <br>
     <br>
     {{-- <button class="btn btn-primary" type="button" id="button-addon2" onclick="copyAdr1()">copy address</button> --}}
    </div>
   
  </div>

  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<footer>
		
	</footer>

    <script type="text/javascript">
        function copyAdr(){
              var copyText = document.getElementById("myInput");
               copyText.select();
      
      
              /* Copy the text inside the text field */
              document.execCommand("copy");
               copyText.setSelectionRange(0, 99999);
               navigator.clipboard.writeText(copyText.value);
      
              }
      
                function copyAdr1(){
              var copyText = document.getElementById("myInput1");
               copyText.select();
      
      
              /* Copy the text inside the text field */
              document.execCommand("copy");
               copyText.setSelectionRange(0, 99999);
               navigator.clipboard.writeText(copyText.value);
      
              }
      
      
        function copyAdr2(){
              var copyText = document.getElementById("myInput2");
               copyText.select();
      
      
              /* Copy the text inside the text field */
              document.execCommand("copy");
               copyText.setSelectionRange(0, 99999);
               navigator.clipboard.writeText(copyText.value);
      
              }
      
      </script>
   
<script type="text/javascript">
    $(document).ready(function () {

        $('#paymentType').on('change', function () {
            if ($(this).val() == 'Bank Transfer') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');

            } else if ($(this).val() == 'Cash App') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');


            } else if ($(this).val() == 'Crypto Currency') {
                $("#cryptoWrapper").attr("style", 'display:block');
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:none');

                generateCode();


            } else if ($(this).val() == 'Money Gram') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');


            } else if ($(this).val() == 'PayPal') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');


            } else if ($(this).val() == 'Western Union') {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:block');
                $("#cryptoWrapper").attr("style", 'display:none');

            } else {
                $("#bankWrapper").attr("style", 'display:none');
                $("#supportWrapper").attr("style", 'display:none');
                $("#cryptoWrapper").attr("style", 'display:none');

            }

        });

    })

    function generateCode() {
        let testimonials = $('.btc_qrcode');
        for (let i = 0; i < testimonials.length; i++) {
            // Using $() to re-wrap the element.
            let wallet = $(testimonials[i]).data('wallet');
            $(testimonials[i]).empty()
            $(testimonials[i]).css({'width': 180, 'height': 180})
            $(testimonials[i]).qrcode({width: 180, height: 180, text: wallet});
            $(testimonials[i]).show();
        }
    }
</script>
@include('dashboard.footer')