<?PHP
$tb = 'user';
$tb_2 = 'ledger';
$errno = 400;

if ($_GET['e'] == true) {
    $_POST = sql_select_id($conn, $tb, $_GET['q']);

    $newMain = new Main($conn);
    $res_ledger = $newMain->getDashboard($_GET['q']);
    $_POST['gross_deposit_active'] = $res_ledger['gross_deposit_active'];
    $_POST['gross_earned'] = $res_ledger['gross_earned'];
}

// var_dump($_POST, $_FILES);
// return 1;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $exclude = ['names', 'email', 'bal', 'gross_deposit_active', 'gross_earned', 'bonus'];
    $post = sanitize_request($_POST, $exclude);
    // var_dump($_POST, $post);

    // if ($post['amt'] > (int) $_POST['bal']) {
    //     $error = 'Deposit amount higher than available balance';
    // } else {

    $post['bal'] = $new_bal = (int) $_POST['bal'] + $post['amt'];
    $post['why'] = Main::PLANS[$_POST['plan']];

    $db_res = sql_insert($conn, $tb_2, $post);
    $db_res_2 = sql_update($conn, $tb, ['bal' => $new_bal], 'ID', $post['user_id']);

    if (is_numeric($db_res)) {
        $error = 'Deposit submitted successfully';
        $errno = 200;
        goto_page('?e=true&q=' . $post['user_id'] . '&err=' . $error . '&errno=' . $errno);

    } else {
        $error = $db_res;
    }
    // }
}

$ddl_plan = Enums::option(Main::PLANS, $_POST['plan']);
