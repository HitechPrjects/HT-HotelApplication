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
                <div class="column sign-up">
                  <h2 class="heading"></h2>
                  <hr>
                  <form method="POST" action='addroom2.php' enctype="multipart/form-data" >
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <label class="required-field">Room Number</label>
                        <input type="text" class="form-control" name="roomnumber" required>
                      </div>
                    </div>


                    <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Bed Configuration
                                                    </label><input type="text" class="form-control" name="bedconfiguration" required>
                                                    </div>
                                                </div>

                  
         
                    <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Maximum Occupancy
                                                    </label><input type="text" class="form-control" name="maximumoccupancy" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Description
                                                    </label><input type="text" class="form-control" name="roomdescription" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Availability Calendar
                                                    </label><input type="date" class="form-control" name="availabilitycalendar" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">RoomLock Access
                                                    </label><input type="text" class="form-control" name="roomlockaccess" required>
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
                        <label class="required-field">Room Type</label>
                        <input type="text" class="form-control" name="roomtype" required>
                      </div>
                    </div>


                   

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Features 
                                                    </label><input type="text" class="form-control" name="roomfeatures" required>
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Housekeeping Status
                                                    </label><input type="text" class="form-control" name="hkstatus" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Categories
                                                    </label><input type="text" class="form-control" name="roomcategories" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Maintenance History
                                                    </label><input type="text" class="form-control" name="maintenancehistory" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Billing Information
                                                    </label><input type="text" class="form-control" name="billinginformation" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Images
                                                    </label><input type="file" class="form-control" name="image" required>
                                                    </div>
                                                </div>



                    <!-- Add other form fields for the second column here -->

                  
                </div>
              </div>
            </div>

            <!-- Submit button -->
            
            <button class="btn btn-primary mb-4 text-center" type="submit" name="submit" >Create</button>
            <a class="btn btn-primary mb-4 text-center" type="Back" name="Back" href="manageroom.php" >Back</a>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

</html>




