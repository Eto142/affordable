<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Deposit Funds</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="SHORTCUT ICON" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png" />
  <style>
    .container { max-width: 500px; margin-top: 50px; 
	  background-color: #001; 
  border: 2px solid #00bfff; 
  border-radius: 10px; 
  padding: 20px; 
	}
    .wallet-address { font-weight: bold; color: green; }
    body { background-color: #001322; }
    #qrCode { margin: 10px auto; display: block; }
    .steps { color: white; margin: 20px 0; }
	.wallet-address {
    font-weight: bold;
    color: green;
    background-color: #f8f9fa;
	text-align: center;
}

  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center" style="color:white;">Deposit Funds</h2>
    <ul class="steps">
      <li>Minimum deposit is $50.</li>
      <li>Select your preferred payment gateway.</li>
      <li>Send the deposit to the provided wallet address.</li>
      <li>You will be automatically redirected to the dashboard once the payment is successfully processed.</li>
    </ul>

    <form id="depositForm" method="post">
      <div class="mb-3">
        <label style="color:white;" class="form-label">Select Payment Gateway :</label>
        <select name="wallet_type" id="walletSelect" class="form-control" required>
          <option value="">Payment Gateway</option>
          <option value="Bitcoin" selected>Bitcoin</option>
          <option value="USDC">USDC</option>
          <option value="USDT_ERC20">USDT (ERC20)</option>
          <option value="USDT_TRC20">USDT (TRC20)</option>
          <option value="USDT_BEP20">USDT (BEP20)</option>
          <option value="Ethereum">Ethereum</option>
          <option value="Solana">Solana</option>
          <option value="Ton">TON</option>
          <option value="BNB">Binance coin (BNB)</option>
          <option value="DOGE">Dogecoin (DOGE)</option>
          <option value="LTC">Litecoin (LTC)</option>
          <option value="TRX">Tron (TRX)</option>
          <option value="POLYGON">Polygon (MATIC)</option>
        </select>
      </div>
      <div class="info-card" id="content"></div>
    </form>
  </div>

  <br /><br />
  <center>
    <button onclick="cancel()" type="submit" class="btn btn-danger">Back to Dashboard</button>
  </center>

<script>
  const selectElement = document.getElementById('walletSelect');
  const contentDiv = document.getElementById('content');

  async function fetchWalletAddress(network, currency) {
    try {
      const response = await fetch('https://api.oxapay.com/v1/payment/static-address', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'merchant_api_key': 'CGUTSC-E8BRIK-X1NGUE-ELQNE7'
        },
        body: JSON.stringify({
          network: network,
          currency: currency,
          callback_url: 'https://yourdomain.com/callback'
        })
      });

      const data = await response.json();
      return data.data.address;
    } catch (error) {
      console.error('Error fetching wallet address:', error);
      return null;
    }
  }

  async function updateContent(selectedValue) {
    contentDiv.style.display = "block";

    let network = '';
    let currency = '';

    switch (selectedValue) {
      case 'Bitcoin':
        network = 'Bitcoin';
        currency = 'BTC';
        break;
      case 'Ethereum':
        network = 'Ethereum';
        currency = 'ETH';
        break;
      case 'Solana':
        network = 'Solana';
        currency = 'SOL';
        break;
      case 'Ton':
        network = 'Ton';
        currency = 'TON';
        break;
      case 'TRX':
        network = 'Tron';
        currency = 'TRX';
        break;
      case 'BNB':
        network = 'Binance';
        currency = 'BNB';
        break;
      case 'DOGE':
        network = 'Doge';
        currency = 'DOGE';
        break;
      case 'LTC':
        network = 'Litecoin';
        currency = 'LTC';
        break;
      case 'POLYGON':
        network = 'POLYGON';
        currency = 'POLYGON';
        break;
      case 'USDC':
        network = 'Ethereum';
        currency = 'USDC';
        break;
      case 'USDT_ERC20':
        network = 'Ethereum';
        currency = 'USDT';
        break;
      case 'USDT_BEP20':
        network = 'Binance';
        currency = 'USDT';
        break;
      case 'USDT_TRC20':
        network = 'Tron';
        currency = 'USDT';
        break;
      default:
        contentDiv.style.display = "none";
        return;
    }

    const walletAddress = await fetchWalletAddress(network, currency);

    if (walletAddress) {
      const qrCodeUrl = `https://api.qrserver.com/v1/create-qr-code/?data=${walletAddress}`;
contentDiv.innerHTML = `
  <div class="mb-3">
    <label style="color:white;" class="form-label">Please make deposit into this ${selectedValue} Wallet Address:</label><br>
    <label style="text-align:center;color:white;" class="form-label">Scan the QR code or copy the address to proceed with your payment:</label>
    <center>
      <img src="${qrCodeUrl}" alt="QR Code" style="max-width: 200px; margin-bottom: 10px;"><br>
      <textarea id="walletAddress" class="form-control wallet-address" rows="2" readonly style="resize: none; max-width: 400px; margin-bottom: 10px;">${walletAddress}</textarea>
      <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="copyToClipboard('${walletAddress}')">Copy Address</button>
    </center>
  </div>
`;
    } else {
      contentDiv.innerHTML = `<p style="color:red;">Failed to load wallet address. Please try again later.</p>`;
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const selectedValue = selectElement.value || 'Bitcoin';
    updateContent(selectedValue);
  });

  selectElement.addEventListener('change', function () {
    updateContent(this.value);
  });

  function copyToClipboard(walletAddress) {
    navigator.clipboard.writeText(walletAddress).then(() => {
      alert("Address copied to clipboard!");
    }).catch(err => {
      console.error("Could not copy text: ", err);
    });
  }

  function cancel() {
    window.history.go(-1);
  }
</script>

</body>
</html>