<?php

// 1st task - Написати програму на PHP, яка порівнює різні типи даних (цілі числа, рядки, логічні значення та інші)
// за допомогою операторів суворого і несуворого порівняння та виводить результат порівняння на екран.

echo "Вітаю в програмі, яка порівнює різні типи даних (цілі числа, рядки, логічні значення та інші).\n\n[1] - Порівняння float та bool: \n";
echo "-------------------------------\n";
        $a1 = 555.555; //float
        $b1 = true; //bool

        $c1 = (bool)5555.555;
        $d1 = (string)true;

    echo "→ Несуворе:\n";
        var_dump( $a1 == $b1); //bool(true)
        var_dump( $c1 == $d1); //bool(true)
    echo "→ Суворе:\n";
        var_dump($a1 === $b1); //bool(false)
        var_dump( $c1 === $d1); //bool(false)
    echo "-------------------------------\n";


echo "[2] - Порівняння int та string:\n";
        $a2 = '1'; //string
        $b2 = 100; //int

        $c2 = (int)'1';
        $d2 = 1;

    echo "→ Несуворе:\n";
        var_dump( $a2 == $b2); //bool(false)
        var_dump( $c2 == $d2); //bool(true)
    echo "→ Суворе:\n";
        var_dump($a2 === $b2); //bool(false)
    var_dump( $c2 === $d2); //bool(true)
    echo "-------------------------------\n";

echo "[3] - Порівняння string та bool :\n";
        $a3 = ""; //string
        $b3 = false; //bool

        $c3 = (int)"";
        $d3 = false;

    echo "→ Несуворе:\n";
        var_dump( $a3 == $b3); //bool(true)
        var_dump( $c3 == $d3); //bool(true)
    echo "→ Суворе:\n";
        var_dump($a3 === $b3); //bool(false)
        var_dump( $c3 === $d3); //bool(false)
    echo "-------------------------------\n";

echo "[4] - Порівняння bool та null :\n";
        $a4 = true; //bool
        $b4 = null; //null

        $c4 = (int)true;
        $d4 = (string)null;

    echo "→ Несуворе:\n";
        var_dump( $a4 == $b4); //bool(false)
        var_dump( $c4 == $d4); //bool(false)
    echo "→ Суворе:\n";
        var_dump($a4 === $b4); //bool(false)
        var_dump( $c4 === $d4); //bool(false)
    echo "-------------------------------\n";


echo "[5] - Порівняння int та float :\n";
        $a5 = 999; //int
        $b5 = 999.999; //float

        $c5 = (float)999;
        $d5 = (bool)999.999;

    echo "→ Несуворе:\n";
        var_dump( $a5 == $b5); //bool(false)
        var_dump( $c5 == $d5); //bool(true)
    echo "→ Суворе:\n";
        var_dump($a5 === $b5); //bool(false)
        var_dump( $c5 === $d5); //bool(false)
    echo "------------------ THE END -------------\n";

