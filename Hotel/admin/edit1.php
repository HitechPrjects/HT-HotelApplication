<?php
include("index.html");
include 'connection.php';

$result = mysqli_query($con,"SELECT * FROM reports WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

 if(count($_POST)>0) {
   mysqli_query($con,"UPDATE reports set 
  Room number='" . $row['r_no'] . "', username='" . $row['username'] . "',Checkin Date ='" .$row['checkindate'] . "'
 ,	Checkout Date='" . $row['checkoutdate'] . "', Room Status='" . $row['roomstatus'] . "',House keeping status='" . $row['housekeepingstatus']. "'
   WHERE id='" .$row['id'] . "'");
   
  
      echo '<script type="text/javascript"> alert("Data Updated  Successfully!")
      document.location.href="reports.php";
       </script>';
  
 }


?>

