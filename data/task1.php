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
		'user_name' => '`社長',
		'term' => '社長',
		'pass1' => '1234'
	),
	1 => array(
	'user_name' => '鈴木さん',
	'term' => '営業チーム',
	'pass1' => '1111'
	),
	2 => array(
	'user_name' => '高橋さん',
	'term' => '経理チーム',
	'pass1' => '2222'
	),
	3 => array(
	'user_name' => '山田さん',
	'term' => '営業チーム',
	'pass1' => '3333'
	),
	4 => array(
	'user_name' => '中村さん',
	'term' => '経理チーム',
	'pass1' => '4444'
	),
	5 => array(
	'user_name' => '山田さん',
	'term' => '総務チーム',
	'pass1' => '5555'
	)
	
);
?>
<?php
//配列として初期化
$array2 = array();
//タスクを配列へ格納
$array2 = array(
	0 => array(
		'task1' => 'Z社訪問',
		'task2' => 'Y社資料送付'
		),
	//鈴木さんタスク
	1 => array(
	'task1' => 'A社訪問',
	'task2' => 'B社資料送付'
	),
	//高橋さんタスク
	2 => array(
	'task1' => '帳簿処理',
	'task2' => '請求書発行'
	),
	//山田さんタスク（営業)
	3 => array(
	'task1' => 'C社訪問',
	'task2' => 'D社資料送付',
	'task3' => 'E社資料送付'
	),
	//中村さんタスク
	4 => array(
	'task1' => '`請求書発行',
	'task2' => '先月の締め'
	),
	//山田さんタスク（総務）	
	5 => array(
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
	if($user_name === $vals[$key]['user_name'] && $pass === $vals[$key]['pass1']){	
		echo $array1[1]['user_name'].'('.$array1[1]['term'].')<br>';
		echo $array2[1]['task1'];
		echo $array2[1]['task2'];

		}
	elseif($user_name === $vals['user_name'] && $pass === $vals['pass1']){
			echo $vals['user_name'].'('.$vals['term'].')<br>';
				foreach($array2[$key] as $tas){
					echo $tas.'<br>';
					//$tas にすべての情報を入れる。
				}
	}elseif($user_name === $vals['user_name'] && $pass === $vals['pass1']){
		echo 'パスワードが間違っています。<br>';
		break;
	}
	
	}
?>
</body>
</html>