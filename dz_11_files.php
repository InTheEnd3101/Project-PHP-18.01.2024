<?php

// ДЗ 11. Робота з файловим сховищем
// 1. Написати програму на PHP, яка приймає з консолі аргументи, які введені, і записує їх в файл


function writeToFile(string $name)
{
    $fileName = '11_myFiles/file.txt';
    if (!file_exists($fileName)) {
        die("Файл не найден" . PHP_EOL);
    }

    $file = fopen($fileName, 'a+');
    fwrite($file, $name);
    fclose($file);

    return $file;
}

echo "Hello, what is your name? \n";
$name = trim(fgets(STDIN)) . PHP_EOL;
writeToFile($name);


// 2. Написати іншу програму, яка виводить з файлу логу останні аргументи попередньої програми, які були введені.

/*function showLastLine() : string
{
    $fileName = '11_myFiles/file.txt';

    if (!file_exists($fileName)) {
        die("Файл лога не найден");
    }

    $lines = file($fileName);
    $lastLine = trim(end($lines));
    return $lastLine;
}

echo 'Последняя строка в файле: ' . showLastLine() . PHP_EOL;*/