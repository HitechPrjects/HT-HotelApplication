<?php
   include('connection.php');
   session_start();
   
   $username = $_SESSION['username'];

   $ses_sql = mysqli_query($con,"select * from login where username = '$username' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];

   
   if(!isset($_SESSION['username'])){
      header("location:login.php");
      die();
   }
?>