<?php

function fibonacciSequenceStr($n) {
    $fibonacci = array('0', '1');
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = bcadd($fibonacci[$i - 1], $fibonacci[$i - 2]);
    }
    
    return $fibonacci;
}

$sequenceLengthDigit = 100;
$fibonacciSequence = fibonacciSequenceStr($sequenceLengthDigit);

foreach ($fibonacciSequence as $number) {
    echo $number . "\n";
}