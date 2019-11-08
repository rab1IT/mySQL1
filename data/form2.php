<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>業務管理システム</title>
</head>
<body>  
<h1>株式会社クリエイト　業務管理システム</h1>
<form action="task2.php" method="POST">
<p>
    <label>名前</label>
    <select name="user_name">
    <?php
    $user_name = array (
        "社長",
        "鈴木さん",
        "高橋さん",
        "山田さん",
        "中村さん"
        );
    foreach ( $user_name as $value ) {
        echo '<option value="', $value, '">', $value, '</option>';
    }
    ?>     
    </select>
</p><br>
<p>
    <label>チーム</label>
    <select name="term">
    <?php
    $term = array (
        "社長",
        "鈴木さん",
        "高橋さん",
        "山田さん",
        "中村さん"
        );
    foreach ( $team as $value ) {
        echo '<option value="', $value, '">', $value, '</option>';
    }
    ?>     
    </select>
    </p>
    <br>
    <label>パスワード</label>
    <input class="passbox" type="text" name="pass" size="50px">
    <br><br>
    <input type="submit" value="送信">
</form>
</body>
</html>