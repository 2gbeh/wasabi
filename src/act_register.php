<?PHP
require_once 'src/use_skyhook.php';
// Skyhook::registrationMail('dehphantom@yahoo.com');

$tb = 'user';
$nav = 'user/home.php';
$error = '';
$errno = 400;

#var_dump($_POST, $_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);

    if ($post['password'] != $post['password_cfm']) {
        $error = 'Password confirmation does not match';
    } else {
        // EXCLUDE CFM_* FIELDS
        $new_post = array();
        foreach ($post as $key => $value) {
            if (substr($key, -4) != '_cfm') {
                $new_post[$key] = $value;
            }
        }
        $db_res = sql_insert($ctx_db_conn, $tb, $new_post);

        if (is_numeric($db_res)) {
            $_POST = null;
            $error = 'Account created successfully';
            $errno = 200;

            $_SESSION['user'] = $db_res;

            Skyhook::registrationMail($post['email']);

            $nav_f = sprintf('%s?error=%s&errno=%d', $nav, $error, $errno);
            ctx_goto($nav_f);
        } else {
            $error = 'Email or username already exists. ' . $db_res;
        }
    }
}
