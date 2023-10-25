<?php
	//check login
	include("index.html");
    include("connection.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="../styles/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper" style="margin-top:-100px;">
  
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Manage Rooms</h5>
             <a  href="addrooms.php" class="btn btn-primary mb-4 text-center float-right">Create Rooms</a>
              <table class="table">
                <thead>
                  <tr>
                   <th scope="col">#</th>
                    <th scope="col">Room Number</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Room Status</th>
                    <th scope="col">Room Rate</th>
                    <th scope="col">Maximum Occupancy</th>
                    <th scope="col">RoomLock Access</th>
                    <th scope="col">Billing Information</th>
                    <th scope="col">Room Images</th>
                  </tr>
                </thead>
                <tbody>

                <?php
  $result =mysqli_query($con,"SELECT * FROM addroom");
  while($row=mysqli_fetch_assoc($result))
  {
    ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['r_no']; ?></td>
                    <td><?php echo $row['r_type']; ?></td>
                    <td><?php echo $row['r_status']; ?></td>
                    <td><?php echo $row['r_rate']; ?></td>  
                    <td><?php echo $row['max_occ']; ?></td>  
                    <td><?php echo $row['rlock_access']; ?></td>
                    <td><?php echo $row['bill_info']; ?></td>
                    <td><img  src="../image/<?php echo $row['r_image1']; ?>" style="width:45px"></td> 
                    <td><a  href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning text-white text-center ">Update </a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger  text-center ">Delete </a></td>
                  </tr>
                  <?php
  }
  ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



  </div>
<script type="text/javascript">

</script>
</body>
</html>