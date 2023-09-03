<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Direct Deposits';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="1">
                <label>Account Name :</label>
					    <input type="text" name="names" value="<?php echo $_POST['names']; ?>" placeholder="(surname first)" required readonly />
            </td>
          	<td colspan="1">
              <label>Email Address :</label>
					    <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" required  readonly />
            </td>
           	<td colspan="2  ">
              <label>BTC Address :</label>
              <input type="search" name="wal" value="<?php echo $_POST['wal']; ?>" placeholder="" maxlength="35" required readonly />
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label>Available Balance ($) :</label>
              <input type="number" min="0" name="bal" value="<?php echo null_f($_POST['bal'], 0); ?>" placeholder="" required readonly />
            </td>
          	<td colspan="1">
              <label>Net Deposits ($) :</label>
					    <input type="number" min="0" name="gross_deposit_active" value="<?php echo null_f($_POST['gross_deposit_active'], 0); ?>" placeholder="" required readonly/>
            </td>
          	<td colspan="1">
              <label>Profit Margin ($) :</label>
					    <input type="number" min="0" name="bonus" value="<?php echo null_f($_POST['bonus'], 0); ?>" placeholder="" required readonly />
            </td>
          	<!-- <td colspan="1">
              <label>Total Earned (50%) :</label>
              <input type="number" min="0" name="gross_earned" value="<?php echo null_f($_POST['gross_earned'], 0); ?>" placeholder="" required readonly />
            </td> -->
          	<td colspan="1">&nbsp;</td>
          </tr>
          <tr><td colspan="4" hr>&nbsp;</td></tr>
        	<tr>
          	<td colspan="2">
              <label><x>*</x> Investment Plan :</label>
              <select name="plan" required>
                <option value='' selected disabled>--- available plans ---</option>
                <?php echo $ddl_plan; ?>
              </select>
            </td>
           	<td colspan="2">
              <label><x>*</x> Deposit Amount ($) :</label>
              <input type="number" min="0" name="amt" value="<?php echo null_f($_POST['amt'], 0); ?>" placeholder="" required />
            </td>
          </tr>
         </table>

        <div class="action">
          <input type="hidden" name="user_id" value="<?php echo $_POST['ID']; ?>" />
          <input type="hidden" name="type" value="CR" />
          <input type="hidden" name="why" value="DIRECT DEPOSIT" />
          <input type="hidden" name="STATUS" value="1" />

          <input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>" readonly /> &nbsp;
          <button type="submit" class="pri">Deposit</button>
        </div>
      </fieldset>
    </form>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>

