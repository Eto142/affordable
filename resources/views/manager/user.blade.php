@include('manager.header')
@include('manager.navbar')
<!-- Content wrapper start -->
<!-- Content wrapper start -->
<div class="content-wrapper">
    <!-- Main user profile section -->
    <div class="row gx-3">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{$userProfile->name}}</h5>
                    <a href="#" class="btn btn-sm btn-light edit-contact-card" data-bs-toggle="modal" data-bs-target="#editContact">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-3 text-muted">Personal Information</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Email:</span>
                                        <span>{{$userProfile->email}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Phone:</span>
                                        <span>{{$userProfile->phone}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Country:</span>
                                        <span>{{$userProfile->country}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">State:</span>
                                        <span>{{$userProfile->state}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Address:</span>
                                        <span>{{$userProfile->address}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Date of Birth:</span>
                                        <span>{{$userProfile->dob}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Postal Code:</span>
                                        <span>{{$userProfile->pcode}}</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <div>
                                <h6 class="card-subtitle mb-3 text-muted">Financial Summary</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Total Balance:</span>
                                        <span class="text-success">{{$userProfile->currency}}{{$user_balance}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Total Profit:</span>
                                        <span class="text-success">{{$userProfile->currency}}{{$totalProfit}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Total Deposit:</span>
                                        <span class="text-info">{{$userProfile->currency}}{{$totalDeposit}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Total Withdrawals:</span>
                                        <span class="text-warning">{{$userProfile->currency}}{{$totalWithdrawal}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="fw-bold">Total Bonus:</span>
                                        <span class="text-primary">{{$userProfile->currency}}{{$totalBonus}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="col-lg-8 col-md-6 col-12">
            <div class="row">
                <!-- Deposit Actions -->
                <div class="col-md-6 col-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Deposit Actions</h6>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                <i class="bi bi-plus-circle"></i> Add Deposit
                            </button>
                            
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter5">
                                <i class="bi bi-activity"></i> Update Signal Strength
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Bonus & Profit Actions -->
                <div class="col-md-6 col-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Bonus & Profit</h6>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">
                                <i class="bi bi-gift"></i> Add  Bonus
                            </button>
                            
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter3">
                                    <i class="bi bi-graph-up"></i> Top Up Profit
                                </button>
                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModalCenter4">
                                    <i class="bi bi-graph-down"></i> Debit Profit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notification Actions -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-header bg-purple text-white">
                            <h6 class="mb-0">User Notification</h6>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter6">
                                <i class="bi bi-bell"></i> Update Notification
                            </button>
                            <div class="mt-2">
                                <small class="text-muted">Current Notification:</small>
                                <p class="mb-0">{{$userProfile->update_notification ?: 'No notification set'}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaction History Sections -->
    <div class="row gx-3">
        <!-- Deposit History -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Deposit History</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Method</th>
                                    <th>Amount</th>
                                    <th>Transaction ID</th>
                                    <th>Proof</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposit as $deposit)
                                <tr>
                                    <td>{{$deposit->payment_method}}</td>
                                    <td>${{number_format($deposit->amount, 2)}}</td>
                                    <td>{{$deposit->wallet_id}}</td>
                                    <td>
                                        <img src="{{asset('uploads/deposits/'.$deposit->image)}}" class="img-thumbnail" width="60">
                                    </td>
                                    <td>
                                        @if ($deposit->status == '1')
                                        <span class="badge bg-success">Completed</span>
                                        @elseif($deposit->status == '0')
                                        <span class="badge bg-warning">Pending</span>
                                        @elseif($deposit->status == '2')
                                        <span class="badge bg-danger">Declined</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('M j, Y g:i A') }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <form action="{{url('approve-deposit/'.$deposit->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$deposit->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$deposit->payment_method}}">
                                                <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                            </form>
                                            <form action="{{url('decline-deposit/'.$deposit->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="status" value="2">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$deposit->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$deposit->payment_method}}">
                                                <button type="submit" class="btn btn-sm btn-danger">Decline</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Withdrawal History -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Withdrawal History</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Amount</th>
                                    <th>Wallet Address</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($withdrawal as $withdrawal)
                                <tr>
                                    <td>{{$withdrawal->transaction_id}}</td>
                                    <td>${{number_format($withdrawal->amount, 2)}}</td>
                                    <td>{{$withdrawal->wallet_address}} ({{$withdrawal->crypto_type}})</td>
                                    <td>
                                        @if ($withdrawal->status == '1')
                                        <span class="badge bg-success">Completed</span>
                                        @elseif($withdrawal->status == '0')
                                        <span class="badge bg-warning">Pending</span>
                                        @elseif($withdrawal->status == '2')
                                        <span class="badge bg-danger">Declined</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($withdrawal->created_at)->format('M j, Y g:i A') }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <form action="{{url('approve-withdrawal/'.$withdrawal->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$withdrawal->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$withdrawal->withdrawal_method}}">
                                                <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                            </form>
                                            <form action="{{url('decline-withdrawal/'.$withdrawal->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="status" value="2">
                                                <input type="hidden" name="user_id" value="{{$userProfile->id}}">
                                                <input type="hidden" name="email" value="{{$userProfile->email}}">
                                                <input type="hidden" name="amount" value="{{$withdrawal->amount}}">
                                                <input type="hidden" name="payment_method" value="{{$withdrawal->withdrawal_method}}">
                                                <button type="submit" class="btn btn-sm btn-danger">Decline</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- KYC Verification -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">KYC Verification</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6>ID Card Front</h6>
                            <img src="{{asset('uploads/kyc/'.$userProfile->id_card)}}" class="img-fluid rounded border" alt="ID Front">
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6>ID Card Back</h6>
                            <img src="{{asset('uploads/kyc/'.$userProfile->passport)}}" class="img-fluid rounded border" alt="ID Back">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Status:</strong>
                                @if($userProfile->kyc_status=='0')
                                <span class="badge bg-warning">Pending</span>
                                @elseif($userProfile->kyc_status=='1')
                                <span class="badge bg-success">Approved</span>
                                @elseif($userProfile->kyc_status=='2')
                                <span class="badge bg-danger">Declined</span>
                                @endif
                            </div>
                            <div class="btn-group">
                                <form action="{{url('accept-kyc/'.$userProfile->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="1">
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                                <form action="{{url('decline-kyc/'.$userProfile->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="2">
                                    <button type="submit" class="btn btn-danger">Decline</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earning History -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Earning History</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Transaction</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($earning as $earning)
                                <tr>
                                    <td>{{$earning->transaction_id}}</td>
                                    <td>${{number_format($earning->amount, 2, '.', ',')}}</td>
                                    <td>{{$earning->description}}</td>
                                    <td>{{ \Carbon\Carbon::parse($earning->created_at)->format('M j, Y g:i A') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- All Modals -->
<!-- Add Deposit Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add User Deposit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/add-deposit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="hidden" name="email" value="{{$userProfile->email}}" />
                        <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                        <input type="number" step="0.0000000001" name="amount" class="form-control" placeholder="Enter Amount" />
                    </div>
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="payment_method" value="Bitcoin">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deposit Date</label>
                        <input type="date" name="deposit_date" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Transaction Id</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Deposit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Referral Bonus Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add {{$userProfile->name}} Bonus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/add-referral')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="email" value="{{$userProfile->email}}" />
                    <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="number" step="0.0000000001" name="amount" class="form-control" placeholder="Enter Amount" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Add Bonus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Top Up Profit Modal -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Top Up {{$userProfile->name}} Profit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/add-profit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="email" value="{{$userProfile->email}}" />
                    <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="number" step="0.0000000001" name="amount" class="form-control" placeholder="Enter Amount" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Top Up Profit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Debit Profit Modal -->
<div class="modal fade" id="exampleModalCenter4" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Debit {{$userProfile->name}} Total Profit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/debit-profit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="email" value="{{$userProfile->email}}" />
                    <input type="hidden" name="user_id" value="{{$userProfile->id}}" />
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="number" step="0.0000000001" name="amount" class="form-control" placeholder="Enter Amount" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Debit Profit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Signal Strength Modal -->
<div class="modal fade" id="exampleModalCenter5" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update {{$userProfile->name}} Signal Strength</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('signal.strength',$userProfile->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Signal Strength (1-100)</label>
                        <input type="number" step="0.0000000001" name="signal_strength" class="form-control" 
                               value="{{$userProfile->signal_strength}}" min="1" max="100" placeholder="E.g 40" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Notification Modal -->
<div class="modal fade" id="exampleModalCenter6" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update {{$userProfile->name}} Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('update.notification',$userProfile->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Notification Message</label>
                        <textarea name="update_notification" class="form-control" rows="5">{{$userProfile->update_notification}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>



		@include('manager.footer')