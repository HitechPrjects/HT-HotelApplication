<?php
include("index.html");
include 'connection.php';
mysqli_query($con,"DELETE FROM reports WHERE id='" . $_GET["id"] . "'");
//header("Location:create_reports.php");
echo '<script type="text/javascript"> alert("Details Deleted Successfuly!") 
document.location.href="reports.php"
</script>';
?>