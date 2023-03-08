<?php
//small project by if..elseif..else condition

//1. Dividable by 4?
//2. Dividable by 100?
//3. Dividable by 400?
$year=1900;
//This is a readable code for any php coder
if ($year%4==0&& $year%100==0 && $year%400 ==0) {
    echo "{$year} is a leap year";
} elseif ($year%4==0 && $year%100 == 0) {
    echo "{$year} is a leap year";
}elseif ($year%4==0) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

echo PHP_EOL;

//This condition and upper condition same purpose
//This is a smart code but not easy to readable code for any php coder
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 != 0)) {
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year";
}