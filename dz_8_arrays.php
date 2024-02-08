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

$max = $itemsNumbers[0];
$min = $itemsNumbers[0];

$i = 1;
while ($i < count($itemsNumbers)) {

    if ($itemsNumbers[$i] > $max) {
        $max = $itemsNumbers[$i];
    }
    if ($itemsNumbers[$i] < $min) {
        $min = $itemsNumbers[$i];
    }
    $i++;
}


sort($itemsNumbers);
arsort($itemsNumbersTwo);

print_r($itemsNumbers); // Выводим весь массив, сортировка от меньше к большему

print_r('Наибольший элемент массива: ' . $max);
echo "\n";
print_r('Наименьший элемент массива: ' . $min);
echo "\n";
echo "\n";
print_r($itemsNumbersTwo); // Сортировка массива от большего к меньшему





