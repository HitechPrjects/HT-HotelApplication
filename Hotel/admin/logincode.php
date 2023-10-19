<?php
session_start();
require_once "connection.php";



if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password =$_POST["password"];
   
    $query ="SELECT * FROM login WHERE username='$username' AND
      password='$password'";
    
    $result =mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
          if($row["usertype"]=="admin")
          {
              $_SESSION['username']=$row["username"];
              $login_session =$row["username"];
              $_SESSION['usertype']=$row["usertype"];
           // header('Location: adminhome.php');
          header('Location: admin/admindashboard.php');
          }
          elseif
          ($row["usertype"]=="customer")
          {
            $_SESSION['username']=$row["username"];
            $_SESSION['usertype']=$row["usertype"];
            $login_session =$row["username"];
            //header('Location: userhome.php');
            header('Location: user/userhome.php');
          }
          elseif
          ($row["usertype"]=="receptionist")
          {
            $_SESSION['username']=$row["username"];
            $_SESSION['usertype']=$row["usertype"];
            $login_session =$row["username"];
            //header('Location: receptionisthome.php');
            header('Location: receptionist/receptionisthome.php');
          }
        }
    }
    else
    {
      echo '<script type="text/javascript"> alert("User Name or Password Incorrect ") 
      document.location.href="login.php";
      </script>';
    }

}


?>