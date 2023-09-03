<?php
    $ctx_title = 'Payment Method';
    require_once 'src/inc_top.php';
?>

<style>

table.tab {    font-size: 14px;
    color: #000;
    width: 100%;
    border-width: 1px;
    border-color: #DA0014;
    border-collapse: collapse;
    /* font-weight: 600; */
    font-family: sans-serif;
    letter-spacing: 1px;}
table.tab th {
font-size: 14px;
    background-color: #1B4370;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #1B4370;
    text-align: center;
    color: #fff;
    font-family: sans-serif;
    letter-spacing: 0px;
}
table.tab tr {}
table.tab td {    font-size: 14px;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #BFB4AF;
    background-color: rgba(37, 49, 55, 0.1);}


table.blank {font-size: 14px;
    color: #000;
    width: 100%;
    border-width: 1px;
    border-color: #DA0014;
    border-collapse: collapse;
    /* font-weight: 600; */
    font-family: sans-serif;
    letter-spacing:.5px;}
table.blank th {font-size:14px;background-color:#abd28e;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
table.blank tr {}
table.blank td {font-size:14px;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;}


</style>

<div class="pcoded-content">
                        <div class="pcoded-inner-content"><div class="main-body">
                                <div class="page-wrapper">

									<!--Page-header start-->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Deposit</h5>
                                            <p class="text-muted m-b-10">Deposit into any of our available investment plans and earn substantial profits daily</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="home.php"> <i class="fa fa-home"></i> Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="deposit.php">Deposit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Page-header end-->


                                    <div class="page-body">
                                        <div class="row">

<script language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) {
    Char = sText.charAt(i);
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
}

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }


  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }




  return true;
}
</script>

                                           <div class="col-lg-12 col-md-12">
                                                <div class="card">
                                                    <div class="card-block">

<style type="text/css">
ul.coin-mash li {
    box-shadow: 0 1px 2px #ddd;
    margin: 10px;
    padding: 10px 10px 20px 10px;
    text-align:center;
    min-width: 150px;
    max-width: 150px;
    min-height: 200px;
    max-height: 200px;
    display: inline-block;
    vertical-align: top;
}
ul.coin-mash li b {
    margin-bottom: 20px;
    display: block;
}    
ul.coin-mash li img {
    width: 80px;
}  
ul.coin-mash li a {
    background-color: #1b4370;
    color: #fff;
    border-radius: 5px;
    margin-top: 20px;
    padding: 8px 24px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight:bold;
    display: inline-block;
}    
ul.coin-mash li a:hover {
    background-color: #4099ff;
}
@media only screen and (max-width: 480px) {
    ul.coin-mash li {
        min-width: 100%;
        max-width: 100%;
    }
}
</style>
<ul class="coin-mash">
    <li>
        <b class="text-primary">BITCOIN</b>
        <img src="../img/fab_btc.png" alt="" /><p><a href="deposit_next.php#pay-target">Pay Now</a></p>
    </li>
    <li>
        <b class="text-primary">ETHEREUM</b>
        <img src="../img/fab_eth.png" style="width:50px;" alt="" /><p><a href="deposit_next.php#pay-target">Pay Now</a></p>
    </li>    
    <li>
        <b class="text-primary">USDT</b>
        <img src="../img/usdt.png" alt="" /><p><a href="deposit_next.php#pay-target">Pay Now</a></p>
    </li>
              
    <li>
        <b class="text-primary">XRP</b>
        <img src="../img/xrp.png" style="width:70px;" alt="" /><p><a href="deposit_next.php#pay-target">Pay Now</a></p>
    </li>    
                
</ul>
                                </div>
                            </div>
                        </div>                                   

</div></div>

<?php include_once 'src/inc_end.php';?>