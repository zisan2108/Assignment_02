<?php

function printFibonacci($count) {
    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i < $count; $i++) {
        echo $num1 . " ";

        $temp = $num1 + $num2;
        $first = $num2;
        $second = $temp;
    }
}

echo "First 15 Fibonacci numbers are: ";

printFibonacci(15);