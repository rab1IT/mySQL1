<?php
//設定ファイルの読み込み
require_once('config.php');
require_once('db_helper.php');
require_once('extra_helper.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = get_post('name');
    $email = get_post('email');
    $password = get_post('password');

    $dbh = get_db_connect();
    $errs = array();
}
include_once(signup_view.php);
