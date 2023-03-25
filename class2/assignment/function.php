<?php
  // define variables and set to empty values
  $first_name = $last_name = $email = $password = "";
  $first_name_err = $last_name_err = $email_err = $password_err = "";
 
  // function to sanitize input data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
  // process form data when form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // validate first name
    if (empty($_POST["first_name"])) {
      $first_name_err = "First name is required";
    } else {
      $first_name = test_input($_POST["first_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
        $first_name_err = "Only letters and white space allowed";
      }
    }
 
    // validate last name
    if (empty($_POST["last_name"])) {
      $last_name_err = "Last name is required";
    } else {
      $last_name = test_input($_POST["last_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
        $last_name_err = "Only letters and white space allowed";
      }
    }
 
    // validate email address
    if (empty($_POST["email"])) {
      $email_err = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if email address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
      }
    }
 
    // validate password
    if (empty($_POST["password"])) {
      $password_err = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
      // check if password is strong enough (at least 8 characters, contains at least one uppercase letter, one lowercase letter, and one number)
      if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$password)) {
        $password_err = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number";
      }
    }
 
    // if no errors, save data to CSV file
    if (empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($password_err)) {
      // create new row for CSV file
      $new_row = array($first_name, $last_name, $email, $password);
      // open CSV file for writing
      $file = fopen("users.csv","a");
      // write new row to CSV file
      fputcsv($file, $new_row);
      // close CSV file
      fclose($file);
 
      // redirect to login.php
      header("Location: login.php");
      exit();
    }
  }
?>
