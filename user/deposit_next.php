<?php
    $ctx_title = 'Make Deposit';
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
                                                <li class="breadcrumb-item" id="pay-target">
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
                                           <div class="col-lg-9 col-md-9">
                                                <div class="card">
                                                    <div class="card-block">                            
<?php ctx_err($error, $errno);?>
<form class="uk-grid uk-form" name="editform" <?php echo $ctx_form_attrib; ?>>

<style type="text/css">
.coin-scan {
    text-align: center;
    margin: 0;
}
.coin-scan img {
    width: 160px;
    display: inline-block;
    cursor: help;
}
.coin-notice {
    text-align:center; 
    text-transform: uppercase;
    font-size: 16px;
}
.coin-notice b {
    text-transform: lowercase;
}
.coin-target {
    padding: 10px 5px;
    margin-bottom: 10px;
    color: #1b4370;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    white-space: normal;
    border: dotted 2px  #4099ff;
    letter-spacing:1px;
}
@media only screen and (max-width: 480px) {
.coin-notice {
    font-size: 14px;
}
.coin-notice b {
    font-size: 16px;
}
}
</style>
<p class="coin-notice">
    Kindly make payment to the Wallet Address stated below, and forward Payment Receipts to 
    <b><?php echo $ctx_support; ?></b>
</p>
<p class="coin-scan">
    <img src="https://intcmovement.com/wp-content/uploads/2023/02/btc.png" alt="" title="Wallet Address" />
</p>
<p class="coin-target mt-4">
    BTC:- <?php echo  $ctx_wallet; ?>
    
    <p class="coin-scan">
    <img src="https://intcmovement.com/wp-content/uploads/2023/02/usd.png" alt="" title="Wallet Address" />
</p>
</p>
<p class="coin-target mt-4">
   USDT:- 0xD1bC9c941B7435e6134EF4bacC62498c1Dc93196
    </p>
    
<p class="coin-scan">
    <img src="https://intcmovement.com/wp-content/uploads/2023/02/XRP.png" alt="" title="Wallet Address" />
</p>
<p class="coin-target mt-4">
   XRP:-  0x8a81b895e6a83a72c15eaea06c278af986ede989
    </p>
    
    <p class="coin-scan">
    <img src="https://intcmovement.com/wp-content/uploads/2023/02/eth.png" alt="" title="Wallet Address" />
</p>
<p class="coin-target mt-4">
   ETH:-  0xD1bC9c941B7435e6134EF4bacC62498c1Dc93196
    </p>

<!-- <div class="form-group">
    <label for="example-search-input" class="col-form-label">Crypto Address</label>
    <input class="form-control" type="search" name="wal" value="<?php echo $_POST['wal']? $_POST['wal']: $getUser['wal']; ?>" >
</div> -->

<div class="form-group">
    <label for="example-text-input" class="col-form-label">Select Investment</label>
    <select name="plan"  class=form-control required>
        <option value='' selected disabled>--- available plans ---</option>
        <?php echo $ddl_plan; ?>
    </select>
</div>

<div class="form-group">
    <label for="example-search-input" class="col-form-label">Deposit Amount ($)</label>
    <input class="form-control" type="number" min="0" max="" name="amt" value="<?php echo $_POST['amt']; ?>" required>
</div>

<div class="form-group">
    <input type="hidden" name="type" value="CR" />
    <input type="hidden" name="user_id" value="<?php echo $ID; ?>" />
    <input type="hidden" name="wal" value="<?php echo $getUser['wal']; ?>" />
    <button type="submit" class="btn btn-primary mb-3">Confirm Deposit</button>
</div>

                                </form>

                                </div>
                            </div>
                        </div>
                        
<div class="col-lg-3 col-md-3" style="min-width:310px;">
    <div class="card">
        <div class="card-header">
            <h4 class="text-primary">Available Balance</h4>
        </div>
        <div class="card-body">
            <p class="text">Please note that you cannot withdraw above your current available balance.</p>
            <p class="text-dark">All transactions are approved or declined within the validity period of 48hrs.</p>
            <div class="form-group row">
                <div class="col-lg-12">
                    <input type="url" readonly  class="form-control" value="$ <?php echo $getUser['bal_buf']; ?>.00">
                </div>
            </div>
        </div>
    </div>
</div>                                                 



</div></div>

<?php include_once 'src/inc_end.php';?>