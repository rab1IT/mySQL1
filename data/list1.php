<html>
<head>
<style>
    ul{width:100px;}
    .color-red{background-color:red;}
</style>
</head>
<body>
    <ul>
        <?php for($i = 1 ; $i <= 20 ; $i++){
        //ここに連続する処理の内容を書き込む
        <li class="color-red">1</li>
        <li>2</li>
        <li class="color-red">3</li>
        <li>4</li>
        } ?>
    </ul>
</body>
</html>
