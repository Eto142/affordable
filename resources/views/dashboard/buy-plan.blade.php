@include('dashboard.header')
<div class="main-panel bg-light">
			<div class="content bg-light">
				<div class="page-inner">
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
					<div class="mt-2 mb-4">
					
						
					</div>
					<div>
    </div>					<div>
    </div>	                   
	                        <h3 class="title1 text-light">Our Pricing</h3>
	                       <div class="mb-5 row" style="background-color: rgb(25, 25, 46)">
												<div class="col-lg-4">
							<div class="pricing-table card purple border p-4" style="background-color: rgb(25, 25, 46)">
								<!-- Table Head -->
								
								<h2 class="" style="color: white">BASIC </h2>
								<!-- Price -->
								<div class="price-tag" style="color: white">
									<b><span class="symbol text-light">Minimum</span></b><br>
									<b><span class="symbol text-light">$</span></b>
									<b><span class="amount text-light">500</span></b>
								</div>
								<!-- Features -->
								<div class="pricing-features" style="color: white">
							
									
								</div> <br>
								<!-- Button -->
								<div class="">
								<form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
									<input type="hidden" name="plan_name" value="Basic">
                                    <input type="hidden" value="0.10" name="plan_percent">
                                     <input type="hidden" value="10%" name="plan_percentage">
										<h5 class="text-light">Amount to invest: ($500 default)</h5>
										<input type="number" min="500" max="19999" name="amount" placeholder="$500" value="500"  class="form-control text-light bg-dark"> <br>
										
										<select class="crypt-image-select" name="plan_duration" required id="duration">
                                            <option value="">Trade Duration</option>
                                            <option value="14 Days">14 Days</option>
                                            <option value="1 Month">1 Month</option>
                                            <option value="3 Months">3 Months</option>
                                            <option value="6 Months">6 Months</option>
					                        <option value="1 Year">1 Year</option>
					                        <option value="2 Years">2 Years</option>
  					                        <option value="5 Years">5 Years</option>
										<input type="submit" class="crypt-button-green-full mt-2" value="Join plan" >
									</form>
								</div>
							</div>
						</div>
												<div class="col-lg-4" >
							<div class="pricing-table card purple border shadow p-4" style="background-color: rgb(25, 25, 46)" >
								<!-- Table Head -->
								
								<h2 class="text-light">SILVER</h2>
								<!-- Price -->
								<div class="price-tag">
									<b><span class="symbol text-light">Minimum</span></b><br>
									<b><span class="symbol text-light">$</span></b>
									<b><span class="amount text-light">1,000.00</span></b>
								</div>
								<!-- Features -->
								<div class="pricing-features">
									
									
								</div> <br>
								<!-- Button -->
								<div class="">
								<form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
										<input type="hidden" name="plan_name" value="Silver">
                                    <input type="hidden" value="0.15" name="plan_percent">
                                     <input type="hidden" value="15%" name="plan_percentage">
										<h5 class="text-light">Amount to invest: ($1000 default)</h5>
										<input type="number" min="1000" max="49999" name="amount" placeholder="1000" value="1000"  class="form-control text-light bg-dark"> <br>
										
										<select class="crypt-image-select" name="plan_duration" required id="duration">
                                            <option value="">Trade Duration</option>
                                            <option value="14 Days">14 Days</option>
                                            <option value="1 Month">1 Month</option>
                                            <option value="3 Months">3 Months</option>
                                            <option value="6 Months">6 Months</option>
					                         <option value="1 Year">1 Year</option>
					                        <option value="2 Years">2 Years</option>
  					                        <option value="5 Years">5 Years</option>
										<input type="submit" class="crypt-button-green-full mt-2" value="Join plan" >
									</form>
								</div>
							</div>
						</div>



						<div class="col-lg-4">
							<div class="pricing-table card purple border shadow p-4" style="background-color: rgb(25, 25, 46)">
								<!-- Table Head -->
								
								<h2 class="text-light">PREMIUM</h2>
								<!-- Price -->
								<div class="price-tag">
									<b><span class="symbol text-light">Minimum</span></b><br>
									<b><span class="symbol text-light">$</span></b>
									<b><span class="amount text-light">5,000.00</span></b>
								</div>
								<!-- Features -->
								<div class="pricing-features">
									
									
								</div> <br>
								<!-- Button -->
								<div class="">
								<form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
										<input type="hidden" value="0.20" name="plan_percent">
                                     <input type="hidden" value="20%" name="plan_percentage">
										<h5 class="text-light">Amount to invest: ($5000 default)</h5>
										<input type="number" min="5000" max="99999" name="amount" placeholder="$5000" value="5000"  class="form-control text-light"> <br>
										<input type="hidden" name="plan_name" value="Premium">
										<select class="crypt-image-select" name="plan_duration" required id="duration">
                                            <option value="">Trade Duration</option>
                                            <option value="14 Days">14 Days</option>
                                            <option value="1 Month">1 Month</option>
                                            <option value="3 Months">3 Months</option>
                                            <option value="6 Months">6 Months</option>
					  <option value="1 Year">1 Year</option>
					  <option value="2 Years">2 Years</option>
  					  <option value="5 Years">5 Years</option>
										<input type="submit" class="crypt-button-green-full mt-2" value="Join plan" >
									</form>
								</div>
							</div>
						</div>
                          
						



						<div class="col-lg-4">
							<div class="pricing-table card purple border  shadow p-4" style="background-color: rgb(25, 25, 46)">
								<!-- Table Head -->
								
								<h2 class="text-light">VIP</h2>
								<!-- Price -->
								<div class="price-tag">
									<b><span class="symbol text-light">Minimum</span></b><br>
									<b><span class="symbol text-light">$</span></b>
									<b><span class="amount text-light">10,000.00</span></b>
								</div>
								<!-- Features -->
								<div class="pricing-features">
									
									
								</div> <br>
								<!-- Button -->
								<div class="">
								<form action="{{url('/buy-plan')}}" method="post">
                                        @csrf
									<input type="hidden" value="0.50" name="plan_percent">
                                     <input type="hidden" value="50%" name="plan_percentage">
										<h5 class="text-light">Amount to invest: ($10000 default)</h5>
										<input type="number" min="10000" max="" name="amount" placeholder="$10000" value="10000"  class="form-control text-light"> <br>
										<input type="hidden" name="plan_name" value="Vip">
										<select class="crypt-image-select" name="plan_duration" required id="duration">
                                            <option value="">Trade Duration</option>
                                            <option value="14 Days">14 Days</option>
                                            <option value="1 Month">1 Month</option>
                                            <option value="3 Months">3 Months</option>
                                            <option value="6 Months">6 Months</option>
					  <option value="1 Year">1 Year</option>
					  <option value="2 Years">2 Years</option>
  					  <option value="5 Years">5 Years</option>
										<input type="submit" class="crypt-button-green-full mt-2" value="Join plan" >
									</form>
								</div>
							</div>
						</div>
												
							</div>
						</div>
					</div>
				</div>	
			</div>

@include('dashboard.footer')