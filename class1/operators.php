<?php
/*
Operator Precedence
Arithmetic Operators ==(+ - * / %)
Assignment Operators
Bitwise Operators
Comparison Operators === (Equal==) (Identical===) (Not equal!=)(Not equal<>) (Not identical !==)
Error Control Operators ===PHP supports one error control operator: the at sign (@).
Execution Operators== execution operator: backticks (``)
Incrementing/Decrementing Operators
Logical Operators
String Operators
Array Operators
Type Operators

 */

/*
Operator Precedence

The precedence of an operator specifies how "tightly" it binds two expressions together. For example, in the expression 1 + 5 * 3, the answer is 16 and not 18 because the multiplication ("*") operator has a higher precedence than the addition ("+") operator. Parentheses may be used to force precedence, if necessary. For instance: (1 + 5) * 3 evaluates to 18.

When operators have equal precedence their associativity decides how the operators are grouped. For example "-" is left-associative, so 1 - 2 - 3 is grouped as (1 - 2) - 3 and evaluates to -4. "=" on the other hand is right-associative, so $a = $b = $c is grouped as $a = ($b = $c).
 */

/*
Arithmetic Operators

Example     Name                 Result
+$a         Identity             Conversion of $a to int or float as appropriate.
-$a         Negation             Opposite of $a.
$a + $b     Addition             Sum of $a and $b.
$a - $b     Subtraction         Difference of $a and $b.
$a * $b     Multiplication         Product of $a and $b.
$a / $b     Division             Quotient of $a and $b.
$a % $b     Modulo                 Remainder of $a divided by $b.
$a ** $b     Exponentiation         Result of raising $a to the $b'th power.
 */
$l   = 12;
$m   = 45;
$n   = 9;

$add       = $n + $m + $l;
$substract = $n + $m - $l;
$multipli  = ( $m * $n ) + $l;
$division  = ( $m / $n ) + ( $l + 8 );
echo "{$add} \n";
echo "{$substract} \n";
echo "{$multipli} \n";
echo "{$division} \n";
echo $division % 4; // Modulas mane vagshe
echo "\n";
echo $division % 9; // Modulas mane vagshe
echo "\n";

/*
The basic assignment operator is "=".

Arithmetic Assignment Operators
Example      Equivalent           Operation
$a += $b     $a = $a + $b         Addition
$a -= $b     $a = $a - $b         Subtraction
$a *= $b     $a = $a * $b         Multiplication
$a /= $b     $a = $a / $b         Division
$a %= $b     $a = $a % $b         Modulus
$a **= $b    $a = $a ** $b        Exponentiation

Bitwise Assignment Operators
Example      Equivalent           Operation
$a &= $b     $a = $a & $b         Bitwise And
$a |= $b     $a = $a | $b         Bitwise Or
$a ^= $b     $a = $a ^ $b         Bitwise Xor
$a <<= $b    $a = $a << $b        Left Shift
$a >>= $b    $a = $a >> $b        Right Shift

Other Assignment Operators
Example      Equivalent           Operation
$a .= $b     $a = $a . $b         String Concatenation
$a ??= $b    $a = $a ?? $b        Null Coalesce

 */
echo "=============\n";
/*
echo "
Bitwise Operators
Example         Name                     Result
$a & $b         And                     Bits that are set in both $a and $b are set.
$a | $b         Or (inclusive or)       Bits that are set in either $a or $b are set.
$a ^ $b         Xor (exclusive or)      Bits that are set in $a or $b but not both are set.
~ $a            Not                     Bits that are set in $a are not set, and vice versa.
$a << $b        Shift left              Shift the bits of $a $b steps to the left (each step means "multiply by two")
$a >> $b        Shift right             Shift the bits of $a $b steps to the right (each step means "divide by two")
\n";
 */
echo "=============\n";

/*
Comparison Operators
Example      Name              Result
$a == $b     Equal             true if $a is equal to $b after type juggling.
$a === $b    Identical         true if $a is equal to $b, and they are of the same type.
$a != $b     Not equal         true if $a is not equal to $b after type juggling.
$a <> $b     Not equal         true if $a is not equal to $b after type juggling.
$a !== $b    Not identical     true if $a is not equal to $b, or they are not of the same type.
$a < $b      Less than         true if $a is strictly less than $b.
$a > $b      Greater than      true if $a is strictly greater than $b.
$a <= $b     Less than or equal to         true if $a is less than or equal to $b.
$a >= $b     Greater than or equal to      true if $a is greater than or equal to $b.
$a <=> $b    Spaceship                     An int less than, equal to, or greater than zero when $a is less than,
equal    to, or greater than $b, respectively.

/*
Incrementing/Decrementing Operators
Example     Name             Effect
++$a     Pre-increment      Increments $a by one, then returns $a.
$a++     Post-increment     Returns $a, then increments $a by one.
--$a     Pre-decrement      Decrements $a by one, then returns $a.
$a--     Post-decrement     Returns $a, then decrements $a by one.

 */
/*
Logical Operators
Example         Name        Result
$a and $b       And         true if both $a and $b are true.
$a or $b        Or          true if either $a or $b is true.
$a xor $b       Xor         true if either $a or $b is true, but not both.
!$a             Not         true if $a is not true.
$a && $b        And         true if both $a and $b are true.
$a || $b        Or          true if either $a or $b is true.

 */

/*
String Operators

There are two string operators. The first is the concatenation operator ('.'), which returns the concatenation of its right and left arguments. The second is the concatenating assignment operator ('.='), which appends the argument on the right side to the argument on the left side.
 */

/*
Array Operators
Example     Name             Result
$a + $b     Union            Union of $a and $b.
$a == $b    Equality         true if $a and $b have the same key/value pairs.
$a === $b   Identity         true if $a and $b have the same key/value pairs in the same order and of the same types.
$a != $b    Inequality       true if $a is not equal to $b.
$a <> $b    Inequality       true if $a is not equal to $b.
$a !== $b   Non-identity     true if $a is not identical to $b.
 */

 /* 
 Type Operators ¶

instanceof is used to determine whether a PHP variable is an instantiated object of a certain class: 
 */
/* 
Scope Resolution Operator (::)
*/




