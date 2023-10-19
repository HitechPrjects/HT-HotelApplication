<?php
include('connection.php');
if(isset($_POST['submit']))
{
  $usernamefield =$_POST['username'];  
  $emailfield = $_POST['email'];
  $contact = $_POST['contact'];
  $passwordfield =$_POST['password'];
  $confirmpasswordfield =$_POST['confirmpassword'];
  $rolefield =$_POST['usertype'];

  $query = "INSERT INTO `login`(`username`,`email`,`contact`,`password`,`confirmpassword`,`usertype`)
  VALUES ('$usernamefield','$emailfield',' $contactfield', '$passwordfield','$confirmpasswordfield','$rolefield')";

 $query_run = mysqli_query($con,$query);
 
  if($query_run)
  {
    
    header("Location: receptionisthome.php");
  }
}



?>