<?php
function get_db_connect(){
    try{
        $dsn = DSN;
        $user = DB_USER;
        $password = DB_PASSWORD;

        $dbh = new PDO($dsn,$user,$password);
    }catch(PDOException $e){
        echo($e->getMessage());
        die();
    }
    $dbh->collator_set_attribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $dbh;
}
//メルアドの重複を調べる。カウントの値が0より大きいときTRUEを返す
function email_existes($dbh,$email){
    $sql ="SELECT COUNT(id) FROM members where email = :email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue('email',$email,PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->fetch(PDO::FETCH_ASSOC);
    if($count['COUNT(id)'] > 0){
        return TRUE;
    }else{
        return FALSE;
    }
}
//入力データを挿入する関数を作る
function insert_member_data($dbh,$name,$email,$password){
    $password = password


}