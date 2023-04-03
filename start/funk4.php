<?php
//$age = 20;
//
//if ($age <= 5) {
//    echo " $age > с 5 до 7 ходит в садик ";
//}
//else if($age <= 8)
// {
//    echo " $age < с 7 до 15 ходит в школу ";
//}
//else if($age <= 20)
//  echo " $age < с 15 до 20 ходит в институт ";
//{
//    echo " $age < с 20 до 70 ходит в на работу ";
//}

    function woz($age){
        if ($age <= 5) {
            echo " $age > с 5 до 7 ходит в садик ";
        }
        else if($age <= 8)
        {
            echo " $age < с 8 до 15 ходит в школу ";
        }
        else if($age <= 20)
            echo " $age < с 16 до 20 ходит в институт ";
        {
            echo " $age < с 21 до 70 ходит в на работу ";
        }

    }
    woz(50);