<?php
/*  Data types
integer (there is no unsigned integer in PHP language)
string
Double/float
boolean
null
array
object
Resource
 */

// Use of var_dump() function

$mango = "Mango = I like to eat mango";
$lichi = 20;
$money = 12.15;
$taka  = 4.555555555500005;
$true  = true;
$robin = ['ami', 'tumi', 'she'];
$value = Null;

//gettype() function used for identify the data type
print gettype( $taka ) . " --this is taka" . "\n";
echo "=============\n";

var_dump( $mango, $lichi, $money, $taka, $true, $robin, $value ) . "\n";

echo "=============\n";

$hello  = "Bangladesh";
$bangla = "This is my mother land.";

//If we concat two variable there are two way
echo "I love " . $hello . " " . $bangla . "\n";
echo "=============\n";
echo "I love {$hello}, {$bangla} \n";

$fname = "Earth";
$uname = strtoupper( $fname );
echo "We're live on {$uname} \n";
echo "=============\n";

//use of printf()
printf( "We're live on %s \n", $fname );
printf( "We're live on %s \n", strtoupper( $fname ) );
echo "=============\n";

$namef = "Md.";
$mname = "Rasedul";
$lname = "Islam";

printf( "My %s name is %s %s %s \n", "full", $namef, $mname, $lname );
echo "=============\n";
// Multiline Print
echo "I love my country.
        The of my country is bangladesh.
        Bangladesh in a riverine country. \n";

echo "=============\n";

echo " His name is
{$namef}
{$mname}
{$lname}.
His a laravel trainee.";

//you can show out put different way
$planet  = "Sun";
$planet1 = "Uretus";

echo "The smallest planet is " . $planet . " and the biggest planet is " . $planet1 . "\n";
echo "=============\n";
echo "The smallest planet is {$planet} and the biggest planet is {$planet1} \n";
echo "=============\n";
printf( "The smallest planet is %s and the biggest planet is %s\n", $planet, $planet1 );
echo "=============\n";
printf( "The smallest planet is %s and the biggest planet is %s\n", strtoupper( $planet ), strtolower( $planet1 ) );