<?php
require_once '../src/_config.php';

# AUTH MGT
define('LOGIN_URL', 'index.php');
require_once 'lib/jrad-min/php/session.php';

include_once 'src/__cfg_urls__.php';
include_once 'src/__cfg_app__.php';
include_once '../models/Main.php';
include_once '../models/Admin.php';
include_once '../models/User.php';
include_once 'src/__glob_action__.php';
include_once 'src/' . $page_ctx_action;
// var_dump($GLOBALS);
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
<?php
include_once 'inc/meta.inc.php';
include_once 'inc/head.inc.php';
?>
</head>
<body>
<table border="0">
<tr>
	<td>
    <header>
      <a href="" title="Refresh">
        <img src="../img/typeface.png" alt="" />
        <!-- <h2><?php echo APPNAME; ?></h2> 120px -->
      </a>
    </header>

    <?php echo Notice::main($error, $errno); ?>
  </td>
</tr>
<tr>
	<td>