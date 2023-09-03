<?php
$ctx_title = 'Markets';
require_once 'src/inc_top.php';
include_once 'src/css_markets.php';
?>

<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

<?php $nav_icon = 'fa fa-line-chart'; include_once 'src/inc_nav.php'; ?>
<?php include_once 'src/inc_ledger.php';?>

<div id="binance-widget-marquee" data-symbols="BTC,ETH,BNB,XRP,ADA" data-names="Bitcoin,Ethereum,BNB,Ripple,Cardano" data-slugs="bitcoin,ethereum,bnb,xrp,cardano" data-cmc-ids="1,1027,1839,52,2010" data-theme="light" data-transparent="false" data-locale="en"></div>

                                            <!-- order-card end -->
                                            <div class="card-block markets-table">

 <td>
      <a class="btn btn-pri" href="https://accounts.binance.com/en/login" target="_new">
        <img src="../img/fab_binance.png" alt="" />
        Pay with <br/>
        Binance
      </a> &nbsp;
      <a class="btn btn-sec" href="deposit_next.php#pay-target">
        Direct <br/>
        Deposit
      </a>
      </a> &nbsp;
      <a class="btn btn-sec" href="https://www.bitcoin.com/">
        Buy & Sell <br/>
        Crypto
      </a>
    </td>
    &nbsp;
    <br></br>
<div class="cryptohopper-web-widget" data-id="1">
</div>
                                            <!-- statustic and process start -->
<div class="row">
                                           <div class="col-lg-12 col-md-12">
                                                <div class="card">
<!-----d-->
<!--div class="card-block markets-table">
<table border="0">
  <tr>
    <th>Name</th>
    <th>Market Volume</th>
    <th>Market Price</th>
    <th>24h Rate</th>
    <th>Market Cap</th>
    <th>Action</th>
  <!--/tr>

  <!--?=$tbody?>
  <!-- <tr>
    <td>
      <div class="avatar" style="background-image:url('../img/coins/usdc.png')"></div>
      USD Coin
      <abbr>USDC</abbr>
    </td>
    <td>
      <ul class="tube" title="25%">
        <li style="width:25%;background-color:#090;">&nbsp;</li>
      </ul>
    </td>
    <td>
      $ 1.00
      <var>453.88 NGN</var>
    </td>
    <td style="color:#e11;">
      -0.04%
    </td>
    <td>
      $ 43.65b
    </td>
    <td>
      <a class="btn btn-pri" href="https://accounts.binance.com/en/login" target="_new">
        <img src="../img/fab_binance.png" alt="" />
        Pay with <br/>
        Binance
      </a> &nbsp;
      <a class="btn btn-sec" href="deposit_next.php#pay-target">
        Direct <br/>
        Deposit
      </a>
    </td>
  </tr> -->
<!---/table>
<!---/div>
<!--end--->


                                                </div>
<!--?php include_once 'src/inc_pager.php';?>
                                            </div>
                                      <!-- /.row -->
                                      </div>
                                    <!-- /.page-body  -->
                                    </div>
                                  <!-- /.page-wrapper -->
                                </div>
                                <!-- ./main-body -->
                            </div>
                            <script src="https://www.cryptohopper.com/widgets/js/script"></script>
                            
                            <script src="https://public.bnbstatic.com/unpkg/growth-widget/cryptoCurrencyWidget@0.0.3.min.js" ></script>
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