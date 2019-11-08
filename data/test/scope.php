<?php 
function hello_message($name){
    $now = date('H:i:s');
    echo 'はじめまして'.$name.'さん'.$now;

    var_dump($now);
    var_dump($name);
    var_dump($word);
}
$word = '太郎';
hello_message($word);

var_dump($now);
var_dump($name);
var_dump($word);
