<?php

echo "1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision" . PHP_EOL . PHP_EOL;

function even_odd($number)
{
    if ($number % 2 == 0) {
        return "Even number";
    } else {
        return "Odd number";
    }
}

echo even_odd(8);

echo PHP_EOL . PHP_EOL;

echo "2. 1+2+3...…….100  Write a loop to calculate the summation of the series" . PHP_EOL . PHP_EOL;

$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    $sum += $i;
}

echo "Result is {$sum}";
