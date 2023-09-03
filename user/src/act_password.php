<?PHP
$tb = 'user';
$nav = $LOGIN_URL;
$errno = 400;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = sanitize_request($_POST);

    if ($post['password'] == $_USER['password']) {
        if ($post['password'] == $post['new_password']) {
            $error = 'Current password and new password cannot be the same';
        } else if ($post['new_password'] != $post['cfm_password']) {
            $error = 'New password and confirm password does not match';
        } else {
            $new_post = array('password' => $post['new_password']);

            $db_res = sql_update($ctx_db_conn, $tb, $new_post, 'ID', $ID);

            if (is_numeric($db_res)) {
                $_POST = null;

                $error = 'Password updated successfully. Log in to continue';
                $errno = 200;

                session_destroy();
                goto_page($nav . '?err=' . $error);
            } else {
                $error = $db_res;
            }

        }
    } else {
        $error = 'Current password is incorrect';
    }

}
