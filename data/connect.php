<?php

$dsn = "mysql:host=db;dbname=sample";
$user = "user";
$password = "userpass";

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * From user";
    //全件取得
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    //接続だけを確認する場合、以上3行は不要でした。
    //「Connection failed:SQLSTATE[42000]: Syntax error or access violation: 1065 Query was empty」というエラーが出ますので削除してお試しください。*/
    $data = array();
    $count = $stmt->rowCount();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    echo '処理が終了しましたよ<br>';

}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}
var_dump($count);
var_dump($data);
