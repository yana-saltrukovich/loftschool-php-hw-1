<?php
$bmv = [
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
$newArr['opel'] = $opel;

foreach ($newArr as $name => $val) {
    echo "CAR " . $name . "<br/>";
    $char=implode(",",$val);
    echo $char;
    echo "<br/><br/>";
}

