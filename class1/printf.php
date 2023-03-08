<?php 
//More few words about Printf() function 

$fname = "Hasin";
$lname = "Hayder";

printf("My php teacher's full name is %s %s\n", $fname, $lname);

// sprintf() function return the value
$output=sprintf("My php teacher's full name is %s %s\n", $fname, $lname);
echo $output. "\n";
echo strtoupper($output). "\n";