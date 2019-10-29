<?php 
$arrays = array(

        0 => array(
            'name' => '鈴木',
            'hobby' => 'テニス',
            'email' => 'sample@gr.com'
        ),
        1 => array(
            'name' => '山田',
            'hobby' => 'バレー',
            'email' => 'take@gr.com'
        ),
        2 => array(
            'name' => '緑谷',
            'hobby' => 'バスケ',
            'email' => 'ba@gr.com'
        )
);
//echo $arrays[0]['name'];
?>
<html>
<body>
    <table border="1">
    <tr>
        <th>名前</th><th>趣味</th><th>メールアドレス</th>
    </tr>
    <?php foreach($arrays as $row){ ?>
<tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['hobby'];?></td>
        <td><?php echo $row['email'];?></td>
</tr>
    <?php } ?>
</table>
</body>
</html>