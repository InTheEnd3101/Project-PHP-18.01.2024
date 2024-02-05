<?php

// ДЗ 7. Власний callback
// 7.1. Написати програму на PHP, яка містить іменовану функцію, що приймає три аргументи: два обовʼязкових типу int і третій необовʼязковий типу closure
//Функція має повертати результат множення першого і другого аргументів, а в разі передачі третього аргументу (анонімної функції),
// перед return має викликати анонімну функції і передати в неї результат обчислення.

/*
    multiplyResult(int $num1, int $num2, ?Closure $callback = null): int {
    $result = $num1 * $num2;

    if (is_callable($callback)) {
        $callback($result);
    }

    return $result;
}

// без передачи анонимной функции
echo multiplyResult(5, 3) . "\n";

// с передачей анонимной функции
echo multiplyResult(5, 3, function ($result) {
        echo "Результат умножения перед обработкой: $result\n";
    }) . "\n";
*/


// 7.2. Реалізувати аноннімну функцію, яка виводить на екран переданий аргумент.

$printArgument = function ($argument) {
    echo "Выводим аргумент: $argument \n";
};

$argumentValue = "Hello, world!";
$printArgument($argumentValue);