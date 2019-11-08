<?php
$time = date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
//クライアントのIPアドレスを取得する
$date = "{$time}\{$ip}\n";

$file = @fopen('access.log','a')or die('ファイルを開けませんでした');
//ファイルをオプションAで開く
flock($file,LOCK_EX);
//ファイルをロックする・他者の読み書きを禁止・排他的ロック

fwrite($file,$date);//ファイルに書き込む
flock($file,LOCK_UN);//ファイルのロックを解除する
fclose($file);//ファイルを閉じる

echo 'アクセスログを記録しました';
