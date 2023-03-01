<?php

$months = ["Xabib ", "Konor ","Dima ","Misha ","Akakiy "];
echo $months[0];

$person = [
    "name" => "Xabib",
    "surname" => "Doe",
    "age" => 35,
    "months" => [
                    "Xabib",
                    "Konor",
                    "Dima",
                    "Misha",
                    "Akakiy"
    ]

];

echo $person['months'][1];
echo $person['months'][2];
echo $person['months'][3];
echo $person['months'][4];
echo $person['months'][5];

?>