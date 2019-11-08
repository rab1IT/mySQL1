<?php
//関数ファイルを読み込む・require_onceはエラーがあれば止まる
require_once('./function.php');
//ここに処理の流れを書く

$errs = [];//エラー文用配列の初期化
//$data = []; DBから引き出すデータの格納用配列
$dbh = get_db_connect();//DBに接続

//入力値の検証
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = get_post('name');
    $comment = get_post('comment');
    
    if(!check_words($name,50)){
        $errs = 'お名前欄を修正してください';
    }
    if(!check_words($comment,200)){
        $errs = 'コメント欄を修正してください';
    }
    if(count($errs) === 0){
        $result = insert_comment($dbh,$name,$comment);
        //エラーがなければDBの内容を挿入する
    }

}
//全コメントデータを取得する
$data = select_comments($dbh);

//表示関連・htmlを読み込む・コードにエラーが有っても読み込む
include_once('view.php');