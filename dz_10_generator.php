<?php

// ДЗ 10. Генератор Фібоначчі

function fibonacciGenerator(int $maxValue)
{
    $current = 0;
    $next = 1;
    yield $current;

    while ($current + $next < $maxValue) {
        $temp = $next;
        $next = $current + $next;
        $current = $temp;
        yield $current;
    }
}

function printFibonacciNumbers($maxValue)
{
    foreach (fibonacciGenerator($maxValue) as $number) {
        echo $number . ' ' . PHP_EOL;
    }
}

printFibonacciNumbers(100); // Выводим числа Фибоначчи меньше 100


