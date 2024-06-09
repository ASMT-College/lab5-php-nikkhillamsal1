<?php
$username = "root";
$servername = "localhost";
$pass = "";
$database = "wtasian2024";
$conn = mysqli_connect($servername,$username,"",$database);
if(!$conn)
{
    die('Connection unsuccessful.'.mysqli_connect_error());
}

?>