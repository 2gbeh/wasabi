<?php
    $ctx_title = 'My Dashboard';
    require_once 'src/inc_top.php';
?>

<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">

                                      <div class="row">




                                            <!-- order-card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-csfx order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Account Name: <?php echo $getUser['names_buf']; ?></h6><i class="ti-timer f-right"></i>
                                                        <span class="text-left"><b>Registered:</b> <?php echo $getUser['date_buf']; ?><br>
                                                        <span class="m-b-0"><b>IP Address:</b> <?php echo $getUser['IP']; ?> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-csfx order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Available Balance</h6>
                                                        <h2 class="text-right"><i class="ti-wallet f-left"></i><span>$ <?php echo $getUser['bal_buf']; ?></span></h2>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-csfx order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20"> Deposits</h6>
                                                        <i class="fas fa-donate f-left"></i><h2 class="text-right">$ <?php echo $gross_deposit_active_buf; ?></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-csfx order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Profit </h6>
                                                        <i class="fas fa-chart-line f-left"></i><h2 class="text-right"><span>$ <?php echo $getUser['bonus_buf']; ?></span></h2>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- order-card end -->

                                            <!-- statustic and process start -->
                                           <div class="col-lg-9 col-md-9">
                                                <div class="card">
                                                    <div class="card-block">


                                                        <!-- TradingView Widget BEGIN -->

  <script src="//code.tidio.co/nf68ibvn1czmy3hjaalzckjtpjbkgsk8.js" async></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "auto",
  "height": 610,
  "symbol": "BITFINEX:BTCUSD",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "withdateranges": true,
  "range": "all",
  "allow_symbol_change": true,
  "save_image": false,
  "details": true,
  "hotlist": true,
  "calendar": true,
  "news": [
    "stocktwits",
    "headlines"
  ],
  "studies": [
    "BB@tv-basicstudies",
    "MACD@tv-basicstudies",
    "MF@tv-basicstudies"
  ],
  "container_id": "tradingview_f263f"
}
  );
  </script>

<!-- TradingView Widget END -->


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3" style="min-width:310px;">
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="text-primary">My Portfolio</h4>
                                                    </div>
                                                    <div class="card-body" style="margin-top:-25px;">
<h4 class="text-left">Gross Deposits <br><br>$ <?php echo $gross_deposit_buf; ?>.00</h4> <br>
<h5 class="text-left text-dark"><?php echo $total_deposit_active_buf; ?> approved</h5> <br>
<h5 class="text-left text-dark"><?php echo $total_deposit_offset_buf; ?> pending</h5> <br> <hr>

<h4 class="text-left">Gross Withdrawals <br><br>$ <?php echo $gross_withdrawal_buf; ?>.00</h4> <br>
<h5 class="text-left text-dark"><?php echo $total_withdrawal_active_buf; ?> approved</h5> <br>
<h5 class="text-left text-dark"><?php echo $total_withdrawal_offset_buf; ?> pending</h5> <br> <hr>

<h4 class="text-left">Referral Bonus<br><br>$ <?php echo $gross_earned_buf; ?>.00</h4><br>
<h5 class="text-left text-dark"><?php echo $getUser['refs_buf']; ?> total</h5> <br>
<h5 class="text-left text-dark"></h5> 
                                     </div>
                                            </div>

                                            </div>

                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<style>
.usermenu {
	margin-bottom:0;
	}
</style>

</div>

<?php include_once 'src/inc_end.php';?>