<?php 
//Super global variables are built-in variables that are always available in all scopes.

//An associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request. 
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';

/*
PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field:
*/

/* 
!   The $_POST superglobal variable in PHP is used to retrieve variables sent in the HTTP POST request. It has a few limitations that you should be aware of:

    Security: Although $_POST is generally considered more secure than $_GET because it does not expose data in the URL, it can still be manipulated by the user. Attackers can use techniques such as cross-site scripting (XSS) or SQL injection to inject malicious code into your website.

    Data Type: Like $_GET, $_POST variables are also passed as strings and PHP automatically converts them to the appropriate data type when used. This can sometimes cause unexpected behavior, such as when a string is converted to a number.

    Data Length: $_POST variables are also limited in length to the maximum allowed by the server configuration. If you attempt to send a value that exceeds this limit, it will be truncated.

    Limitations on File Uploads: When you submit a form using $_POST, you cannot upload files. Instead, you need to use the enctype="multipart/form-data" attribute in the <form> tag and the $_FILES superglobal variable to handle file uploads.

Overall, $_POST is a useful tool for submitting data to a server, but you should be aware of its limitations and use it judiciously to avoid potential security risks. You should also use appropriate validation and sanitization techniques to ensure that the data received is valid and safe to use.
*/