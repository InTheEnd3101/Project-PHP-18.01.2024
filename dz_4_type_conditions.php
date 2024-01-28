<?php

// ДЗ 4. Вивід в залежності від умови
// Type 1

echo trim("Приветcтвую! Введите число от 1 до 6 и получите результат:");
echo "\n";
$value = (string)fgets(STDIN);
        if (1 === $value) {
            echo 'green' . PHP_EOL;
        } elseif (2 === $value) {
            echo 'red' . PHP_EOL;
        } elseif (3 === $value) {
            echo 'blue' . PHP_EOL;
        } elseif (4 === $value) {
            echo 'brown' . PHP_EOL;
        } elseif (5 === $value) {
            echo 'violet' . PHP_EOL;
        } elseif (6 === $value) {
            echo 'black' . PHP_EOL;
        } else {
            echo 'white' . PHP_EOL;
        }


// Type 2

/*echo trim("Приветcтвую! Введите число от 1 до 6 и получите результат:");
echo "\n";
$value = fgets(STDIN);
switch ($value) {
    case 1:
        echo 'green' . PHP_EOL; break;
    case 2:
        echo 'red' . PHP_EOL; break;
    case 3:
        echo 'blue' . PHP_EOL; break;
    case 4:
        echo 'brown' . PHP_EOL; break;
    case 5:
        echo 'violet' . PHP_EOL; break;
    case 6:
        echo 'black' . PHP_EOL; break;
    default:
        echo 'white' . PHP_EOL;
}*/

// Type 3

/*$value = 0;
$result = match ($value) {
    1 => 'green ' . PHP_EOL,
    2 => 'red' . PHP_EOL,
    3 => 'blue' . PHP_EOL,
    4 => 'brown' . PHP_EOL,
    5 => 'violet' . PHP_EOL,
    6 => 'black' . PHP_EOL,
    default => 'white' . PHP_EOL
};
echo $result;*/