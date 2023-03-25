<?php 

//$_SERVER — Server and execution environment information

//$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server, therefore there is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here. However, most of these variables are accounted for in the » CGI/1.1 specification, and are likely to be defined. 

/* 

Indices ¶

'PHP_SELF'
    The filename of the currently executing script, relative to the document root. For instance, $_SERVER['PHP_SELF'] in a script at the address http://example.com/foo/bar.php would be /foo/bar.php. The __FILE__ constant contains the full path and filename of the current (i.e. included) file. If PHP is running as a command-line processor this variable contains the script name. 
'argv'
    Array of arguments passed to the script. When the script is run on the command line, this gives C-style access to the command line parameters. When called via the GET method, this will contain the query string. 
'argc'
    Contains the number of command line parameters passed to the script (if run on the command line). 
'GATEWAY_INTERFACE'
    What revision of the CGI specification the server is using; e.g. 'CGI/1.1'. 
'SERVER_ADDR'
    The IP address of the server under which the current script is executing. 
'SERVER_NAME'
    The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.

        Note: Under Apache 2, UseCanonicalName = On and ServerName must be set. Otherwise, this value reflects the hostname supplied by the client, which can be spoofed. It is not safe to rely on this value in security-dependent contexts. 

'SERVER_SOFTWARE'
    Server identification string, given in the headers when responding to requests. 
'SERVER_PROTOCOL'
    Name and revision of the information protocol via which the page was requested; e.g. 'HTTP/1.0'; 
'REQUEST_METHOD'
    Which request method was used to access the page; e.g. 'GET', 'HEAD', 'POST', 'PUT'.

        Note:

        PHP script is terminated after sending headers (it means after producing any output without output buffering) if the request method was HEAD.

'REQUEST_TIME'
    The timestamp of the start of the request. 
'REQUEST_TIME_FLOAT'
    The timestamp of the start of the request, with microsecond precision. 
'QUERY_STRING'
    The query string, if any, via which the page was accessed. 
'DOCUMENT_ROOT'
    The document root directory under which the current script is executing, as defined in the server's configuration file. 
'HTTPS'
    Set to a non-empty value if the script was queried through the HTTPS protocol. 
'REMOTE_ADDR'
    The IP address from which the user is viewing the current page. 
'REMOTE_HOST'
    The Host name from which the user is viewing the current page. The reverse dns lookup is based on the REMOTE_ADDR of the user.

        Note: The web server must be configured to create this variable. For example in Apache HostnameLookups On must be set inside httpd.conf for it to exist. See also gethostbyaddr(). 

'REMOTE_PORT'
    The port being used on the user's machine to communicate with the web server. 
'REMOTE_USER'
    The authenticated user. 
'REDIRECT_REMOTE_USER'
    The authenticated user if the request is internally redirected. 
'SCRIPT_FILENAME'

    The absolute pathname of the currently executing script.

        Note:

        If a script is executed with the CLI, as a relative path, such as file.php or ../file.php, $_SERVER['SCRIPT_FILENAME'] will contain the relative path specified by the user.

'SERVER_ADMIN'
    The value given to the SERVER_ADMIN (for Apache) directive in the web server configuration file. If the script is running on a virtual host, this will be the value defined for that virtual host. 
'SERVER_PORT'
    The port on the server machine being used by the web server for communication. For default setups, this will be '80'; using SSL, for instance, will change this to whatever your defined secure HTTP port is.

        Note: Under Apache 2, UseCanonicalName = On, as well as UseCanonicalPhysicalPort = On must be set in order to get the physical (real) port, otherwise, this value can be spoofed, and it may or may not return the physical port value. It is not safe to rely on this value in security-dependent contexts. 

'SERVER_SIGNATURE'
    String containing the server version and virtual host name which are added to server-generated pages, if enabled. 
'PATH_TRANSLATED'
    Filesystem- (not document root-) based path to the current script, after the server has done any virtual-to-real mapping.

        Note: Apache 2 users may use AcceptPathInfo = On inside httpd.conf to define PATH_INFO. 

'SCRIPT_NAME'
    Contains the current script's path. This is useful for pages which need to point to themselves. The __FILE__ constant contains the full path and filename of the current (i.e. included) file. 
'REQUEST_URI'
    The URI which was given in order to access this page; for instance, '/index.html'. 
'PHP_AUTH_DIGEST'
    When doing Digest HTTP authentication this variable is set to the 'Authorization' header sent by the client (which you should then use to make the appropriate validation). 
'PHP_AUTH_USER'
    When doing HTTP authentication this variable is set to the username provided by the user. 
'PHP_AUTH_PW'
    When doing HTTP authentication this variable is set to the password provided by the user. 
'AUTH_TYPE'
    When doing HTTP authentication this variable is set to the authentication type. 
'PATH_INFO'
    Contains any client-provided pathname information trailing the actual script filename but preceding the query string, if available. For instance, if the current script was accessed via the URI http://www.example.com/php/path_info.php/some/stuff?foo=bar, then $_SERVER['PATH_INFO'] would contain /some/stuff. 
'ORIG_PATH_INFO'
    Original version of 'PATH_INFO' before processed by PHP. 

Examples ¶

Example #1 $_SERVER example


*/

echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

/* 
!   The following table lists the most important elements that can go inside $_SERVER:
Element/Code 	Description
$_SERVER['PHP_SELF'] 	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE'] 	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR'] 	Returns the IP address of the host server
$_SERVER['SERVER_NAME'] 	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE'] 	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL'] 	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD'] 	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME'] 	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING'] 	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT'] 	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET'] 	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST'] 	Returns the Host header from the current request
$_SERVER['HTTP_REFERER'] 	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS'] 	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR'] 	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST'] 	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT'] 	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME'] 	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN'] 	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT'] 	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE'] 	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED'] 	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME'] 	Returns the path of the current script
$_SERVER['SCRIPT_URI'] 	Returns the URI of the current page
*/
?>