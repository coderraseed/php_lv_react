<?php
$fname = isset( $_REQUEST['first-name'] ) ? $_REQUEST['first-name'] : "Md Rasedul";
$lname = isset( $_REQUEST['last-name'] ) ? $_REQUEST['last-name'] : " Islam";
$email = isset( $_REQUEST['email'] ) ? $_REQUEST['email'] : "coderraseed@gmail.com";

?>

<div class="mb-4">
            <p> <?php  echo "My first name: {$fname}"; ?></p>
            <p> <?php  echo "My last name: {$lname}" ;?></p>
            <p> <?php  echo "My email address: {$email}"; ?></p>
        </div>