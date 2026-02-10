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
                                href="{{url('investment-history')}}" 
                                role="tab" 
                                aria-controls="v-pills-zilliqua-btc-history" 
                                aria-selected="false">
                                    <i class="pe-7s-clock"></i> ROI Transaction History
                            </a>

                            
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-zilliqua-btc-tabContent">
                            <!-- history -->
                              <div class="tab-pane fade show active" id="v-pills-zilliqua-btc-history" role="tabpanel" aria-labelledby="v-pills-zilliqua-btc-history-tab">
                                  <div>
                                      <h4 class="text-white">
                                          <span class="">Your ROI History</span><br />
                                      </h4>
                                      <table class="table table-striped">
                                          <thead>
                                            <tr> 
                                                <th scope="col">Plan</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Plan Duration</th>
                                                <th scope="col">Date created</th>
                                            </tr> 
                                        </thead> 
                                        <tbody> 
                                        @foreach($investment as $investmenthistory)
                                                <tr>   
                                                       <td scope="col">{{$investmenthistory->plan_name}}</td>
                                                        <td scope="col">${{$investmenthistory->amount}}</td>
                                                        <td scope="col">{{$investmenthistory->plan_duration}}</td>
                                                        <td scope="col">{{$investmenthistory->created_at}}</td>
                                                    </tr>
                                         @endforeach
                                     
                                     </tbody> 

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