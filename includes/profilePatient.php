<?php
ob_start();
 include "db.php";

 
// Accessing session data
$uid = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE user_id='$uid'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
    $user_id = $row['user_id'];
    $user_uniqueid = $row['user_uniqueid'];
    $fname = $row['user_fname'];
    $lname = $row['user_lname'];
    $height = $row['user_height'];
    $weight = $row['user_weight'];
    $phno = $row['user_phone'];
    $gender = $row['user_gender'];
    $dob = $row['user_dob'];
    $reffered = $row['user_referredby'];
    $occupation = $row['user_occupation'];
 }



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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/registration.css">
        <script type="text/javascript" src="../js/addPatient.js"></script>

        <script src="item-ajax.js"></script>
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
        <a class="nav-link" href="home.html">
          <i class="fas fa-clinic-medical"></i> Home
          
        </a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="../index.html">
         <i class="fab fa-instagram"></i> Logout</a>
      </li>

    
    </ul>

  </div>
</nav>
<!--/.Navbar -->

<!-- Material form register -->
<div class="card carder">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Patient Registration</strong>
    </h5>
<br>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <!-- Form -->
<form class="text-center">

            <div class="row">
                <div class="col">
                    <div class="md-form"> First Name:

                        <input type="text" name="firstname" id="FirstName" value="<?php echo "$fname"; ?>" class="form-control">
                        <label for="FirstName"></label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form"> Last Name:
                    <!-- Last name -->
                        <input type="text" id="LastName" name="lastname" value="<?php echo "$lname"; ?>" class="form-control">
                        <label for="lastname"></label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form"> Occupation:
                    <!-- Last name -->
                        <input type="text" id="Occupation" name="occupation"  value="<?php echo "$occupation"; ?>" class="form-control">
                        <label for="occupation"></label>
                    </div>
                </div>
                </div>


   

            <div class="row">
                 <div class="col">
            <div class="md-form">Height:
                <input type="number" id="Height" name="height" value="<?php echo "$height"; ?>"  class="form-control">
                        <label for="Height"></label>
               
            </div>
          </div>
                 <div class="col">
            <div class="md-form">Weight:
                <input type="number" id="Weight" name="weight" value="<?php echo "$weight"; ?>" class="form-control">
                        <label for="Weight"></label>
               
            </div>
          </div>

                <div class="col">
            <div class="md-form">Phone Number:
                <input type="number" id="PhoneNumber" name="phno" value="<?php echo "$phno"; ?>"  class="form-control">
                        <label for="PhoneNumber"></label>
               
            </div>
          </div>
<br>
</div>
   <!-- Password -->

         <div class="row">

            <div class="col">Gender:
            <div class="md-form"> 
             
                  <!-- Basic dropdown -->
<select class="browser-default custom-select" name="gender">
  <option selected><?php echo "$gender"; ?></option>
  <option value="1">Male</option>
  <option value="2">Female</option>
  
</select>
  
</div>
<!-- Basic dropdown -->

            </div>
 <!-- E-mail --><div class="col">Date of Birth(mm/dd/yyyy):
            <div class="md-form"> 
             <input type="date" id="date" name="dob" value="<?php echo "$dob"; ?>"  class="form-control" aria-describedby="text">

            </div>
            </div>

 <div class="col"> Reffered By:
            <div class="md-form">
                <input type="text" id="text" name="reffered" value="<?php echo "$reffered"; ?>" class="form-control" aria-describedby="text">
                
              
            </div>

          </div>

            </div>

            <!-- Newsletter -->
          

<!-- Editable table -->

            
<input type="submit" value="Update" class="btn" name="Update"></input>


        </form>
  </div>

</div>

<!-- Material form register -->


<!-- Footer -->
<footer class="page-footer font-small blue ">

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
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/addPatient.js"></script>
  <!-- Bootstrap tooltips -->
  

  <!-- Bootstrap core JavaScript -->
 
</body>

</html>


