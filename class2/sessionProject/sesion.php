<?php

session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $remember = isset($_POST['remember']);

  // Validate the form data, check the email and password against a database, and log the user in if valid.
  if ($email === 'example@example.com' && $password === 'password') {
    // Set session variables to store information about the logged-in user.
    $_SESSION['user_id'] = 123;
    $_SESSION['user_email'] = $email;

    if ($remember) {
      // Set a cookie to remember the user's email for 30 days.
      setcookie('user_email', $email, time() + (30 * 24 * 60 * 60));
    } else {
      // Delete the user's email cookie if the "Remember me" checkbox wasn't checked.
      setcookie('user_email', '', time() - 3600);
    }

    // Redirect the user to a dashboard or homepage after successful login.
    header("Location: dashboard.php");
    exit();
  } else {
    // If the email or password is invalid, redirect the user back to the login page with an error message.
    $_SESSION['error'] = 'Invalid email or password.';
    header("Location: login.php");
    exit();
  }
}

?>
