<?php


function ploshad($a,$b){
    $s = $a * $b;
    echo "Площадь равна " . $s . "<br>";
}

ploshad(13,17);



// 1. Периметр прямоугольника
// 2. Периметр треугольника
// 3. Диаметр круга, имея радиус


function pram($a,$b,$d){
    $s = $a * $b * $d;
    echo "Периметр прямоугольника равен " . $s . "<br>";
}
Pram(3,7,9);


function treug($a,$b,$d){
    $s = $a + $b + $d;
    echo "Периметр треугольника равен " . $s . "<br>";
}

treug(77,57,99);

function diam($radius)
{
    $diametr = $radius * 5;
    echo "Диаметр круга = " . $diametr . "<br>";
}
    diam(99);


function rub($a,$b){
    $s = $b * $a;

    echo $b." Рублей равен " . $s . " Долларов  <br>";
}
rub(75,5);


function dollar($a,$b){
    $s = $b / $a;
    $f = round($s,2);
    echo $b." Долларов равен " . $f . " Рублей <br>";
}
dollar(75,5);






