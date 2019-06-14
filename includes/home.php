<?php
session_start();
 ob_start();
 include "db.php";
 

  $user_id = $_GET["admin_id"];


if (empty($_SESSION['adminid'])) {
    header('Location: ../index.php');
 
}

if (empty($_GET)) {
    header('Location: ../index.php');

}else{

}


$sql = "SELECT user_fname, user_lname, user_dob, user_uniqueid,user_id,current_appointment FROM users";
$result = $connection->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Patient Info Managment System</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>

<body>

  <!-- Start your project here-->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark indigo fixed-top">
  <a class="navbar-brand" href="#">PIMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-clinic-medical"></i> Home
          
        </a>
      </li>

    <li class="nav-item active">
        <a class="nav-link" href="registration.php">
          <i class="fas fa-plus-square"></i> Add Patient
          
        </a>
      </li>

      
       <li class="nav-item active">
        <a class="nav-link" href="../index.php">
         <i class="fab fa-instagram"></i> Logout</a>
      </li>

    
    </ul>

  </div>
</nav>
<!--/.Navbar -->

<div class="row">
  
<!-- Material form subscription -->
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What are you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th class="m-sm-5 ">Unique Id</th>
      <th class="m-sm-5 ">First Name</th>
      <th class="m-sm-5 ">Last Name</th>
      <th class="m-sm-5  ">DOB</th>
       <th class="m-sm-5 ">Age</th>
      <th class="m-sm-5 ">Last Visit</th>
           

    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>

    <?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $uniqueid = $row["user_uniqueid"];
        $uid = $row["user_id"];
        $fname =  $row["user_fname"];
        $lname = $row["user_lname"];
        $dob = $row["user_dob"];
        $current_appointment = $row["current_appointment"];

         $date = new DateTime($dob);
         $now = new DateTime();
         $interval = $now->diff($date);
         $age = $interval->y;

        


    ?>
    <tr>


      <th><?php echo $uniqueid; ?></th>
      <td><a href="profilePatient.php?user_id=<?php echo $uid; ?>&flag=0&post_id=0"><?php echo $fname; ?></a></td>
      <td><?php echo $lname; ?></td>
      <td><?php echo $dob; ?></td>
       <td><?php echo $age; ?></td>
      <td><?php echo $current_appointment; ?></td>
      
    </tr>
 <?php

 }
} 

?>



    
  </tbody>
</table>
<!-- Material form subscription -->

</div>



<!-- Footer -->
<footer class="page-footer font-small blue fixed-bottom">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> PIMS</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/home.js"></script>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
