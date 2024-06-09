<?php
include 'connection.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $un = $_POST['username'];
    if (!preg_match ("/^[a-zA-z][a-zA-z0-9]+$/", $un) ) {  
        $ErrMsg = "<p style='color:red; font-size:20px;'>Username must be atleast 2 character.</p>";
        $_SESSION['error'] = $ErrMsg;
        header("Location:../signup.php");
        echo $ErrMsg;
        exit();
    }
    $email = $_POST['email'];
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";  
    if (!preg_match ($pattern, $email) ){  
        $ErrMsg = "<p style='color:red; font-size:20px;'>Email is not valid.</p>";  
        $_SESSION['error'] = $ErrMsg;
        header("Location:../signup.php");
        exit();
    }
    $password = $_POST['password'];
    $pattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/";
    if(!preg_match($pattern,$password)){  
        $ErrMsg = "<p style='color:red; font-size:20px;'>Password must be atleast 4 character and must contain a alphabet and a number.</p>";
        $_SESSION['error'] = $ErrMsg;
        header("Location:../signup.php");
        exit();
    }
    $confirmpass = $_POST['confirmpass'];
    if($password != $confirmpass){
        $ErrMsg = "<p style='color:red; font-size:20px;'>Password must be same.</p>";
        $_SESSION['error'] = $ErrMsg;
        header("Location:../signup.php");
        exit();
    }
    $query = " SELECT * FROM users WHERE username = '$un' ";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $ErrMsg = "<p style='color:red; font-size:20px;'>Username already exist. Enter a unique one.</p>";
        $_SESSION['error'] = $ErrMsg;
        header("Location:../signup.php");
        exit();
    }
    else{
        $qry = "INSERT INTO users (username, email, password) VALUE ('$un', '$email', '$password')";
        $res = mysqli_query($conn,$qry);
        if(!$res){
            $ErrMsg = "<p style='color:red; font-size:20px;'>Cannot signup. Try again!</p>";
            $_SESSION['error'] = $ErrMsg;
            header("Location:../signup.php");
            exit();
        }
        else{
            $sucess = "<p style='color:green; font-size:20px;'>Successfull ! Now login</p>";
            $_SESSION['signupsucess'] = $sucess;
            header("Location:../login.php");
            exit();
        }
    }
}
?>