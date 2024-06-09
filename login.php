<?php
include 'process/connection.php';
session_start();
if(isset($_SESSION['signupsucess'])){
    echo $_SESSION['signupsucess'];
    unset($_SESSION['signupsucess']);
}
if(isset($_SESSION['loginerror'])){
    echo $_SESSION['loginerror'];
    unset($_SESSION['loginerror']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form">
    <h1>Login</h1>
      <form action="process/login-process.php" method="post">
          <div class="container">
            <br />Username: <br />
            <input class="textinput" type="text" name="username" required />
            <br />Password: <br />
            <input class="textinput" type="password" name="password" required />
            <br />
            <button type="submit">Submit</button>
          </div>
      </form>
    </div>
    <div>Don't have an account? <a href="signup.php">Signup</a></div>
  </body>
</html>
