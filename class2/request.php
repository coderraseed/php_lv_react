<?php 

//Super global variables are built-in variables that are always available in all scopes.
//An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE. 
/* 
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:
*/
/* 
! The $_REQUEST superglobal variable in PHP is used to retrieve variables sent in both the HTTP GET and POST requests. However, it has a few limitations that you should be aware of:

    Security: Since $_REQUEST can retrieve both $_GET and $_POST variables, it can also be manipulated by the user, making it a potential security risk. As with $_GET and $_POST, you should always validate and sanitize data received through $_REQUEST.

    Conflicts: Since $_REQUEST can retrieve variables from both $_GET and $_POST, it can sometimes lead to naming conflicts if a variable has the same name in both requests. This can cause unexpected behavior and should be avoided.

    Limited Use: Similar to $_GET and $_POST, $_REQUEST should only be used for passing simple data between pages, such as search terms or page numbers. If you need to pass complex data or sensitive information, you should use a more secure method, such as $_POST or a session variable.

Overall, $_REQUEST can be a useful tool for retrieving data from both $_GET and $_POST requests, but you should be aware of its limitations and use it judiciously to avoid potential security risks and naming conflicts.
*/