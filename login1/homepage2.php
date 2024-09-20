<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        *{
            background-color: #c9d6ff;
        }
    </style>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
      Thank you for staying informed with Newsify!  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       <br>
       You're now logged out. See you soon for more updates and insightful articles
       &#128512;
      </p>
      <a href="https://www.google.co.in/webhp" ><strong>redirect to googlepage</strong></a>
    </div>
</body>
</html>