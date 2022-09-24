<?php

echo "Input Numbers:\n";
do {
    $a = readline();
    $b = readline();
    if($a > 100 || $b > 100){
        echo "Input numbers less than 100!\n";
        continue;
    }
    else {
        echo $a * $b;
        echo "\nInput Numbers:\n";
    }

} while($a != 0 && $b != 0);