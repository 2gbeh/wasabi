<?PHP
$tb = 'user';
$errno = 400;
$isDisabled = $getUser['ref_isValid'] ? 'disabled' : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);

    $db_res = sql_update($ctx_db_conn, $tb, $post, 'ID', $ID);

    if (is_numeric($db_res)) {
        $error = 'Account updated successfully';
        $errno = 200;
    } else {
        $error = $db_res;
    }
    // use sanitized post
    $_POST = $post;
} else {
    // use current session
    $_POST = $getUser;
}
