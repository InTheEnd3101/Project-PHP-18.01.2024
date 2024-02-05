<?php

// ДЗ 6. Користувацькі функції
// 1. Написати програму на PHP, яка містить користувацьку функцію для обчислення площі кола та демонструє використання передачі даних у функцію за допомогою параметрів.


$radius = 25;
function circleArea($radius) {
    $pi = 3.1415;
    $area = $pi * $radius * $radius;
    return $area;
}
echo PHP_EOL;
echo 'Площа круга: ' . circleArea($radius) . PHP_EOL;


// 2. Написати програму на PHP, яка приймає число і підносить його до ступеню.
/*function exponentiate($base, $exponent) {
    $result = pow($base, $exponent);
    return $result;
}

$number = 2;
$degree = 0;

$result = exponentiate($number, $degree);
echo PHP_EOL;
echo 'Ваш результат: ' . $result . PHP_EOL;*/


// 3. Використайте функцію в двох варіантах: коли вона повертає нове число і змінює передане.
// 3.1. Функцію, яка повертає нове число
/*function increaseByOne($number) {
    $newNumber = $number + 1;
    return $newNumber;
}

$number = 5;
$increasedNumber = increaseByOne($number);

echo PHP_EOL . $increasedNumber . PHP_EOL;
echo $number . PHP_EOL;*/

// 3.2. Функція, яка змінює передане число

/*function modifyNumber(&$number) {
=======
function modifyNumber(&$number) {

    $number += 1; // Додаємо 1 до значення змінної, переданої за посиланням
}

$number = 5;
modifyNumber($number);

echo PHP_EOL . $number . PHP_EOL;
echo PHP_EOL . $number . PHP_EOL;
*/

