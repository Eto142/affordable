<footer>
		
</footer>
<script src="https://s3.tradingview.com/tv.js"></script>
<script src="./assets/js/bundle.js"></script>
<link rel="stylesheet" type="text/css" href="../js/cute-alert-master/style.css">
    <script type="text/javascript" src="../js/cute-alert-master/cute-alert.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $(".sub").click(function() {
                placeTrade();
            });
            $(".sub2").click(function() {
                placeTrade();
            });

            function placeTrade(){
                cuteAlert({
                  type: "warning",
                  title: "Warning !!",
                  message: "We strongly advice that you contact your account manager for live trading support to avoid losing capital",
                  buttonText: "Okay"
                })
            }
        });
    </script>

<script src="https://s3.tradingview.com/tv.js"></script>
<script type="application/javascript"src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/130527/qrcode.js?v=1200"></script>
<script type="application/javascript" href="https://code.jquery.com/jquery-2.2.4.min.js"></script>
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
     
</body>
</html>