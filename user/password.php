<?php
    $ctx_title = 'Change Password';
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
                                            <h5 class="m-b-10">Account Settings</h5>
                                            <p class="text-muted m-b-10"></p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="home.php"> <i class="fa fa-home"></i> Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="profile.php">Update Profile</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="password.php">Update Password</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Page-header end-->


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-lg-6">



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

<div class="card">
                            <div class="card-body">
<?php ctx_err($error, $errno);?>
<form class="uk-grid uk-form" name="editform" <?php echo $ctx_form_attrib; ?>>

<div class="form-group">
    <label for="example-text-input" class="col-form-label">Current Password</label>
    <input class="form-control" type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" ondblclick="togglePassword()" required>
</div>

<div class="form-group">
    <label for="example-datetime-local-input" class="col-form-label">New Password</label>
    <input class="form-control" type="search" name="new_password" value="<?php echo $_POST['new_password']; ?>"  required>
</div>

<div class="form-group">
    <label for="example-datetime-local-input" class="col-form-label">Confirm Password</label>
    <input class="form-control" type="search" name="cfm_password" value="<?php echo $_POST['cfm_password']; ?>" required>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary mb-3">Save &amp; logout</button>
</div>

                                </form>

                                </div>
                            </div>
                        </div>


</div></div>

<?php include_once 'src/inc_end.php';?>