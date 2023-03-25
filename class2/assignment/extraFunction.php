
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Validate form fields
  $errors = array();

  if (empty($_POST['first-name'])) {
    $errors[] = 'First name is required';
  } else {
    $first_name = test_input($_POST['first-name']);
  }

  if (empty($_POST['last-name'])) {
    $errors[] = 'Last name is required';
  } else {
    $last_name = test_input($_POST['last-name']);
  }

  if (empty($_POST['email'])) {
    $errors[] = 'Email address is required';
  } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email address';
  } else {
    $email = test_input($_POST['email']);
  }

  if (empty($_POST['password'])) {
    $errors[] = 'Password is required';
  } else {
    $password = test_input($_POST['password']);
  }

  if (!empty($_FILES['image']['name'])) {
    // Upload image
    $target_dir = 'images/';
    $target_file = $target_dir . uniqid() . '-' . basename($_FILES['image']['name']);
    $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

    if (!in_array($image_type, $allowed_types)) {
      $errors[] = 'Invalid image format. Only JPG, JPEG, PNG and GIF images are allowed';
    } elseif ($_FILES['image']['size'] > 5000000) {
      $errors[] = 'Image size must be less than 5MB';
    } else {
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $image = $target_file;
      } else {
        $errors[] = 'Error uploading image';
      }
    }
  } else {
    $errors[] = 'Image is required';
  }

  if (empty($errors)) {
    // Save data to CSV file
    $data = array(
      $first_name,
      $last_name,
      $email,
      $password,
      $image
    );
    $file = fopen('registration.csv', 'a');
    fputcsv($file, $data);
    fclose($file);

    echo 'Registration successful';
  } else {
    foreach ($errors as $error) {
      echo $error . '<br>';
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>



<?php
if (isset($_POST['submit'])) {
  // Define the filename and path for the CSV file
  $filename = 'registrations.csv';
  $filepath = dirname(__FILE__) . '/' . $filename;

  // Open the CSV file for writing
  $fp = fopen($filepath, 'a');

  // Write the registration data to the CSV file
  fputcsv($fp, array(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['password'],
    $_FILES['image']['name']
  ));

  // Close the CSV file
  fclose($fp);

  // Redirect the user to the login page
  header('Location: login.php');
  exit();
}
?>