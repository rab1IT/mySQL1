<?php
//form1からPOSTされてきたデータを変数に取得する
$user_name = $_POST['user_name'];
$term = $_POST['term'];
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
if($_POST['user_name'] === $array1[0]['user_name'] 
&& $_POST['term'] === $array1[0]['term']
&& $_POST['pass'] === $array1[0]['pass1']){
		echo $array2[0]['task1'];
		echo '<br>';
		echo $array2[0]['task2'];
		echo '<br>';
		
	}elseif($_POST['user_name'] === $array1[1]['user_name'] 
	&& $_POST['term'] === $array1[1]['term']
	&& $_POST['pass'] === $array1[1]['pass1']){
		echo $array2[1]['task1'];
		echo '<br>';
		echo $array2[1]['task2'];
		echo '<br>';
	}elseif($_POST['user_name'] === $array1[2]['user_name'] 
	&& $_POST['term'] === $array1[2]['term']
	&& $_POST['pass'] === $array1[2]['pass1']){
		echo $array2[2]['task1'];
		echo '<br>';
		echo $array2[2]['task2'];
		echo '<br>';
		echo $array2[2]['task3'];
		echo '<br>';
	}elseif($_POST['user_name'] === $array1[3]['user_name'] 
	&& $_POST['term'] === $array1[3]['term']
	&& $_POST['pass'] === $array1[3]['pass1']){
		echo $array2[1]['task1'];
		echo '<br>';
		echo $array2[1]['task2'];
		echo '<br>';
	}elseif($_POST['user_name'] === $array1[4]['user_name'] 
	&& $_POST['term'] === $array1[4]['term']
	&& $_POST['pass'] === $array1[4]['pass1']){
		echo $array2[1]['task1'];
		echo '<br>';
		echo $array2[1]['task2'];
		echo '<br>';
	}elseif($_POST['user_name'] === $array1[5]['user_name'] 
	&& $_POST['term'] === $array1[5]['term']
	&& $_POST['pass'] === $array1[5]['pass1']){ 
		foreach($array1 as $value1){
			foreach ($value1 as $key2 => $value2){
				echo "{$key2} : {$value2}<br/>";
				}
			}
	}else{
		echo 'パスワードが間違っています。';
	}
?>
</body>
</html>