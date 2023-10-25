<?php
include('connection.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// $con = new mysqli("localhost", "root"," ", "hotel");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['submit']))
{
  $field1 =$_POST['roomnumber'];  
  $field2 = $_POST['roomtype'];
  $field3 = $_POST['roomstatus'];
  $field4 =$_POST['roomrate'];
  $field5 =$_POST['maximumoccupancy'];
  $field6 =$_POST['bedconfiguration'];
  $field7 =$_POST['roomdescription'];
  $field8 =$_POST['roomfeatures'];
  $field9 =$_POST['availabilitycalendar'];
  $field10 =$_POST['hkstatus'];
  $field11 =$_POST['roomlockaccess'];
  $field12 =$_POST['roomcategories'];
  // $field13 =$_POST['roomimages'];
  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "../image/" . $filename;
  $field14 =$_POST['maintenancehistory'];
  $field15 =$_POST['billinginformation'];
  $query = "INSERT INTO `addroom`(`r_no`,`r_type`,`r_status`,`r_rate`,`max_occ`,`bed_con`,`r_des`,`r_fea`,`avail_cal`,`hk_status`,`rlock_access`,`r_categories`,`main_his`,`bill_info`,`r_image1`
  )
  VALUES ('$field1','$field2',' $field3', '$field4','$field5','$field6','$field7','$field8','$field9','$field10','$field11','$field12','$field14','$field15','$filename')";

//  $query_run = mysqli_query($con,$query);
 
//   if($query_run)
//   {
    
//     echo '<script type="text/javascript"> alert("Data Added  Successfully!")
//          document.location.href="addrooms.php";
//     </script>';

//   }
//   else
//   {
//     echo '<script type="text/javascript"> alert("Data Added  UnSuccessfully!")
        
//     </script>';
//   }
// }


if (move_uploaded_file($tempname, $folder)) {
  //   echo '<script type="text/javascript"> alert ("Registered  successfully!") </script>';
} else {
    echo '<script type="text/javascript">  alert ("Failed to upload image!")</script>';
}
  if ($con->query($query) === TRUE) {
     
      echo '<script type="text/javascript"> alert("Data added Successfully!")
      document.location.href="addroom.php";
       </script>';
  } else {
      echo "Error: " . $query . "<br>" . $con->error;
  }
}
$con->close();
?>