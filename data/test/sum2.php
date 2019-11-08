<?php
$i = 1;
$sum = 0;
while($i <= 100){
    if($i % 7 === 0){
        echo $i.'は7の倍数です<br>';
        $sum += $i;
        //累積する
    }
    $i++;
}
    echo '合計は'.$sum;