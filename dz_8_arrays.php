<?php

// Написати програму на PHP, яка створює масив із випадкових чисел та:
// - знаходить найбільший та найменший елемент масиву
// - сортує масив та виводить його у відсортованому вигляді

$itemsCount = 7;

$itemsNumbers = [];
$itemsNumbersTwo = [];

for ($i = 0; $i < $itemsCount; $i++) {
    $itemsNumbers[] = rand(1, 100);
    $itemsNumbersTwo[] = rand(1, 100);
}
sort($itemsNumbers);

$itemsNumbersMax = max($itemsNumbers);
$itemsNumbersMin = min($itemsNumbers);

arsort($itemsNumbersTwo);

print_r($itemsNumbers); // Выводим весь массив, сортировка от меньше к большему

print_r('Наибольший элемент массива: ' . $itemsNumbersMax);
echo "\n";
print_r('Наименьший элемент массива: ' . $itemsNumbersMin);
echo "\n";
echo "\n";
print_r($itemsNumbersTwo); // Сортировка массива от большего к меньшему





