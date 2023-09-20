<?php
$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $first + $second;
    echo $fibonacci . " ";
    
    if ($fibonacci > 100) {
        break;
    }
    
    $first = $second;
    $second = $fibonacci;
}

