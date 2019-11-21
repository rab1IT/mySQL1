<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>新規登録</title>
</head>
<body>  
<h1>新規登録</h1>
<form action="signup.php" method="POST">
    <p>名前:<input type="text" name="name" size="50"><?php echo $errs['name'];?></p>
    <br>
    <p>メールアドレス:<input type="text" name="email" size="80"><?php echo $errs['email'];?></p>
    <br>
    <p>パスワード:<input type="password" name="password" size="50"><?php echo $errs['password'];?></p>
    <br><br>
    <p><input type="submit" value="登録する"></p>
</form>
</body>
</html>