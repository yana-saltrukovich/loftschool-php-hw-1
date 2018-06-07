<?php
$bmv =[
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
];
$toyota = [
    "model" => "camry",
    "speed" => 90,
    "doors" => 4,
    "year" => "2008"
];
$opel = [
    "model" => "astra",
    "speed" => 110,
    "doors" => 2,
    "year" => "2012"
];
$newArr = array();
$newArr['bmv'] = $bmv;
$newArr['toyota'] = $toyota;
$newArr['open'] = $opel;

echo "CAR <br/>";
foreach($newArr['bmv'] as $key )//=> $value)
echo $key.' '.$value;