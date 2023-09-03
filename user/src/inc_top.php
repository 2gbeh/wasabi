<?php
require_once '../src/_config.php';

# AUTHENTICATION
$LOGIN_URL = '../login.php';
if ($_SERVER['SERVER_NAME'] === '127.0.0.1' || $_SERVER['SERVER_NAME'] === 'localhost') {
    require_once '../admin/lib/jrad-php/session.php';
} else {
    require_once '../admin/lib/jrad-min/php/session.php';
}

# IMPORT MODULES
include_once '../models/Main.php';
include_once '../models/Admin.php';
include_once '../models/User.php';

# SHARE VARIABLES
$USERNAME = $_USER['username'];
$EMAIL = $_USER['email'];
$ID = is_numeric($_SESSION['user']) ? $_SESSION['user'] : $_USER['ID'];

$newUser = new User($ctx_db_conn);
$getUser = $newUser->getUser($ID);
$getWallet = $newUser->getAdmin(2, 'notes');

# CHANGE CRYPTO WALLET FROM ADMIN
if ($getWallet !== null && strlen($getWallet) > 0) {
    $ctx_wallet = $getWallet;
}

include_once ctx_ctrl();
// var_dump($GLOBALS);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $ctx_title; ?> - CotextLab</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta property="og:type" content="website"/>
      <meta property="og:image" content="../xas.scdn5.secure.raxcdn.com/images/77c0f23-9c06129.jpg"/>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Favicon icon -->
      <link rel="icon" href="../img/favicon.png" type="image/png">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

      <style>
          .bg-c-csfx {
    background: linear-gradient(45deg,#030b14,#0d1a28);
}

.ctfx {
    color: #1c248a;
}
      </style>

  </head>

  <body>

     <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#">
                           <i class="ti-menu"></i>
                       </a>
                       <a href="" style="padding-right:40px; display:inline-block;" title="Reload">
                           <img class="img-fluid" src="../img/typeface.png" alt="" width="210" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <!--<li>
                               <a href="#" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>-->
                       </ul>
                       <ul class="nav-right">

                           <li class="user-profile header-notification">
                               <a href="#">
                                   <img src="../img/avatar.png" class="img-radius" alt="User-Profile-Image">
                                   <span><?php echo $getUser['email']; ?></span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">
                                   <li>
                                       <a href="profile.php">
                                           <i class="ti-settings"></i> Settings
                                       </a>
                                   </li>


                                   <li>
                                       <a href="javascript:void(0)" onclick="onLogout()">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
      <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">


                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php">
                                        <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="markets.php">
                                        <span class="pcoded-micon"><i class="fa fa-line-chart"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">
                                            Markets
                                            <b style="
                                                background-color:#e11;
                                                color:#fff;
                                                font-size:10px;
                                                border-radius:5px;
                                                padding:2px 4px 3px;
                                                margin-left:2px;
                                            ">new
                                            </b>
                                        </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="copy_trading.php">
                                        <span class="pcoded-micon"><i class="fa fa-hand-holding-heart"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">
                                            Copy Trading
                                        </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"></div>

                            <ul class="pcoded-item pcoded-left-item">

                                <li>
                                    <a href="deposit.php">
                                        <span class="pcoded-micon"><i class="fas fa-donate"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main" style="color:#e1;">Deposit</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="withdraw.php">
                                        <span class="pcoded-micon"><i class="fa fa-wallet"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Withdraw</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="history_cr.php">
                                        <span class="pcoded-micon"><i class="fa fa-history"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">History</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="referral.php">
                                        <span class="pcoded-micon"><i class="fas fa-hands-helping"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Referrals</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="profile.php">
                                        <span class="pcoded-micon"><i class="fa fa-user-cog"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">My  Account</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="onLogout()">
                                        <span class="pcoded-micon"><i class="fa fa-sign-out-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Sign out</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Need Help?</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="../../index.php#contact" target="_blank">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>TH</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Contact Us</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../../" target="_blank">
                                        <span class="pcoded-micon"><i class="ti-world"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Visit Website</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li><center>
                                    <div id="google_translate_element2"></div>

<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
</center>
                                </li>
                                            </ul>

                        </div>
                    </nav>
