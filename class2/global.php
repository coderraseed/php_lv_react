<?php 

///$GLOBALS AND global
$a = "Something";
function globalFunction(){
    global $a;
    return $a;
}
echo globalFunction();
echo PHP_EOL;

$b = "Nothing";
function globalArrayFunction(){
    
    return $GLOBALS['a'];
}
echo globalFunction();