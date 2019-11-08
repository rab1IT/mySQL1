<?php 
$id = '';
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}//intにキャストしてから取得する

$dsn = "mysql:host=db;dbname=sample";
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
        FROM user JOIN club ON user.id = club.club_id
        WHERE user.id = :id LIMIT 1
    SQL;   
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //var_dump($row); 
}catch (PDOException $e){
    echo('接続エラー:'.$e->getMessage());
    die();
}
<html>

<head lang="ja">
    <meta charset="utf-8">
    <title>会員データ</title>
    <style type="text/css">
    .serch{float:right;}
    </style>
</head>
<body>  

<div class="serch">
<p>会員IDを入力してください</p>
<form action="" method="GET">
    <input type="text" mame="id">
    <input type="submit" value="確認する">
</form>
</div>
<h1>会員データの照合</h1>
<?php if($row === FALSE): ?>
    <p>存在しない会員IDです</p>
<?php else: ?>
<table border = "1">
<tr>
    <th>お名前</th>
    <th>年齢</th>
    <th>クラブ名</th>
    <th>活動年数</th>
    <th>概要</th>
</tr>
<tr>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['age'] ?></td>
    <td><?php echo $row['club_name'] ?></td>
    <td><?php echo $row['count'] ?>回</td>
    <td><?php echo n12br($row['overview']) ?></td>
</tr>
</table>
<?php endif; ?>
</html>
