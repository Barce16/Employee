<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link -->
    <script src="./assets/js/search.js"> </script>
    <!-- link -->
    <link rel="stylesheet" href="profile.css">
    <!-- link for Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- link for Bootstrap -->

    <!-- backgournd -->
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
    <!-- backgournd -->  
</head>

<body>

     <div class="bg-secondary"> 
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid bg-secondary">
            <!-- image -->
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/handshake.png" height="50">
                <label ><h6>Smart Parking System</h6></label>
            </a>
            <!-- image -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation bars front -->
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
                
            </div>
            <!-- Navigation bars buttom-->
        </div>
    </nav>
    </div>  
    
    <?php 
session_start();

if (isset($_SESSION['Gmail']) && isset($_SESSION['Complete_Name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
</head>
<body>
 
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
 
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <?php

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
</head>
<body>
    

    
<div class="home">
     <h4>Your Profile, <?php echo $_SESSION['Complete_Name']; ?></h4>
     </div>
     
</body>
</html>

<?php   
}
 ?>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <!-- put text -->
    <!-- put text -->
    <!-- put text -->
    <button type="button" onclick="document.location='" data-bs-toggle="collapse" data-bs-target="#mynavbar">View Profile
                
                </button>
                <br>
                <hr>
   
                <br>
                <hr>
                <button type="button" onclick="document.location='logout.php'" data-bs-toggle="collapse" data-bs-target="#mynavbar">Logout
                
                </button>
            

  </div>
</div>

<div class="container-fluid mt-3">
  <h5>Your Profile</h5>
  
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Show Details
  </button>
</div>


</body>
<!-- jquery -->
<script src="./assets/js/jquery.js"></script>
<!-- jquery -->

</html>