<?php

// Цикл While.
// 1. Виведіть на екран всі числа від 1 до 10 використовуючи цикл while

/*$i = 1;
while ($i <= 10) {
    echo $i;
    if ($i < 10) {
        echo ", " . PHP_EOL;
    }
    $i++;
}
echo PHP_EOL;*/

// 2. Обчисліть факторіал числа 5 використовуючи цикл while.

/*$number = 5;
$factorial = 1;

while($number > 0) {
    $factorial *= $number;
    $number--;
}

echo "Факториал числа 5 равен: " . $factorial . PHP_EOL;*/

// 3. Виведіть на екран всі парні числа від 1 до 20 використовуючи цикл while.

$number = 1;

while ($number <= 20) {
    if ($number % 2 == 0) {
        echo $number . ' ' . PHP_EOL; //
    }
    $number++; //
}