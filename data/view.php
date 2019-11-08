<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>ひとこと掲示板</title>
    <style type="text/css">
    .text-color {color:red;
    }
    .komoku{
        background-color:orange;
    }
    </style>
</head>
<body>  
<h1>ひとこと掲示板</h1>
<table border=1>
    <tr class="komoku"><th>名前</th><th>コメント</th><th>時刻</th></tr>
    <?php if(count($data)):
        foreach($data as $row): ?>
    <tr>
        <td><?php echo html_escape($row['name']);?></td>
        <td><?php echo nl2br($row['comment']);?></td>
        <td><?php echo $row['created'];?></td>
    </tr>
    <?php endforeach;
        endif; ?>
</table>
<?php
//エラーがあれば出力する
if(count($errs)){
    foreach($errs as $err){
        echo'<p class="text-color">'.$err.'</p>';
    }
}?>
<form action="" method="POST">
<p>お名前*
<input type="text" name="name">(50文字まで)</p> 
<p>ひとこと*
<textarea name="comment" rows="4" cols="40"></textarea>(200文字まで)</p> 
<input type="submit" value="書き込む">
</form>
</body>
</html>