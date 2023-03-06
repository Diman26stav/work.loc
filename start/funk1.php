<?php


function cook($ingredients, $meal)
{
    // echo "Беру $ingredients <br/>";
    // echo "Готовлю... <br/>";
    return "Блюдо $meal готово";
}

$meal = cook("мясо, тесто , яйца", "Суп");
var_dump($meal);
