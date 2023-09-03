<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Direct Deposits';include_once 'inc/nav.inc.php';?>

    <table class="tmp-table" border="0">
      <tr>
        <th width="1"></th>
        <th ar>#</th>
        <th nw>Account Info</th>
        <th nw>Avail. Balance ($)</th>
        <th nw>Net Deposits ($)</th>
        <th nw><a title="Referral Bonus">Profit Margin ($)</a></th>
        <!-- <th nw><a title="50% on Net Deposit">Total Earned (50%)</a></th> -->
        <th>Date Updated</th>
      </tr>

			<tbody>
      	<?php echo $rows; ?>
      </tbody>
    </table>
		<p></p>

		<?php echo $pager->nav; ?>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>