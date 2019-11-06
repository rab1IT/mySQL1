<?php 
$id = '';
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}//intにキャストしてから取得する

$dsn = "mysql:host=db;dbname=sample;";
$user = "user";
$password = "userpass";

$data = [];

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = <<<SQL
    SELECT user.name,
        user.age,
        club.club_name,
        club.count,
        club.overview
        FROM user JOIN club ON user.club_id = club_id.club_id
        WHERE user.id = :id LIMIT 1
    SQL;
    //SQLが長いのでヒアドキュメントを使い、代入に改行を可能とした    
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row); 
}catch (PDOException $e){
    echo('接続エラー:'.$e->getMessage());
    die();}
