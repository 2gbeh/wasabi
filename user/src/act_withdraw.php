<?PHP
$tb = 'ledger';
$tb_2 = 'user';
$errno = 400;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);

    if ($post['amt'] > $getUser['bal']) {
        $error = 'Withdrawal amount higher than available balance';
    } else {
        // INSERT LEDGER
        $post['bal'] = $getUser['bal'] - $post['amt'];
        $db_res = sql_insert($ctx_db_conn, $tb, $post);

        if (is_numeric($db_res)) {
            // UPDATE USER
            $post_2 = array('bal' => $post['bal']);
            $db_res_2 = sql_update($ctx_db_conn, $tb_2, $post_2, 'ID', $post['user_id']);
            //var_dump($post, $post_2, $db_res_2);

            $_POST = null;
            $error = 'Please kindly contact the company to purchase a WITHDRAWAL PIN';
            $errno = 200;

            goto_page('?error=' . $error . '&errno=' . $errno);
        } else {
            $error = $db_res;
        }
    }
}
