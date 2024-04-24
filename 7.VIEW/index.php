<?php 
session_start();
include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOW TO VIEW?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head">
        <h1><U>LOGIN</U></h1>
    </div>
    <div class="nav">
        <a href="index.php">HOME</a>
        <a href="trade.php">TRADE</a>
        <a href="trainee.php">TRAINEE</a>
        <a href="marks.php">MARKS</a>
        <a href="report.php">REPORT</a>
        <a href="logout.php">LOGOUT</a>
    </div>
    <div class="body">
        <form action="" method="post">
           Username:
           <input type="text" name="username" required>
           <br>
           password:
           <input type="password" name="password" required minlength="6">
           <br>
           <input type="submit" value="login" name="login">
         
        </form>
        <a href="signup.php">Create new account !</a>
    </div>
        <div class="foot">
           login &copy; 2024
        </div>
    
</body>
</html>