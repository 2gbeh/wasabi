<?php
$ctx_title = 'Copy Trading';
require_once 'src/inc_top.php';
include_once 'src/css_copy_trading.php';
?>

<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

<?php $nav_icon = 'fa fa-hand-holding-heart'; include_once 'src/inc_nav.php';?>
<?php include_once 'src/inc_ledger.php';?>
<?php include_once 'src/inc_modal.php';?>

<div class="copy-trading">
  <ul>
    <?=$tbody?>
    <!-- <li>
      <table border="1">
        <thead>
          <tr>
            <td>
                <div class="avatar" title="TRON" style="background-image:url('../img/coins/btc.png')"></div>
            </td>
            <td>
              <div class="username">Tony168</div>
              <div class="platform">BingX Standard Futures</div>
            </td>
            <th>
              <a href="#!">Copy</a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3">
              <img class="chart" src="../img/charts/0.png" alt="" />
            </td>
          </tr>
          <tr>
            <td>
                <div class="roi" style="color:green;">+765.50%</div>
                <div class="subtitle">30D ROI</di>
            </td>
            <td>
              <div class="copies">19,709</div>
              <div class="subtitle">Copies</di>
            </td>
            <td>
              <div class="risk" style="background-color:gold;">5</div>
              <div class="subtitle">Risk</di>
            </td>
          </tr>
        </tbody>
      </table>
    </li> -->
  </ul>
</div>
<p></p>
<?php include_once 'src/inc_pager.php';?>


                                  <!-- /.page-body -->
                                    </div>
                                  <!-- /.page-wrapper -->
                                </div>
                                <!-- ./main-body -->
                            </div>
                          <!-- ./pcoded-inner-content -->
                        </div>
<style>
.usermenu {
	margin-bottom:0;
	}
</style>
<!-- ./pcoded-content -->
</div>

<?php include_once 'src/inc_end.php';?>