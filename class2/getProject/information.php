<?php

$fname = isset($_GET['first-name']) ? $_GET['first-name'] : "Md Rasedul";
$lname = isset($_GET['last-name']) ? $_GET['last-name'] : " Islam";
$email = isset($_GET['email']) ? $_GET['email'] : "coderraseed@gmail.com";



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Milligram CSS Form Example</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
</head>
<body style="color:black; font-family: Tahoma">
	<div class="container">
		<h1>Supper global GET</h1>
		<p> <?php  echo "My first name: {$fname}" ?></p>
		<p> <?php  echo "My last name: {$lname}" ?></p>
		<p> <?php  echo "My email address: {$email}" ?></p>
	</div>
</body>
</html>