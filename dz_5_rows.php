<?php

// ДЗ 5. Робота з рядками.

echo trim("Введите любое предложение:\n");
echo "\n";
$string = trim(fgets(STDIN));
if ((mb_strlen($string) <= 20)) {
    echo 'Рядок имеет меньше 20 символов, и проверке не подлежит' . PHP_EOL;
} else {
    if (substr_count($string, '.') >= 2) {
        if (($position = mb_strpos($string, '.')) !==false)  {
            $resultString = trim(mb_substr($string, $position + 1));
            echo 'Наш результат ►►►:' . PHP_EOL;
            echo $resultString . PHP_EOL;
        }
    } else {
        echo 'Ваша строка содержит только одно предложение(' . PHP_EOL;
    }
}




