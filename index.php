<?php

function sum($a, $b)
{
    $s = $a + $b;
    return "dixmod says $a + $b = $s" . PHP_EOL;
}

$a = 10;
$b = 15;

echo sum($a, $b);