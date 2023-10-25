<?php
include("index.html");
include("connection.php");
// Check if the form was submitted
if (isset($_POST['update_submit'])) {
    // Include necessary files
    

    $id = $_GET['id'];

    // Process form data
    $r_no = $_POST['r_no'];
    $r_type = $_POST['r_type'];
    $r_status = $_POST['r_status'];
    $r_rate = $_POST['r_rate'];
    $max_occ = $_POST['max_occ'];
    $bed_con = $_POST['bed_con'];
    $r_des = $_POST['r_des'];
    $r_fea = $_POST['r_fea'];
    $avail_cal = $_POST['avail_cal'];
    $hk_status = $_POST['hk_status'];
    $rlock_access = $_POST['rlock_access'];
    $r_categories = $_POST['r_categories'];
    $main_his = $_POST['main_his'];
    $bill_info = $_POST['bill_info'];

    // File upload
    $folder = "../image/";
    $image_file = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $target_file = $folder . basename($image_file);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Check if the file is not empty
    if ($file != '') {
        // Set image upload size
        if ($_FILES["image"]["size"] > 5000000) {
            $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
        }
        // Allow only specific file types
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
        if (!in_array(strtolower($imageFileType), $allowedExtensions)) {
            $error[] = 'Sorry, only JPG, JPEG, PNG, and GIF files are allowed.';
        }
    }

    // Check if there are no errors
    if (!isset($error)) {
        if ($file != '') {
            // Delete the existing image
            $rest = mysqli_query($con, "SELECT r_image1 FROM addroom WHERE id = $id");
            if ($row = mysqli_fetch_array($rest)) {
                $deleteimage = $row['r_image1'];
                unlink($folder . $deleteimage);
            }

            // Move the new image to the destination folder
            move_uploaded_file($file, $target_file);
        }

        // Update the database record
        $result = mysqli_query($con, "UPDATE addroom SET r_no = '$r_no', r_type = '$r_type', r_status = '$r_status', r_rate = '$r_rate', 
        max_occ = '$max_occ', bed_con = '$bed_con', r_des = '$r_des', r_fea = '$r_fea', 
        avail_cal = '$avail_cal', hk_status = '$hk_status', rlock_access = '$rlock_access',
        r_categories = '$r_categories', r_image1 = '$image_file', main_his = '$main_his', bill_info = '$bill_info' WHERE id = $id");

        if ($result) {
            echo '<script type="text/javascript"> alert("User Updated Successfully!") document.location.href="manageroom.php"; </script>';
        } else {
            echo 'Something went wrong';
        }
    }
}

// Check if there are any errors to display
if (isset($error)) {
    foreach ($error as $err) {
        echo '<div class="message">' . $err . '</div><br>';
    }
}

$id = $_GET['id'];
$res = mysqli_query($con, "SELECT * FROM addroom WHERE id = $id");
if ($row = mysqli_fetch_array($res)) {
    $field1 = $row['r_no'];
    $field2 = $row['r_type'];
    $field3 = $row['r_status'];
    $field4 = $row['r_rate'];
    $field5 = $row['max_occ'];
    $field6 = $row['bed_con'];
    $field7 = $row['r_des'];
    $field8 = $row['r_fea'];
    $field9 = $row['avail_cal'];
    $field10 = $row['hk_status'];
    $field11 = $row['rlock_access'];
    $field12 = $row['r_categories'];
    $field13 = $row['r_image1'];
    $field14 = $row['main_his'];
    $field15 = $row['bill_info'];
}
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
                  <form method="POST" action=" " enctype="multipart/form-data" >
                  <input type="hidden" class="form-control" name="id"  value="<?php echo $id;?>" >
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <label class="required-field">Room Number</label>
                        <input type="text" class="form-control"  value="<?php echo $row['r_no'];?>" name="r_no" required>
                      </div>
                    </div>


                    <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Bed Configuration
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['bed_con'];?>"  name="bed_con" required>
                                                    </div>
                                                </div>

                  
         
                    <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Maximum Occupancy
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['max_occ'];?>"  name="max_occ" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Description
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['r_des'];?>"  name="r_des" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Availability Calendar
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['avail_cal'];?>"  name="avail_cal" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">RoomLock Access
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['rlock_access'];?>"  name="rlock_access" required>
                                                    </div>
                                                </div> 


                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Status
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['r_status'];?>"  name="r_status" required>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field"> Room Rate
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['r_rate'];?>"  name="r_rate" required>
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
                        <input type="text" class="form-control"  value="<?php echo $row['r_type'];?>" name="r_type" required>
                      </div>
                    </div>


                   

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Features 
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['r_fea'];?>"  name="r_fea" required>
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Housekeeping Status
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['hk_status'];?>" name="hk_status" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Categories
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['r_categories'];?>" name="r_categories" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Maintenance History
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['main_his'];?>"  name="main_his" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Billing Information
                                                    </label><input type="text" class="form-control"  value="<?php echo $row['bill_info'];?>" name="bill_info" required>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Room Images
                                                    </label><input type="file" class="form-control"  value="<?php echo $row['r_image1'];?>"  name="image" required>
                                                    </div>
                                                </div>



                    <!-- Add other form fields for the second column here -->

                  
                </div>
              </div>
            </div>

            <!-- Submit button -->
            
            <button type="submit" class="btn btn-primary mb-4 text-center" name="update_submit">Update</button>
 
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




