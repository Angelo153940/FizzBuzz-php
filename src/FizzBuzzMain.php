<?php

namespace Deg540\CleanCodeKata9;

require_once __DIR__ . '/FizzBuzz.php';

$fizzBuzz = new FizzBuzz(1);
$number = $fizzBuzz->calculateFizzBuzz();
echo $number . "\n";
for ($i = 2; $i <= 100; $i++) {
    $fizzBuzz->setFizzBuzz($i);
    $number = $fizzBuzz->calculateFizzBuzz();
    echo $number . "\n";
}
