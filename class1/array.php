<?php

// this is an index array
$trainees = [
    "Rabin",
    "Rabiul",
    "Rabbil",
    "Ripon",
];

// this is an associative array
$trainees = [
    1   =>  "Robin",
    2   =>  "Rabiul",
    3   =>  "Rabbil",
    4   =>  "Ripon",
];
echo $trainees[1];
echo PHP_EOL;
$foods = [
    "vegetables" => "Carrot, Capsicum, Brinjal, Brocolli",
    "fruits" => "Orange, apple, banana, mango",
    "drinks" => "water, cocacolla, 7up, pepsi",
];
$foods['dirnks'] = $foods['drinks'] . ", orange juice";
$foods['dirnks'] .= ", mango juice";

//echo $foods["0"];// no out put show
/* echo $foods["vegetables"];// write this way
echo count($foods);echo PHP_EOL; */
//this loop not allow for associative array this way 
/*$m = count($trainees);
 for ($i=0; $i <=$m; $i++) { 
    echo $trainees[$i] . "\n";
} */

/* foreach ($foods as $key => $value) {
    echo $key . "=" . $value . "\n";
} */

/* $keys = array_keys($foods);
$count = count($keys);
//print_r($keys);
for ($i=0; $i <$count; $i++) { //this loop not allow for associative array
    $ke = $keys[$i];
    echo $foods[$ke] . "\n";
} */
$values = array_values($foods);
$count = count($values);
for ($i=0; $i <$count; $i++) { //this loop not allow for associative array
    $ke = $values[$i];
    echo $ke . "\n";
}