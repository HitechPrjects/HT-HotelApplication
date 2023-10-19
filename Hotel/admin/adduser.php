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
<div id="wrapper">

    <div class="container-fluid">
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Users</h5>
              
                <!-- Email input -->
                <div class="column sign-up">
                        <h2 class="heading"></h2>
                        <hr>
                        <p>Create your own account.</p>
                        <form method="POST" action='create-hotelscode.php'>
                        <div class="form-group row">

<div class="col-sm-8">
    <label class="required-field">Full Name
</label><input type="text" class="form-control" name="username" required>
</div>
</div>

<div class="form-group row">

                                                    <div class="col-sm-8">
                                                        <label class="required-field">email
                                                    </label><input type="text" class="form-control" name="email" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-sm-8">
                                                        <label class="required-field">contact
                                                    </label><input type="text" class="form-control" name="contact" placeholder =" 1234-567-890" maxlength=10 required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-sm-8">
                                                        <label class="required-field">password
                                                    </label><input type="text" class="form-control" name="password" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-sm-8">
                                                        <label class="required-field">confirmpassword
                                                    </label><input type="text" class="form-control" name="confirmpassword" required>
                                                    </div>
                                                </div>
                                                <select class="form-select mb-3"
                                        name="usertype"
                                        aria-label="Default  select example">
			  <option value="admin">admin</option>
        <option value="customer">customer</option>
       <option value="receptionist">receptionist</option>
</select>
 
      <div>

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
                <a class="btn btn-primary  mb-4 text-center" type="Back" name="Back" href="manageuser.php" >Back</a>

          
              </form>

            </div>
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>

