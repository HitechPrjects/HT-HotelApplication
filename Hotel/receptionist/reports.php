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
    <!-- <link href="../styles/style.css" rel="stylesheet">-->
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
              <h5 class="card-title mb-4 d-inline">Reports</h5>
             <a  href="create_reports.php" class="btn btn-primary mb-4 text-center float-right">Create Reports</a><br><br>
              <table class="table">
                <thead>
                </select></div></div>
                  <tr>
                   <br><br>
                    <th scope="col">id</th>
                    <th scope="col">Room number</th>
                    <th scope="col">username</th>
                    <th scope="col">Checkin Date</th>
                    <th scope="col">Checkout Date</th>
                    <th scope="col">Room Status</th>
                    <th scope="col">House keeping status</th>
                  </tr>
                </thead>
                <tbody>

                <?php
  $result =mysqli_query($con,"SELECT * FROM reports");
  while($row=mysqli_fetch_assoc($result))
  {
    ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['r_no']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['checkindate']; ?></td>
                    <td><?php echo $row['checkoutdate']; ?></td>  
                    <td><?php echo $row['roomstatus']; ?></td>
                    <td><?php echo $row['housekeepingstatus']; ?></td>
                    
                    <td><a  href="create_reports.php?id=<?php echo $row['id']; ?>" class="btn btn-warning text-white text-center ">Edit </a></td>
                <td><a href="delete1.php?id=<?php echo $row['id']; ?>" class="btn btn-danger  text-center ">Delete</a></td>

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