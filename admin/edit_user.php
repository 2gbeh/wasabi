<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Edit User';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="3">
              <label><x>*</x> Account Name :</label>
					    <input type="text" name="names" value="<?php echo $_POST['names']; ?>" placeholder="(surname first)" required />
            </td>
          	<td colspan="1">
              <label><x>*</x> BTC Address :</label>
              <input type="search" name="wal" value="<?php echo $_POST['wal']; ?>" placeholder="" maxlength="35" required />
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label><x>*</x> Email Address :</label>
					    <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" required  readonly />
            </td>
          	<td colspan="1">
              <label><x>*</x> Password :</label>
              <input type="text" name="password" id="password" value="<?php echo $_POST['password']; ?>" placeholder="" ondblclick="togglePassword()" required />
            </td>
          	<td colspan="2">&nbsp;</td>
          </tr>
          <tr><td colspan="4" hr>&nbsp;</td></tr>
        	<tr>
          	<td colspan="1">
              <label>Available Balance ($) :</label>
              <input type="number" min="0" name="bal" value="<?php echo null_f($_POST['bal'], 0); ?>" placeholder="" />
            </td>
          	<td colspan="1">
              <label>Profit Margin ($) :</label>
					    <input type="number" min="0" name="bonus" value="<?php echo null_f($_POST['bonus'], 0); ?>" placeholder="" />
            </td>
          	<td colspan="2">&nbsp;</td>
          </tr>
          <tr><td colspan="4" hr>&nbsp;</td></tr>
        	<tr>
          	<td colspan="1">
              <label>Signal Purchase ($) :</label>
              <input type="number" min="0" name="spx" value="<?php echo null_f($_POST['spx'], 0); ?>" placeholder="" />
            </td>
          	<td colspan="1">
              <label>Trading Interest ($) :</label>
					    <input type="number" min="0" name="tix" value="<?php echo null_f($_POST['tix'], 0); ?>" placeholder="" />
            </td>
          	<td colspan="1">
              <label>Trading Deposit ($) :</label>
              <input type="number" min="0" name="tdx" value="<?php echo null_f($_POST['tdx'], 0); ?>" placeholder="" />
            </td>
          	<td colspan="1">
              <label>Investment Deposit ($) :</label>
					    <input type="number" min="0" name="idx" value="<?php echo null_f($_POST['idx'], 0); ?>" placeholder="" />
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label>Automation Deposit ($) :</label>
              <input type="number" min="0" name="adx" value="<?php echo null_f($_POST['adx'], 0); ?>" placeholder="" />
            </td>
          	<td colspan="3">&nbsp;</td>
          </tr>
         </table>

        <div class="action">
          <input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>" readonly /> &nbsp;
          <button type="submit" class="pri">Update</button>
        </div>
      </fieldset>
    </form>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>

