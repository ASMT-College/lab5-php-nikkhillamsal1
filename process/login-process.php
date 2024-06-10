<?php
include 'connection.php';
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    header("Location: ../index.php");
    exit();
}else{
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['password'])){
        $un = $_POST['username'];
        $pass = $_POST['password'];
        $query = "SELECT * FROM users WHERE username= ? ";
        $stmt = $conn -> prepare($query);
        $stmt -> bind_param("s",$un);
        $stmt -> execute();
        $result = $stmt -> get_result();
        if($result->num_rows == 1){
            $row = $result -> fetch_assoc();
            if(password_verify($pass , $row['password'])){
                $_SESSION['login'] = 1;
                header("Location:../index.php");
                exit();
            }else{
                $ErrMsg = "Enter a valid username or password.";
                $_SESSION['loginerror'] = $ErrMsg;
                header("Location:../login.php");
                exit();
            }
            
        }else{
            $ErrMsg = "Enter a valid username or password.";
            $_SESSION['loginerror'] = $ErrMsg;
            header("Location:../login.php");
            exit();
        }
    }else{
        $ErrMsg = "Username and password must be provided.";
        $_SESSION['loginerror'] = $ErrMsg;
        header("Location:../login.php");
        exit();
    }
}
}
?>