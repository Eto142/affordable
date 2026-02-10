<!-- ========================= -->
<!--  DEPOSIT NOTIFICATION (Bottom Left - Green) -->
<!-- ========================= -->

<style>
/* SAFE, CLEAN CSS — NO RESET THAT BREAKS LAYOUT */
.inv-box-a {
    position: fixed;
    bottom: 30px;
    left: 30px;
    z-index: 9999999;
    display: none;
    font-family: "Poppins", sans-serif;
}

.inv-box-a .inv-block {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px 20px;
    background: #0d0d0d;
    border: 1px solid #04d189;
    border-radius: 12px;
    width: 290px;
    color: white;
    box-shadow: 0 0 12px rgba(4, 209, 137, 0.35);
}

.inv-box-a .inv-title {
    font-size: 15px;
    font-weight: 700;
    color: #04d189;
}

.inv-box-a .inv-text {
    font-size: 13px;
    margin-top: 3px;
}
</style>

<div class="inv-box-a" id="inv-box-a">
    <div class="inv-block">
        <i class="fa fa-wallet" style="font-size:28px;color:#04d189;"></i>
        <div>
            <div class="inv-title">New Deposit</div>
            <div class="inv-text"></div>
        </div>
    </div>
</div>


<!-- ========================= -->
<!--  PROFIT NOTIFICATION (Top Right - Green Dark) -->
<!-- ========================= -->

<style>
.inv-box-b {
    position: fixed;
    top: 90px;
    right: 30px;
    z-index: 9999999;
    display: none;
    font-family: "Poppins", sans-serif;
}

.inv-box-b .inv-block {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 12px;
    background: #0a1f14;
    border: none;
    border-radius: 10px;
    width: 240px;
    max-width: 240px;
    color: white;
    box-shadow: none;
}

.inv-box-b .inv-title {
    font-size: 13px;
    font-weight: 700;
    color: #04d189;
}

.inv-box-b .inv-text {
    font-size: 12px;
    margin-top: 2px;
}
</style>

<div class="inv-box-b" id="inv-box-b">
    <div class="inv-block">
        <i class="fa fa-chart-line" style="font-size:22px;color:#04d189;"></i>
        <div>
            <div class="inv-title">Profit Earned</div>
            <div class="inv-text"></div>
        </div>
    </div>
</div>


<!-- ========== SCRIPTS ========== -->
<script>
const names = ["Michael","Daniel","Lucas","Samantha","Grace","Ethan","David","Sophia","James","Olivia","Liam","Emily","Ryan","Charlotte","William","Isabella","Benjamin","Mia","Alexander","Harper"];
const countries = ["USA","UK","Canada","Australia","Germany","France","Netherlands","Switzerland","Sweden","Norway","Denmark","New Zealand","Austria","Belgium","Ireland"];
const plans = ["Basic","Silver","Gold","Diamond"];

function pick(list){ return list[Math.floor(Math.random()*list.length)]; }
function money(min,max){ return (Math.random()*(max-min)+min).toFixed(2); }

function showDeposit(){
    let name = pick(names);
    let country = pick(countries);
    let amount = money(500, 25000);
    let plan = pick(plans);

    let msg = `${name} from ${country} deposited $${amount} into the ${plan} plan`;

    $("#inv-box-a .inv-text").html(msg);
    $("#inv-box-a").fadeIn(500);
    setTimeout(()=>$("#inv-box-a").fadeOut(500), 4500);
}

function showProfit(){
    let name = pick(names);
    let country = pick(countries);
    let amount = money(50, 8000);

    let msg = `${name} from ${country} earned a profit of $${amount}`;

    $("#inv-box-b .inv-text").html(msg);
    $("#inv-box-b").fadeIn(500);
    setTimeout(()=>$("#inv-box-b").fadeOut(500), 4500);
}

setInterval(showDeposit, 7000);
setInterval(showProfit, 9500);

// Show first ones after a brief delay
setTimeout(showDeposit, 2000);
setTimeout(showProfit, 5000);
</script>
