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

function ploshad($a, $b)
{
    $s = $a * $b;
    if ($s >= 1000) {
        echo 'Введите число меньше 1000';
        exit();
    } elseif ($s <= 0 || $b <= 0) {
        echo 'Введите число больше 0';
    } else {
        echo "Площадь равна " . $s . "<br>";
    }
    ploshad(11, 20);
}

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


function stoim($km, $rashod,$cena)
{
    $za1km = $rashod / 100;
    $vsegoBenz = $za1km * $km;
    $summa = $vsegoBenz * $cena;
return $summa;
   }

    $gaz = stoim(300,10,20);
    $benz = stoim(300,10,55);

    $vsego = $gaz + $benz;
    echo $vsego;

    echo "<br>" . stoim(2500,8.6,45);
    echo "<br>" . stoim(2500,8.6,20);

//   $benz = cena(750, 8.6, 48);
//
//    function stoimos($km, $rashod,$cena)
//
//    $rashod = stoimos()
//
//
//
//function days($a,$b){
//    $s = $b * $a;
//    echo $b." Дней " . $s . " Часов  <br>";
//}
//days(24,1);
//
//
//

function radius_es($ploshad, $p)
{
    $radius = $ploshad / $p;
    echo "<br>" . $ploshad . ' Площадь '. "<br>" . $radius .  ' Радиус ' . "<br>";
}
radius_es(100,3.14 );

//   echo "<br>".$ploshad =  pow(10, 2) / 4 * 3.14;



//radius();

$s = 100;
$n = 3.14;
$r = sqrt($s/$n);
echo "<br>".$r;


