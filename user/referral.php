<?php
    $ctx_title = 'My Referrals';
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
                                            <h5 class="m-b-10">Referrals</h5>
                                            <p class="text-muted m-b-10">View your total and active referrals and referral commissions</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="home.php"> <i class="fa fa-home"></i> Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="referral.php"> Referrals</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Page-header end-->
                                    

                                    <div class="page-body">
                                        <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                            
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="text-primary">Total</h4>
                                                    </div>
                                                    <div class="card-body">
<h2 class="text-dark"><?php echo $getUser['refs_buf']; ?></h2>                                          </div>
                                            </div>
                                            </div><div class="col-lg-3 col-md-3">
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="text-primary">Commission</h4>
                                                    </div>
                                                    <div class="card-body">
<h2 class="text-dark">$ <?php echo $getUser['bonus_buf']; ?></h2>                                          </div>
                                            </div></div><div class="col-lg-3 col-md-3">
                                            
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="text-primary">Referred By</h4>
                                                    </div>
                                                    <div class="card-body">
<h2 class="text-dark"><?php echo $getUser['ref_buf']; ?></h2>                                          </div>
                                            </div></div><div class="col-lg-3 col-md-3">
                                            
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="text-primary">Referral Code</h4>
                                                    </div>
                                                    <div class="card-body">
<p class="text-dark">Automatically top up your account balance by sharing your referral link, Earn a percentage of whatever plan your referred user buys.</p>
          <form action="javascript:void;" method="post">
             <div class="form-group row">
                <div class="col-lg-12">
                <input type="url" readonly  class="form-control" value="<?php echo $getUser['ref_code']; ?>">
                </div>
              </div>                                            </div>
                                            </div> </div>                                            
                    </div>
                </div>
            </div>
        </div>

<?php include_once 'src/inc_end.php';?>        