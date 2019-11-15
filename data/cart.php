<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>商品一覧</title>
</head>
<body>  
<h1>ショッピングカート</h1>
<p><a href="shop.php">一覧へ</a></p>
<p><a href="delete.php">カートをすべて空に</a></p>
<table> 
<tr><th>商品名</th><th>数量</th><th>表示ボタン</th><th>削除</th></tr>
<tr><td>業務デスク</td>
    <td><select name="num">
        <?php for($i = 1;$i < 10;$i++):?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
<?php endfor; ?>
</select></td>
    <td><input type="submit" value="変更"></td>
    <td><input type="submit" value="削除"></td>
</tr>
</table>