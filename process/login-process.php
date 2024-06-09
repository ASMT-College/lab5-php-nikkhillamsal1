<?php
include 'connection.php';
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    header("Location: ../index.php");
    exit();
}else{
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $un = $_POST['username'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='$un' AND password='$pass'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['login'] = 1;
        header("Location:../index.php");
        exit();
    }else{
        $ErrMsg = "Enter a valid username or password";
        $_SESSION['loginerror'] = $ErrMsg;
        header("Location:../login.php");
        exit();
    }
}
}
?>