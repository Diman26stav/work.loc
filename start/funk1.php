<?php

//
//function pram($a, $b, $d)
//{
//    $s = $a * $b * $d;
//    echo "Периметр прямоугольника равен " . $s . "<br>";
//}
//
//Pram(3, 7, 9);
//
//
//function treug($a, $b, $d)
//{
//    $s = $a + $b + $d;
//    echo "Периметр треугольника равен " . $s . "<br>";
//}
//
//treug(77, 57, 99);
//
//function diam($radius)
//{
//    $diametr = $radius * 5;
//    echo "Диаметр круга = " . $diametr . "<br>";
//}
//
//diam(99);
//
//
//function duym($a, $b)
//{
//    $s = $b * $a;
//    echo $b . " Дюйм равен " . $s . " см  <br>";
//}
//
//duym(3, 5);
//
//
//function cm($a, $b)
//{
//    $s = $b / $a;
//    $f = round($s, 2);
//    echo $b . " см " . $f . " дюйм <br>";
//}
//
//cm(3, 10);

//function ploshad($a, $b)
//{
//    $s = $a * $b;
//    if ($s >= 1000) {
//        echo 'Введите число меньше 1000';
//        exit();
//    } elseif ($s <= 0 || $b <= 0) {
//        echo 'Введите число больше 0';
//    } else {
//        echo "Площадь равна " . $s . "<br>";
//    }
//    ploshad(11, 33);
//}

//function obem($a, $b, $c)
//{
//    $s = $a * $b * $c;
//    echo "a = " . $a . "b = " . $b . "c = " . $c . "объём равен " . $s . "<br>";
//}
//
//
//
//
//
//for ($i = 1; $i <= 100; $i++) {
//    obem($i, $i, $i);
//
//
//}

function days($a,$b){
    $s = $b * $a;
    echo $b." Дней " . $s . " Часов  <br>";
}
days(24,1);



function hour ($a,$b){
    $s = $b / $a;
    echo $b." Часов " . $s . " Дней <br>";
}
hour(24,48);


function stoim($km){
    $rashod = 8.6;
    $cena = 55;
    $za1km = $rashod / 100;
    $vsegoBenz = $za1km * $km;
    $summa = $vsegoBenz * $cena;

//    echo $vsegoBenz;
    echo $km . "км. Проехали, " .$vsegoBenz." Бенз " . $summa . " Цена <br>";
}
stoim(1200);


function cena ($cena,$km){
    $summa = $cena * $km;
    echo $summa . " сумма <br>";
}
//cena(4.73,5);



