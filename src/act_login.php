<?PHP
$tb = 'user';
$nav = 'user/home.php';
$error = '';
$errno = 400;

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);
    $db_res = sql_select_one($ctx_db_conn, $tb, 'email', $post['email']);

    if (is_array($db_res)) {
        if ($post['password'] == $db_res['password']) {
            $_POST = null;
            $error = 'Login successful';
            $errno = 200;

            $_SESSION['user'] = $db_res;

            $nav_f = sprintf('%s?error=%s&errno=%d', $nav, $error, $errno);
            ctx_goto($nav_f);
        } else {
            $error = 'Incorrect password';
        }

    } else {
        $error = 'Email or username not found';
    }
}

