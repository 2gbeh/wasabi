<?PHP
$tb = 'ledger';
$errno = 400;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);

    // if ($post['amt'] > $getUser['bal']) {
    //     $error = 'Deposit amount higher than available balance';
    // } else {
    $post['bal'] = $getUser['bal'] + $post['amt'];
    $post['why'] = Main::PLANS[$_POST['plan']];
    
    $db_res = sql_insert($ctx_db_conn, $tb, $post);

    if (is_numeric($db_res)) {
        $_POST = null;
        $error = 'Deposit submitted successfully';
        $errno = 200;
    } else {
        $error = $db_res;
    }
    // }
}

$ddl_plan = Enums::option(Main::PLANS, $_POST['plan']);
