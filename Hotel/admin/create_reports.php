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
            <h5 class="card-title mb-5 d-inline">Create Rooms</h5>

            <!-- Form with two columns -->
            <div class="row">
              <div class="col-6">
                <!-- First Column -->
                <h2 class="heading"></h2>
                  <hr>
                  <form method="POST" action='submit_reports.php' enctype="multipart/form-data" >
                    


                    <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room number
                                                    </label><input type="text" class="form-control" name="r_no" required>
                                                    </div>
                                                </div>

                  
         
                    <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Username
                                                    </label><input type="text" class="form-control" name="Username" required>
                                                    </div>
                                                </div>
                   


                                                <div class="form-group row">
  <div class="col-sm-6">
    <label class="required-field">Room Status</label>
    <select class="form-select" name="roomstatus" aria-label="Room Status">
      <option disabled="disabled" value="" selected>-- Select Room Status --</option>
      <option value="Vacant">Vacant</option>
      <option value="Occupied">Occupied</option>
    </select>
  </div>
</div>

                                               
                                                
                    <!-- Add other form fields for the first column here -->
                </div>
              </div>

              <div class="col-6">
                <!-- Second Column -->
                <div class="column sign-up">
                  <h2 class="heading"></h2>
                  <hr>
                  
                  <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">checkin date
                                                    </label><input type="text" class="form-control" name="checkindate" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">checkout date
                                                    </label><input type="date" class="form-control" name="checkoutdate" required>
                                                    </div>
</div>

<div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">house keeping status
                                                    </label><input type="text" class="form-control" name="housekeepingstatus" required>
                                                    </div>
                                                </div> 

                   

                                               

                    <!-- Add other form fields for the second column here -->

                  
                </div>
              </div>
            </div>

            <!-- Submit button -->
            <button class="btn btn-primary mb-4 text-center" type="submit" name="submit">Create</button>
            <a class="btn btn-primary mb-4 text-center" type="Back" name="Back" href="reports.php" >Back</a>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

</html>




