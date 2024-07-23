<?php
require 'RGShenn.php';
if (!isset($_SESSION['user']) && !isset($_COOKIE['token']) && !isset($_COOKIE['ssid'])) {
    $ShennID = $_COOKIE['ssid'];
    $ShennUID = str_replace(['SHENN-A', 'AIY'], '', $ShennID) + 0;
    $ShennKey = $_COOKIE['token'];
    $ShennUser = $call->query("SELECT * FROM users WHERE id = '$ShennUID'")->fetch_assoc();

    $ShennCheck = $call->query("SELECT * FROM users_cookie WHERE cookie = '$ShennKey' AND username = '" . $ShennUser['username'] . "'");
    if ($ShennCheck->num_rows == 1) {
        $_SESSION['user'] = $ShennUser;
        redirect(0, visited());
        $call->query("UPDATE users_cookie SET active = '$date $time' WHERE cookie = '$ShennKey'");
    } else {
        redirect(0, base_url('auth/login'));
    }
} else {
    if (time() - $_SESSION['last_login_time'] > 3600000000000000000000007656755353429008898989543345678) {
        redirect(0, base_url('auth/logout'));
    } else {
        $_SESSION['last_login_time'] = time();
        require _DIR_('library/session/user');
        $page = 'Dashboard';
        require _DIR_('library/header/user');
    }
}
?>
