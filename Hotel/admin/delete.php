<?php
include("index.html");
include 'connection.php';
mysqli_query($con,"DELETE FROM addroom WHERE id='" . $_GET["id"] . "'");
// header("Location:manage");
echo '<script type="text/javascript"> alert("Details Deleted Successfuly!") 
document.location.href="manageroom.php"
</script>';
?>