@include('dashboard.header')

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-dark text-white shadow-lg" style="border: 1px solid #04d189; border-radius: 12px;">
                <div class="card-body p-4">

                    <h4 class="text-center mb-2" style="color: #04d189;">
                        <i class="fa fa-arrow-circle-down"></i> Make a Deposit
                    </h4>
                    <p class="text-center text-muted mb-4">Fund your trading account securely</p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Balance Card -->
                    <div class="text-center mb-4 p-3" style="background: rgba(4,209,137,0.08); border-radius: 10px; border: 1px solid rgba(4,209,137,0.2);">
                        <small class="text-muted">Available Balance</small>
                        <h3 style="color: #04d189;">{{ Auth::user()->currency }}{{ number_format($user_balance, 2) }}</h3>
                    </div>

                    <!-- Deposit Form -->
                    <form method="POST" action="{{ url('/get-deposit') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" style="color: #ccc;">Deposit Amount (USD)</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background: #1a1a2e; border-color: #04d189; color: #04d189;">$</span>
                                <input type="number" name="amount" class="form-control" 
                                       placeholder="Enter amount" min="50" step="0.01" required
                                       style="background: #1a1a2e; border-color: #333; color: white;">
                            </div>
                            <small class="text-muted">Minimum deposit: $50.00</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" style="color: #ccc;">Payment Method</label>
                            <select name="item" class="form-control" required
                                    style="background: #1a1a2e; border-color: #333; color: white;">
                                <option value="">Select Payment Method</option>
                                <option value="Bitcoin">Bitcoin (BTC)</option>
                                <option value="Ethereum">Ethereum (ETH)</option>
                                <option value="Usdt">USDT (Tether)</option>
                                <option value="Bank">Bank Transfer</option>
                            </select>
                        </div>

                        <button type="submit" class="btn w-100 py-2" 
                                style="background: #04d189; color: #000; font-weight: 700; border-radius: 8px; font-size: 16px;">
                            <i class="fa fa-arrow-right"></i> Proceed to Payment
                        </button>
                    </form>

                    <!-- Quick Amount Buttons -->
                    <div class="mt-3 text-center">
                        <small class="text-muted d-block mb-2">Quick select:</small>
                        <button type="button" class="btn btn-sm btn-outline-light quick-amt mx-1" data-amount="100">$100</button>
                        <button type="button" class="btn btn-sm btn-outline-light quick-amt mx-1" data-amount="500">$500</button>
                        <button type="button" class="btn btn-sm btn-outline-light quick-amt mx-1" data-amount="1000">$1,000</button>
                        <button type="button" class="btn btn-sm btn-outline-light quick-amt mx-1" data-amount="5000">$5,000</button>
                        <button type="button" class="btn btn-sm btn-outline-light quick-amt mx-1" data-amount="10000">$10,000</button>
                    </div>

                </div>
            </div>

            <!-- Info Cards -->
            <div class="row mt-4 mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white text-center p-3" style="border: 1px solid #333; border-radius: 10px;">
                        <i class="fa fa-shield fa-2x mb-2" style="color: #04d189;"></i>
                        <small>Secure & Encrypted</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white text-center p-3" style="border: 1px solid #333; border-radius: 10px;">
                        <i class="fa fa-bolt fa-2x mb-2" style="color: #04d189;"></i>
                        <small>Instant Processing</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white text-center p-3" style="border: 1px solid #333; border-radius: 10px;">
                        <i class="fa fa-headphones fa-2x mb-2" style="color: #04d189;"></i>
                        <small>24/7 Support</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.querySelectorAll('.quick-amt').forEach(function(btn) {
    btn.addEventListener('click', function() {
        document.querySelector('input[name="amount"]').value = this.dataset.amount;
    });
});
</script>

@include('dashboard.footer')