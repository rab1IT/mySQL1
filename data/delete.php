<?php
session_start();
$session_name = session_name();
$_SESSION = array();

if(isset($_COOKIE[$session_name]) === TRUE){
    setcookie($session_name,'',time() - 3600);
}
//1h以上前のクッキーを削除する
session_destroy();
header('location: cart.php');//元のページへ戻る
exit;//PGを終了する