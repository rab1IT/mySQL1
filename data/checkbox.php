<html>
<body>
    <h1>チェックボックスを使ったフォーム</h1>
    <p>好きな色を選択してください（複数選択可）</p>
<form action="checkbox_receive.php" method="POST">
<p>
<input type="checkbox" name="colors[]" value = "青">青
<input type="checkbox" name="colors[]" value = "赤">赤
<input type="checkbox" name="colors[]" value = "黄”>黄
<input type="checkbox" name="colors[]" value = "青">青
<input type="checkbox" name="colors[]" value = "赤">赤
</p>
<input type="submit>
</form>
</body>
</html>