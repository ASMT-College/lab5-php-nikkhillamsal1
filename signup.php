<?php
include 'process/connection.php';
session_start();
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <h1>Signup</h1>
        <form action="process/signup-process.php" method="POST" onsubmit = "return validateform()">
            <div class="uname">
                <label for="username">Username</label><br>
                <input type="text" id="uname" name="username" oninput="validateusername()" >
                <span class="error" id="unerror"></span>
            </div>
            <div class="email">
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" oninput="validateemail()">
                <span class="error" id="emailerror"></span>
            </div>
            <div class="password">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" oninput="validatepassword()">
                <span class="error" id="passworderror"></span>
            </div>
            <div class="confirmpassword">
                <label for="confirmpass">Confirm Password</label><br>
                <input type="password" id="confirmpass" name="confirmpass" oninput="validateconfirmpass()">
                <span class="error" id="confirmpasserror"></span>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div>
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
        //Ajax 
        // conole.log(checkuniqueusername(usernamevalue));
        // function checkuniqueusername(un){
        //     var result = ''
        //     var xmlhttp = new XMLHttpRequest();
        //     xmlhttp.onreadystatechange = function(){
        //         if(this.readyState ==4 && this.status == 200){
        //             //  your work
        //             result = this.responseText;
        //         }
        //     }
        //     xmlhttp.open("GET","api/checkUniqueUser.php?username=" + un , true)
        // }
    </script>
</body>
</html>