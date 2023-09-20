<?php

$number1 = 0;
$number2 = 1;


echo "First 10 Fibonacci numberbers are: ";

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $number1 + $number2;
    if ($fibonacci > 100) {
        break;
    }
    
    echo $fibonacci . " ";

    $number1 = $number2;
    $number2 = $fibonacci;

}