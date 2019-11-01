<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>業務管理システム</title>
</head>
<body>  
<h1>株式会社クリエイト　業務管理システム</h1>
<form action="task4.php" method="POST">
    <label>名前</label>
    <select name="user_name">
        <option>社長</option>
        <option>鈴木さん</option>
        <option>高橋さん</option>
        <option>山田さん</option>
        <option>中村さん</option>
    </select>
    <br>
    <label>チーム</label>
    <select name="term">
        <option>社長</option>
        <option>営業チーム</option>
        <option>経理チーム</option>
        <option>総務チーム</option>
    </select>
    <br>
    <label>パスワード</label>
    <input class="passbox" type="text" name="pass" size="30px">
    <br><br>
    <input type="submit" value="送信">
</form>
</body>
</html>