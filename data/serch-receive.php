<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
}

$dsn = "mysql:host=db;dbname=sample;";
$user = "user";
$password = "userpass";

$data = []; //$dataを配列として初期化

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id,name From user WHERE LIKE :name"; 
    //全件取得
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name','%'.$name.'%',PDO::PARAM_STR);
    $stmt->execute();

    $count = $stmt->rowCount();//行数を取得する
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;//行のデータを連想配列で取得する
    }
    echo '処理が終了しました<br>';
}catch (PDOException $e){
    echo($e->getMessage());
    die();
}
?>
<html>
<body>
<h1>会員データ一覧</h1>
<p><?php echo $count;?>件見つかりました。</p>
<table border=1>
    <tr><th>id</th><td>名前</td></tr>
    <?php foreach($data as $row): ?>
    <tr><th><?php echo $row['id']; ?></th><td><?php echo $row['name']; ?></td></tr>
<?php endforeach;?>
</table>
</body>

</html>
