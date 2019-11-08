<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>業務管理システム</title>
</head>
<body>  
<h1>株式会社クリエイト　業務管理システム</h1>
<form action="task1.php" method="POST">
    <label>名前</label>
    <select name="user_name">
        <option value="社長">社長</option>
        <option value="鈴木さん"> 鈴木さん</option>
        <option value="高橋さん">高橋さん</option>
        <option value="山田さん">山田さん</option>
        <option value="中村さん">中村さん</option>
    </select>
    <br>
    <br>
    <label>パスワード</label>
    <input class="passbox" type="text" name="pass" size="30px">
    <br><br>
    <input type="submit" value="送信">
</form>
</body>
</html>