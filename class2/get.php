<?php 

/*
!   Super global variables are built-in variables that are always available in all scopes.

!   PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.

An associative array of variables passed to the current script via the URL parameters (aka. query string). Note that the array is not only populated for GET requests, but rather for all requests with a query string. 

*/
print_r($_GET). "\n";
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
echo PHP_EOL;

if (isset($_GET['name'])) {
    echo $_GET['name'];
}else {
    echo " ";
}

//Short hand statement

$name = isset($_GET['name']) ? $_GET['name'] : null;

echo $name;



/* 
! The $_GET superglobal variable in PHP is used to retrieve variables passed in the URL query string. It has a few limitations that you should be aware of:

    Security: Since $_GET variables are passed in the URL query string, they can be manipulated by the user, and therefore, can be a potential security risk. Hackers can use this to inject malicious code into your website.

    Data Type: $_GET variables are passed as strings, and PHP automatically converts them to the appropriate data type when used. However, this can sometimes cause unexpected behavior, such as when a string is converted to a number.

    Data Length: $_GET variables are limited in length to the maximum allowed by the server configuration. If you attempt to pass a value that exceeds this limit, it will be truncated.

    Limited Use: $_GET variables should only be used for passing simple data between pages, such as search terms or page numbers. If you need to pass complex data or sensitive information, you should use a more secure method, such as $_POST or a session variable.

Overall, $_GET is a useful tool for passing data between pages, but you should be aware of its limitations and use it judiciously to avoid potential security risks.
*/