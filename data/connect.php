<?php

$dsn = "mysql:host=db; dbname=sample;charaset=utf8";
$user = "user";
$password = "userpass";

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (id, name, age, email) VALUES (NULL, '田中三郎', '28', 'sample5@sample5.com')";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    //接続だけを確認する場合、以上3行は不要でした。
    //「Connection failed:SQLSTATE[42000]: Syntax error or access violation: 1065 Query was empty」というエラーが出ますので削除してお試しください。*/
    echo '接続に成功しています';

}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}