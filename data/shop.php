<?php 
session_start();
?>
<html>
<head lang="ja">
    <meta charset="utf-8">
    <title>商品一覧</title>
</head>
<body>  
<h1>商品一覧</h1>
<p><a href="cart.php">カートを見る</a></p>
<table style="text-align:center"> 
<tr><th>商品</th><th>数量</th><th>ボタン</th></tr>
<form action="cart.php" method="POST" >
<tr><td>業務用デスク</td>
<td>
    <select name="num">
        <?php for($i = 1;$i < 10;$i++):?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
<?php endfor; ?>
</select>
</td>
<td>
<input type="hidden" name="product" value="desk_01">
<?php if(isset($cart['desk_01']) === TRUE):?>
<p>追加済み</p>
<?php else: ?>
<input type="submit" value="カートに入れる">
<?php endif;?>
</td>
</tr>
</form>
<form action="cart.php" method="POST">
<tr><td>快適いす</td><td></td><td></td></tr>
</form>
</table>

</body>
</html>
