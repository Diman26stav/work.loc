<?php


function ploshad($a,$b){
    $s = $a * $b;
    echo "Площадь равна " . $s . "<br>";
}

ploshad(3,7);



// 1. Периметр прямоугольника
// 2. Периметр треугольника
// 3. Диаметр круга, имея радиус


function pram($a,$b,$d){
    $s = $a * $b * $d;
    echo "Периметр прямоугольника равен " . $s . "<br>";
}
Pram(5,7,9);


function treug($a,$b,$d){
    $s = $a * $b * $d;
    echo "Периметр треугольника равен " . $s . "<br>";
}

treug(4,6,8);

function diam($radius)
{
    $diametr = $radius * 2;
    echo "Диаметр круга = " . $diametr . "<br>";
}
    diam(5);

