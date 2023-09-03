<?php
    $ctx_title = 'Withdrawal History';
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
                                            <h5 class="m-b-10">Withdrawal History</h5>
                                            <p class="text-muted m-b-10">View all deposits (CR) and withdrawals (DR) for your trading account</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="home.php"> <i class="fa fa-home"></i> Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="history_cr.php">Deposits</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="history_dr.php">Withdrawals</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Page-header end-->


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-lg-12">

<style>
input[type="radio"]{
    -webkit-appearance: radio;
}
</style>

<div class="cab-page depositpage">
<div class="wfix">


<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");



  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }



}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--></script>

<table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
<tr>
 <!-- <td colspan=7 align="center"><b>Showing rows 0 - 18 (19 total, Query took 0.0006 seconds.)</b></td> -->
 <td colspan=7 align="center"><b><?php echo $caption_dr; ?></b></td>
</tr>
<tr>
 <th class=inheader><nobr>Transaction ID</nobr></th>
 <th class=inheader>Amount ($)</th> 
  <th class=inheader><nobr>Summary</nobr></th> 
 <th class=inheader>Date</th> 
 <th class=inheader>Time</th>   
 <th class=inheader><nobr>Status</nobr></th>
</tr>
<tbody>
  <?php echo $tbody_dr; ?>
</tbody>
<!-- <tr>
 <td class=item width=1 style="color:#069; text-decoration:underline; cursor:pointer;">20190406T062552I0001</td>
 <td class=item align=right nowrap>30,000.00</td>
  <td class=item>BANK OF SCOTLAND</td> 
  <td class=item width=1>2019-04-06</td>
 <td class=item width=1>06:25:52</td>  
 <td class=item width=1>Approved</td>
</tr>-->
</table><br>

&nbsp; 
<a href="javascript:window.print()" style="color:#069;">
  <i class="fa fa-print"></i> Print Statement 
</a>

<script language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
updateCompound();
</script>



</div></div>

</div>
                    </div>
                </div>
            </div>
        </div>
</div></div>

<?php include_once 'src/inc_end.php';?>
