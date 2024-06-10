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
  <div class="hero">
    <div class="form">
    <h1 class="topic">Welcome Back</h1>
    <p class="topicdesc">Enter your credential to Login</p>
      <form action="process/login-process.php" method="post">
          <div class="container">
            <div class="un">
              <input class="textinput" type="text" name="username" placeholder="Username" required />
            </div>
            <div class="password">
              <input class="textinput" type="password" name="password" placeholder="Password" required />
            </div>
            <div class="submit">
              <button class="submitbutton" type="submit">Submit</button>
            </div>
          </div>
      </form>
    </div>
    <div class="switch">Don't have an account? <a href="signup.php">Signup</a></div>
    </div>
</body>
</html>
