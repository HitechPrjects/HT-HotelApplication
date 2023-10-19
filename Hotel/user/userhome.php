<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="styles/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <span><?php echo $_SESSION['username']; ?></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link" style="margin-left: 20px;" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left: 20px;">Room booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left: 20px;">Payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left: 20px;">profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rateindex.php" style="margin-left: 20px;">Review</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="admins/admins.html" style="margin-left: 20px;">Admins</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="hotels-admins/show-hotels.html" style="margin-left: 20px;">Hotels</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="rooms-admins/show-rooms.html" style="margin-left: 20px;">Rooms</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="bookings-admins/show-bookings.html" style="margin-left: 20px;">Bookings</a>
          </li> -->
        </ul>
        
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="userhome.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout
            </a>
</li>
            
          
        </ul>
        
      </div>
    </div>
    </nav>
   
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>
