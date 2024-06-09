<?php
include "process/connection.php";
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <style>
    h1{
        font-size : 40px;
    }
    table, th, td {
        border: 1px solid;
    }
    th,td{
        padding: 5px 15px;
    }
    th{
        font-size: 25px;
    }
    td{
        font-size: 20px;
    }
    .signout{
        font-size : 20px
    }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <table>
        <tr>
            <th>S.N</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        <?php
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        $c = 1;
        While($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td> <?php echo $c++; ?></td>
            <td> <?php echo $row['username']; ?></td>
            <td> <?php echo $row['email']; ?></td>
            <td> <?php echo $row['created_at']; ?></td>
            <td> <?php echo $row['updated_at']; ?></td>
        </tr>
        <?php  } ?>
        
    </table>
    <br>
    <a class="signout" href="process/signout.php">signout</a>
</body>
</html>