<?php
session_start();
var_dump($_SESSION);

$profile = $_SESSION['profile'];
$cart = $_SESSION['cart'];
?>

<html>
<body>
    <p>こんにちは<?php echo $profile['user_name']; ?>さん
    地域：<?php echo $profile['location']; ?></p>
<h1>カートの中身</h1>
<hr>
<table border=1>
<tr><th>商品ID</th><th>個数</th></tr>

</table>


</body>
</html>
