<?php
function printFibonacciSeries($n) {
    $first = 0;
    $second = 1;
    
    for ($i = 1; $i <= $n; $i++) {
        echo $first . " ";
        $temp = $first;
        $first = $second;
        $second = $temp + $second;
    }
}

$n = 15;
printFibonacciSeries($n);
