@include('dashboard.header')

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-dark text-white shadow-lg" style="border: 1px solid #04d189; border-radius: 12px;">
                <div class="card-body p-4">

                    <h4 class="text-center mb-2" style="color: #04d189;">
                        <i class="fa fa-wallet"></i> {{ $item }} Payment
                    </h4>
                    <p class="text-center text-muted mb-4">
                        Send exactly <strong style="color: #04d189;">{{ Auth::user()->currency }}{{ number_format($amount, 2) }}</strong> 
                        worth of {{ $item }} to the address below
                    </p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Wallet Address & QR Code -->
                    <div class="text-center mb-4 p-4" style="background: rgba(4,209,137,0.06); border-radius: 10px; border: 1px solid rgba(4,209,137,0.2);">
                        
                        <p style="color: #04d189; font-weight: 600; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">
                            <i class="fa fa-qrcode"></i> Scan QR Code or Copy Address
                        </p>

                        @if($item == 'Bitcoin')
                            @foreach($payment as $payments)
                                <center>
                                    <img src="{{ asset('manager/uploads/manager/' . $payments->btcImage) }}" 
                                         alt="Bitcoin QR" style="max-width: 180px; border-radius: 8px; margin-bottom: 15px;">
                                </center>
                                <div class="input-group mb-2">
                                    <input type="text" id="walletAddr" class="form-control" 
                                           value="{{ $payments->btc_address }}" readonly
                                           style="background: #1a1a2e; border-color: #333; color: #04d189; font-size: 13px;">
                                    <button class="btn" type="button" onclick="copyAddress()" 
                                            style="background: #04d189; color: #000; font-weight: 600;">
                                        <i class="fa fa-copy"></i> Copy
                                    </button>
                                </div>
                            @endforeach

                        @elseif($item == 'Usdt')
                            @foreach($payment as $payments)
                                <center>
                                    <img src="{{ asset('manager/uploads/manager/' . $payments->usdtImage) }}" 
                                         alt="USDT QR" style="max-width: 180px; border-radius: 8px; margin-bottom: 15px;">
                                </center>
                                <div class="input-group mb-2">
                                    <input type="text" id="walletAddr" class="form-control" 
                                           value="{{ $payments->usdt_address }}" readonly
                                           style="background: #1a1a2e; border-color: #333; color: #04d189; font-size: 13px;">
                                    <button class="btn" type="button" onclick="copyAddress()" 
                                            style="background: #04d189; color: #000; font-weight: 600;">
                                        <i class="fa fa-copy"></i> Copy
                                    </button>
                                </div>
                            @endforeach

                        @elseif($item == 'Ethereum')
                            @foreach($payment as $payments)
                                <center>
                                    <img src="{{ asset('manager/uploads/manager/' . $payments->ethImage) }}" 
                                         alt="Ethereum QR" style="max-width: 180px; border-radius: 8px; margin-bottom: 15px;">
                                </center>
                                <div class="input-group mb-2">
                                    <input type="text" id="walletAddr" class="form-control" 
                                           value="{{ $payments->eth_address }}" readonly
                                           style="background: #1a1a2e; border-color: #333; color: #04d189; font-size: 13px;">
                                    <button class="btn" type="button" onclick="copyAddress()" 
                                            style="background: #04d189; color: #000; font-weight: 600;">
                                        <i class="fa fa-copy"></i> Copy
                                    </button>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Payment Amount Summary -->
                    <div class="mb-4 p-3 text-center" style="background: rgba(255,255,255,0.03); border-radius: 8px; border: 1px solid #333;">
                        <small class="text-muted">Deposit Amount</small>
                        <h3 style="color: white;">{{ Auth::user()->currency }}{{ number_format($amount, 2) }}</h3>
                        <span class="badge" style="background: rgba(4,209,137,0.15); color: #04d189;">{{ $item }}</span>
                    </div>

                    <!-- Steps -->
                    <div class="mb-4" style="font-size: 13px; color: #aaa;">
                        <p class="mb-1"><i class="fa fa-check-circle" style="color: #04d189;"></i> Send the exact amount to the wallet address above.</p>
                        <p class="mb-1"><i class="fa fa-check-circle" style="color: #04d189;"></i> Take a screenshot of the completed payment.</p>
                        <p class="mb-1"><i class="fa fa-check-circle" style="color: #04d189;"></i> Upload the proof below to confirm your deposit.</p>
                    </div>

                    <hr style="border-color: #333;">

                    <!-- Upload Proof Form -->
                    <h6 class="mb-3" style="color: #04d189;">
                        <i class="fa fa-upload"></i> Upload Payment Proof
                    </h6>

                    <form method="POST" action="{{ url('/make-deposit') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        <input type="hidden" name="paymethd_method" value="{{ $item }}">

                        <div class="mb-3">
                            <label class="form-label" style="color: #ccc;">Payment Screenshot</label>
                            <input type="file" name="image" class="form-control" required accept="image/*"
                                   style="background: #1a1a2e; border-color: #333; color: white;">
                            <small class="text-muted">Accepted: JPG, PNG, JPEG (Max 5MB)</small>
                        </div>

                        <button type="submit" class="btn w-100 py-2" 
                                style="background: #04d189; color: #000; font-weight: 700; border-radius: 8px; font-size: 16px;">
                            <i class="fa fa-check-circle"></i> Confirm Payment
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ url('deposit') }}" class="text-muted" style="font-size: 13px;">
                            <i class="fa fa-arrow-left"></i> Back to Deposit
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<br>

<script>
function copyAddress() {
    var addr = document.getElementById('walletAddr');
    addr.select();
    addr.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(addr.value);
    alert('Wallet address copied!');
}
</script>

@include('dashboard.footer')