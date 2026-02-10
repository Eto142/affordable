{{-- <!-- ========================= -->
<!--  DEPOSIT NOTIFICATION (Bottom Left - Green) -->
<!-- ========================= -->

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
const names = ["Michael","Daniel","Lucas","Samantha","Grace","Ethan","David","Sophia","James","Olivia","Liam","Emily","Ryan","Charlotte","William","Isabella","Benjamin","Mia","Alexander","Harper","Matthew","Jessica","Andrew","Ashley","Joshua","Amanda","Christopher","Sarah","Nicholas","Stephanie","Brandon","Jennifer","Tyler","Lauren","Jacob","Hannah","Nathan","Rachel","Dylan","Megan","Connor","Abigail","Logan","Victoria","Mason","Natalie","Caleb","Elizabeth","Owen","Chloe","Jack","Ella","Henry","Lily","Thomas","Avery","Sebastian","Madison","Samuel","Scarlett","Robert","Eleanor","Patrick","Audrey","Jonathan","Claire","Cameron","Zoe","Hunter","Addison","Austin","Evelyn","Marcus","Savannah","Derek","Brooklyn","Trevor","Leah","Mitchell","Allison","Bradley","Catherine","Kyle","Margaret","Scott","Emma","Keith","Amelia","Brian","Nora","Steven","Julia","Craig","Paige","Shane","Heather","Brett","Jenna","Todd","Rebecca","Grant","Karen","Wyatt","Brooke"];
const countries = ["USA","UK","Canada","Australia","Germany","France","Netherlands","Switzerland","Sweden","Norway","Denmark","New Zealand","Austria","Belgium","Ireland","Japan","Singapore","South Korea","Finland","Luxembourg","Italy","Spain","Portugal","Iceland","Czech Republic","Poland","Israel","Estonia","Malta","Slovenia","Scotland","Wales","Monaco","Liechtenstein","Hong Kong","Taiwan","Qatar","UAE","Bahrain","Kuwait"];
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
</script> --}}
