<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Admin Account';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="4">
              <label><x>*</x> Username:</label>
              <div class="fieldset">
                <input type="text" name="username" value="<?php echo $_POST['username']; ?>" required />
                <i class="fas fa-user-alt"></i> 
              </div>      
            </td>
          </tr>
        	<tr>
          	<td colspan="2">
              <label><x>*</x> Email Address:</label>
              <div class="fieldset">
                <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" />
                <i class="fas fa-envelope"></i>
              </div>
            </td>
          	<td colspan="2">
              <label>Phone Number:</label>
              <div class="fieldset">
                <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Ex. +234(0)" maxlength="25" />
                <i class="fas fa-phone-square-alt"></i> 
              </div>
            </td>
          </tr>
        	<tr>
          	<td colspan="3">
              <label>Notes:</label>
              <div class="fieldset">
                <input type="text" name="notes" value="<?php echo $_POST['notes']; ?>" placeholder="" />
              </div>
            </td>
          	<td colspan="1">
              <label><x>*</x> Access Rights:</label>
              <select name="STATUS" required>
                <option></option>
                <?php echo $ddl_status; ?>
              </select>
            </td>
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


