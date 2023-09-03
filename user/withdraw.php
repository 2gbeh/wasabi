<?php
    $ctx_title = 'Make Withdrawal';
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
                                            <h5 class="m-b-10">Withdraw</h5>
                                            <p class="text-muted m-b-10">Withdraw from your available wallet balance at any time</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="home.php"> <i class="fa fa-home"></i> Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="withdraw.php">Withdraw</a>
                                                </li>
                                                 <li class="breadcrumb-item">
                                                    <a href="pin/pin.php">Withdrawl Pin</a>
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

<div class="form-group">
    <label for="example-search-input" class="col-form-label">My Crypto Wallet Address</label>
    <input class="form-control" type="search" name="wal" value="<?php echo $_POST['wal'] ? $_POST['wal'] : $getUser['wal']; ?>" >
</div>

<div class="form-group">
    <label for="example-search-input" class="col-form-label">Withdrawal Amount ($)</label>
    <input class="form-control" type="number" min="0" max="<?php echo $getUser['bal']; ?>" name="amt" value="<?php echo $_POST['amt']; ?>" required>
</div>

<div class="form-group">
    <label for="example-search-input" class="col-form-label">Description (optional)</label>
    <input class="form-control" type="text" name="why" value="<?php echo $_POST['why']; ?>" placeholder="Ex. Medical bills">
</div>

<div class="form-group">
    <input type="hidden" name="type" value="DR" />
    <input type="hidden" name="user_id" value="<?php echo $ID; ?>" />
    <input type="hidden" name="wal" value="<?php echo $getUser['wal']; ?>" />
    <input type="hidden" name="STATUS" value="1" />
    <button type="submit" class="btn btn-primary mb-3">Confirm Withdrawal</button>
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