<?php 

/*
Constants are like variables except that once they are defined they cannot be changed or undefined.A constant is an identifier (name) for a simple value. The value cannot be changed during the script.A valid constant name starts with a letter or underscore (no $ sign before the constant name).
!Note: Unlike variables, constants are automatically global across the entire script.
*/
//Prior to PHP 8.0.0, constants defined using the define() function may be case-insensitive. 

$x ='ami valo asi';
$x ='amar mon kharap';

echo $x;
echo PHP_EOL;


define('PI', 3.14159);
echo PI; // outputs 3.14159
echo PHP_EOL;


//Magic constants
/* 
There are nine magical constants that change depending on where they are used. For example, the value of __LINE__ depends on the line that it's used on in your script. All these "magical" constants are resolved at compile time, unlike regular constants, which are resolved at runtime. These special constants are case-insensitive and are as follows: 


    Name 	            Description
__LINE__ 	            The current line number of the file.
__FILE__ 	            The full path and filename of the file with symlinks resolved. If used inside an include,  the name of the included file is returned.
__DIR__ 	            The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
__FUNCTION__ 	        The function name, or {closure} for anonymous functions.
__CLASS__ 	            The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, is the name of the class the trait is used in.
__TRAIT__ 	            The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
__METHOD__ 	            The class method name.
__NAMESPACE__ 	        The name of the current namespace. 
*/

// Valid constant names
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Invalid constant names
define("2FOO",    "something");

// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
define("__FOO__", "something"); 

