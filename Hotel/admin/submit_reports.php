<?php
include('connection.php');


if(isset($_POST['submit']))
{
   
  $field2 = $_POST['r_no'];
  $field3 = $_POST['Username'];
  $field4 =$_POST['checkindate'];
  $field5 =$_POST['checkoutdate'];
  $field6 =$_POST['roomstatus'];
  $field7 =$_POST['housekeepingstatus'];
  
  //$query = "INSERT INTO `reports`(`r_no`,`username`,`checkindate`,`checkoutdate`,`roomstatus`,`housekeepingstatus`)
  //VALUES ('$field2',' $field3', '$field4','$field5','$field6','$field7')";
  $query = "INSERT INTO `reports`(`r_no`,`username`,`checkindate`,`checkoutdate`,`roomstatus`,`housekeepingstatus`)
  VALUES ('$field2','$field3',' $field4', '$field5','$field6','$field7')";

 $query_run = mysqli_query($con,$query);
 
  if($query_run)
  {
    
    echo '<script type="text/javascript"> alert("Data Added  Successfully!")
    document.location.href="reports.php";
    </script>';

   }   else
  {
    echo '<script type="text/javascript"> alert("Data Added  UnSuccessfully!")
        
     </script>';
   }
 }


?>