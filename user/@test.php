<?php
require_once 'src/cfg_app_user.php';
$newMain = new Main($conn);
$newUser = new User($conn);

var_dump(
    // $newMain->getAdmin(1),
    // $newMain->getContact(1),
    // $newMain->getLedger(32),
    // $newMain->getTicket(1),
    // $newMain->getUser(1)
    
    $newUser->getDeposits(1),
    $newUser->getWithdrawals(1)
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test User - CotextLab</title>
    <link type="text/css" href="../admin/lib/jrad-min/css/widget.css" rel="stylesheet" />
    <script type="text/javascript" src="../admin/lib/jrad-min/js/master.js"></script>
</head>
<body>
 <hr/>
</body>
</html>
