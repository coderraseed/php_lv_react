<?php
session_start();

if ( isset( $_SESSION['success'] ) ) {
    header( 'Location: dashboard.php' );
}
if ( isset( $_POST['login'] ) ) {
    define( 'EMAIL', 'admin@gmail.com' );
    define( 'PASSWORD', 12345 );

    $email = $_POST['email'];
    $pass  = $_POST['password'];

    if ( $email == EMAIL && $pass == PASSWORD ) {
        $_SESSION['success'] = '';
        header( 'location: dashboard.php' );
    } else {
        $error = "Password or email dose not match";
    }

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-sm-8">
        <h2 class="text-center mb-4">Login</h2>
        <form method="post">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name='email' class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name='password' class="form-control" id="password" placeholder="Enter password">
          </div>
          <button type="submit" name='login' class="btn btn-primary btn-block">Login</button>
        </form>
        <p><?php if ( isset( $error ) ) {echo $error;}?></p>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
