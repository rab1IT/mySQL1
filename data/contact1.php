<?php
//送信ボタンを押す=POSTされたときだけ実行する内容
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $inquery = $_POST['inquery'];
}
//POSTデータのバリデーション
//メールアドレスのバリデーション
$pattern = '/\A([a-z0-9_\-\+\/\?]+)';
$pattern .= '@([a-z0-9\-]+\.)+[a-z]{2,6}\z/i';

if(!preg_match($pattern,$email)){
    $err = 'メールアドレスの形式が違います';
}
if(isset($err)){
    //データベースへの登録（今回は略）
    mb_language("japanese");
    mb_internal_encoding("utf-8");
    $subject = 'お問い合わせありがとうございます';
    $inquery =<<<EOM
    {$name}さん、

    お問い合わせ内容：
    {$inquery}
    EOM;
        $headers = 'From:  kkkkkkk@com'."\n";
        if(mb_send_mail($email, $subject, $inquiry, $headers) === FALSE){
			$message = 'メール送信に失敗しました。';
		}else{
			$message = 'お問い合わせを受け付けました。確認メールを送信しております。';
		}
        
}
//データベースへデータを挿入する（今回は省略）
//確認メールを送信
?>
<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>お問い合わせ</title>
    <style>.red-text{
        color:red;
    }
    </style>
</head>
<body>  
<h1>お問い合わせ</h1>
<?php if(isset($message)){echo '<p class="red-text">'.$message.'</p>';} ?>
//送信できたかどうかの返信を返す
<form action="" method="POST">
<label>お名前</label>
<input type="text" name="name"><br>
<label>メールアドレス</label>
<?php if(isset($err)){echo '<p class="red-text">'.$err.'</p>';} ?>
//メールアドレス自体にエラーがあれば返す
<input type="text" name="email"><br><br>

<label>内容</label>
<p>
<textarea name="inquery" cols="50" rows="10"></textarea>
</p>
<input type="submit">

</form>
</body>
</html>