<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Define the file name and location for the CSV file
  $csv_file = 'registration.csv';

  // Get the form data and sanitize it
  $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
  $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
  $image = $_FILES['image']['name'];

  // Create an array of the form data
  $data = array(
    $first_name,
    $last_name,
    $email,
    $password,
    $image
  );

  // Open the CSV file in append mode
  $csv = fopen($csv_file, 'a');

  // Add the form data to the CSV file
  fputcsv($csv, $data);

  // Close the CSV file
  fclose($csv);

  // Redirect the user to a thank you page
  header('Location: thank-you.html');
  exit;
}
?>
<?php
// define variables and set to empty values
$first_name = $last_name = $email = $password = $image_name = "";
$first_name_err = $last_name_err = $email_err = $password_err = $image_err = "";

// function to validate form input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// function to generate a unique image name
function generate_unique_name($file_name) {
  $extension = pathinfo($file_name, PATHINFO_EXTENSION);
  $basename = pathinfo($file_name, PATHINFO_FILENAME);
  $new_file_name = $basename . "_" . uniqid() . "." . $extension;
  return $new_file_name;
}

// check if form has been submitted
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

  // validate email
  if (empty($_POST["email"])) {
    $email_err = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
    }
  }

  // validate password
  if (empty($_POST["password"])) {
    $password_err = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password is strong enough (at least 8 characters with uppercase, lowercase, and numbers)
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/",$password)) {
      $password_err = "Password must be at least 8 characters long and contain uppercase, lowercase, and numeric characters";
    }
  }

  // validate image
  if (empty($_FILES["image"]["name"])) {
    $image_err = "Image is required";
  } else {
    $target_dir = "images/";
    $image_name = generate_unique_name($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    $imageFileType =

