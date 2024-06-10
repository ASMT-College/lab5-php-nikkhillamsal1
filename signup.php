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
    <div class="hero">
    <div class="form">
        <h1 class="topic">Sign up</h1>
        <p class="topicdesc">Create your account</p>
        <form action="process/signup-process.php" method="POST" onsubmit = "return validateform()">
            <div class="uname">
                <input class="textinput" type="text" id="uname" name="username" placeholder="Username" oninput="validateusername()" >
                <span class="error" id="unerror"></span>
            </div>
            <div class="email">
                <input class="textinput" type="text" id="email" name="email" placeholder="Email" oninput="validateemail()">
                <span class="error" id="emailerror"></span>
            </div>
            <div class="password">
                <input class="textinput" type="password" id="password" name="password" placeholder="Password" oninput="validatepassword()">
                <span class="error" id="passworderror"></span>
            </div>
            <div class="confirmpassword">
                <input class="textinput" type="password" id="confirmpass" name="confirmpass" placeholder="Confirm Password" oninput="validateconfirmpass()">
                <span class="error" id="confirmpasserror"></span>
            </div>
            <div class="submit">
                <button class="submitbutton" type="submit">Submit</button>
            </div>
        </form>
        <div class="switch">
            Already have an account? <a href="login.php">Login</a>
        </div>
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