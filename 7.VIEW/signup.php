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
           <input type="submit" value="signup" name="signup">
        </form>
       <?php
       if (isset($_POST['signup'])) {
     $uname=$_POST['username'];
     $pswd=$_POST['password'];

     $sql="INSERT INTO `user`(`USER_ID`, `USERNAME`, `PASSWORD`) VALUES ('','$uname','$pswd')";
     $select="SELECT * FROM `user` WHERE USERNAME='$uname' ";
     $rs=mysqli_query($conn,$select);
     
     if(mysqli_num_rows($rs)==0){
        echo "user created successfully";   
        mysqli_query($conn,$sql);
     }
        else{
            echo "not inserted";
        }
       }
       ?>
    </div>
        <div class="foot">
           login &copy; 2024
        </div>
    
</body>
</html>