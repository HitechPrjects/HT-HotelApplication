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
              <h5 class="card-title mb-5 d-inline">Create Hotels</h5>
              
                <!-- Email input -->
                <div class="column sign-up">
                        <h2 class="heading">Sign Up</h2>
                        <hr>
                        <p>Create your own account.</p>
                        <form method="POST" action='.php'>
                            <label for="new-email">Full Name:</label>
                            <input type="text" name="username" required><br><br>
                            <label for="new-email">Email:</label>
                            <input type="email" id="new-email" name="email" required><br><br>
                            <label for="new-password">Contact:</label>
                            <input type="text"  name="contact" required><br><br>
                            <label for="new-password">Password:</label>
                            <input type="password" id="new-password" name="password" required><br><br>
                            <label for="new-password">Confirm Password:</label>
                            <input type="password" id="new-password" name="confirmpassword" required><br><br>
                            <select class="form-select mb-3"
		          name="usertype" 
		          aria-label="Default select example">
			  <option selected value="admin">admin</option>
        <option selected value="user">user</option>
			  <option value="receptionist">receptionist</option>
		  </select>
</div>

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

              
  
        
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

