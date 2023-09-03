<?PHP
$tb = 'contact';
$nav = 'contact.php';
$error = '';
$errno = 400;

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);
    $db_res = sql_insert($ctx_db_conn, $tb, $post);

    if (is_numeric($db_res)) {
        $_POST = null;
        $error = 'Message sent successfully, our Sales Team will reach out to you via email.';
        $errno = 200;
    } else {
        $error = 'Contact us failed, try again later. ' . $db_res;
    }

    $nav_f = sprintf('%s?error=%s&errno=%d', $nav, $error, $errno);
    // ctx_goto($nav_f);
}