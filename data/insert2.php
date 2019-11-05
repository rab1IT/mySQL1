<?php

$dsn = "mysql:host=db;dbname=sample;";
$user = "user";
$password = "userpass";
//挿入したいデータを下記に入れる
$email = 'prepare@statement.com';

//これ以降でエラーがあったら例外処理をする
try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //エラーをどこまで報告するか設定する
    $sql = "UPDATE user SET email = :email VALUE where id = 3";
    //置き換える部分に「：＋名前」で設定
    $stmt = $dbh->prepare($sql);
    //プリペアドステートメント
    $stmt->bindValue(':email',$email,PDO::PARAM_STR);
    //値が、文字列の場合はPARM_STRを使う
    //$stmt->bindValue(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    echo '更新が終了しました';

}catch (PDOException $e){
    //例外を検知する
    print('Connection failed:'.$e->getMessage());
    //例外を表示する
    die();
    //処理を停止する
}