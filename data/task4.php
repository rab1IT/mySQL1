<?php
//form1からPOSTされてきたデータを変数に取得する
$user_name = $_POST['user_name'];
$pass = $_POST['pass'];
?>
<?php
//配列として初期化
$array1 = array();

//配列格納
$array1 = array(
	
	0 => array(
	'user_name' => '鈴木さん',
	'term' => '営業チーム',
	'pass1' => '1111'
		),
	1 => array(
	'user_name' => '高橋さん',
	'term' => '経理チーム',
	'pass1' => '2222'
	),
	2 => array(
	'user_name' => '山田さん',
	'term' => '営業チーム',
	'pass1' => '3333'
	),
	3 => array(
	'user_name' => '中村さん',
	'term' => '経理チーム',
	'pass1' => '4444'
	),
	4 => array(
	'user_name' => '山田さん',
	'term' => '総務チーム',
	'pass1' => '5555'
	),
	5 => array(
	'user_name' => '`社長',
	'term' => '社長',
	'pass1' => '1234'
	)
);
?>
<?php
//配列として初期化
$array2 = array();
//タスクを配列へ格納
$array2 = array(
	//鈴木さんタスク
	0 => array(
	'task1' => 'A社訪問',
	'task2' => 'B社資料送付'
	),
	//高橋さんタスク
	1 => array(
	'task1' => '帳簿処理',
	'task2' => '請求書発行'
	),
	//山田さんタスク（営業)
	2 => array(
	'task1' => 'C社訪問',
	'task2' => 'D社資料送付',
	'task3' => 'E社資料送付'
	),
	//中村さんタスク
	3 => array(
	'task1' => '`請求書発行',
	'task2' => '先月の締め'
	),
	//山田さんタスク（総務）	
	4 => array(
	'task1' => '求人開始',
	'task2' => '退職予定者の処理作業'
	)
	);
?>
<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>業務管理システム-結果</title>
</head>
<body>                                                                  
	<h1>結果一覧</h1>  
<?php 
foreach($array1 as $key => $vals){
	//echo $vals; 非表示。$vals にすべての情報を入れる。
	if($user_name === $vals['user_name'] && $pass === $vals['pass1']){
			echo $vals['user_name'].'('.$vals['term'].')<br>';
				foreach($array2[$key] as $tas){
					echo $tas.'<br>';
					//$tas にすべての情報を入れる。
				}
	}elseif($user_name === $vals['user_name'] && $pass === $vals['pass1']){
		echo 'パスワードが間違っています。';
	}
	elseif($user_name === $vals[5]['user_name'] && $pass === $vals[5]['pass1']){	
		echo $array1[0]['user_name'].'('.$array1[0]['term'].')<br>';
		echo $array2[0]['task1'];
		echo $array2[0]['task2'];

		}
	}
?>
</body>
</html>