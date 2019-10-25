<?php
$i = 1;
while($i <= 100){
    if($i % 5 === 0 && $i % 3 === 0 ){
        echo 'FizzBuzz<br>';
        }
        
    if($i % 3 === 0 ){
            echo 'Fizz<br>';
            }
       
    if($i % 5 === 0 ){
            echo 'Buzz<br>';
            }
        $i ++;
        echo $i;
    }
