<?php

// 1st task - запитує імʼя і виводить в консоль кілька рядків привітання по імені
// echo "Hello, what is your name? \n";
// $name = trim(fgets(STDIN));
// echo "Hi, $name! How old are you? \n";
// $age = trim(fgets(STDIN));
        // if ($age <= 16) {
        //    echo "Ohhh, you're only $age years old, so you're still a schoolboy, go study your homework! \n";
        // }
        // else if($age >= 17 && $age <= 60) {
        //    echo "Wow, you're $age years old! It's time to make money! Write the amount how much you earn per month? \n";
        //    $money = trim(fgets(STDIN));
        //   echo "$name, you have good amount $money, don't stop there! Best wishes! Good luck! \n";
////}
        //else  {
        //   echo "My friend, it's time for you to retire. What is your pension? \n";
        //    $pension = trim(fgets(STDIN));
        //    echo "$name, Is your pension $pension? I wish you an increase in your pension and good luck! \n";
        //}


// 2nd task - приймає кілька числових аргументів і виводить їх суму та середне арифметичне
echo trim("Привет!\n> Введите [1] - для просчета суммы аргументов\n> Введите [2] - для просчета среднего арифметического:\n");
echo "\n";
$option = trim(fgets(STDIN));
        if ($option == 1) {
            echo trim("Принято! Считаем сумму аргументов!\n> Введите первый аргумент: \n");
            $a1 = trim(fgets(STDIN));

                if (is_numeric($a1)) {
                    echo trim("Отлично! Вы ввели первый аргумент: $a1 \n> Вводим второй аргумент: \n");
                } else {
                    echo trim("Ошибка! Ввести можно только число, повторите попытку ещё раз. \n");
                    return;
                }
                $a2 = trim(fgets(STDIN));
                if (is_numeric($a2)) {
                    echo trim("Прекрасно! Вы ввели второй аргумент: $a2 \n> И третий аргумент: \n");
                    } else {
                        echo trim("Ошибка! Ввести можно только число, повторите попытку ещё раз. \n");
                        return;
                    }
                $a3 = trim(fgets(STDIN));
                if (is_numeric($a3)) {
                    echo trim("Получилось! Вы ввели такие аргументы: $a1,$a2,$a3. Для получения результата, нажмите ENTER \n");
                } else {
                    echo trim("Ошибка! Ввести можно только число, повторите попытку ещё раз. \n");
                    return;
                }
            trim(fgets(STDIN));
            $sum = $a1 + $a2 + $a3;
            echo "\n";
            echo ">>> Сумма введенных аргументов: $sum \n\n";
        }
elseif ($option == 2) {
            echo trim("Принято! Считаем сумму аргументов!\n> Введите первый аргумент: \n");
            $b1 = trim(fgets(STDIN));

                if (is_numeric($b1)) {
                    echo trim("Отлично! Вы ввели первый аргумент: $b1 \n> Вводим второй аргумент: \n");
                } else {
                    echo trim("Ошибка! Ввести можно только число, повторите попытку ещё раз. \n");
                    return;
                }
                $b2 = trim(fgets(STDIN));
                if (is_numeric($b2)) {
                    echo trim("Прекрасно! Вы ввели второй аргумент: $b2 \n> И третий аргумент: \n");
                } else {
                    echo trim("Ошибка! Ввести можно только число, повторите попытку ещё раз. \n");
                    return;
                }
                $b3 = trim(fgets(STDIN));
                if (is_numeric($b3)) {
                    echo trim("Получилось! Вы ввели такие аргументы: $b1,$b2,$b3. Для получения результата, нажмите ENTER \n");
                } else {
                    echo trim("Ошибка! Ввести можно только число, повторите попытку ещё раз. \n");
                    return;
                }
            trim(fgets(STDIN));
            $sum1 = ($b1 + $b2 + $b3)/3;
            echo "\n";
            echo ">>> Среднее арифметическое введенных аргументов: $sum1 \n\n";
        }
else {
            echo trim("Ошибка! Ввести можно [1] или [2]. Повторите попытку ещё раз. \n\n");
            return;
}

