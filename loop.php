<?php
function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

$start = 2;
$end = 20;
$step = 2;

printEvenNumbers($start, $end, $step);
