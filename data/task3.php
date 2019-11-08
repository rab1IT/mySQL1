<?php
//form1からPOSTされてきたデータを変数に取得する
$user_name = $_POST['user_name'];
$term = $_POST['term'];
$pass = $_POST['pass'];

//配列として初期化
$array1 = array();

//配列格納
$array1 = array(
	['社長','社長','1234'],
	['鈴木さん','営業チーム','1111','A社訪問','B社資料送付'],
	['高橋さん','経理チーム','2222','帳簿処理','請求書発行'],
	['山田さん','営業チーム','3333','C社訪問','D社資料送付','E社資料送付'],
	['中村さん','経理チーム','4444','請求書発行','先月の締め'],
	['山田さん','総務チーム','5555','求人開始','退職予定者の処理作業']
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
    if($_POST['user_name'] === $array1[0]){
    foreach($array1 as $vals){
        echo $vals[0].'('.$vals[1].')<br>'.$vals[3].'<br>'.$vals[4].'<br>'.$vals[5];
        echo '<br><br>';
    }
}else{
    echo 'パス間違い';
}
?>
</body>
</html>
foreach($array1 as $vals){
			echo $vals[0].'('.$vals[1].')<br>';


            
		}
		foreach($array2 as $vals2){
			echo $vals2[0].'<br>'.$vals2[1].'<br>'.$vals2[3];
			echo '<br><br>';