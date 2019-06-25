<?php
ob_start();
 include "db.php";

   $aid = $_GET["admin_id"];
   $p_date = $_GET["p_date"];
   $post_id = $_GET['post_id'];
   $flag = $_GET['flag'];


 
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
    $date_clicked = $row['user_date_clicked'];


  
 }
  $llname = $lname;




if($user_uniqueid == ''){
    
$uniquedob = intval(preg_replace('/[^0-9]+/', '', $date_clicked), 10);
$uniquekey = $uniquedob . $user_id;

$user_uniqueid = $uniquekey;



 $uniquequery = "UPDATE `users` SET `user_uniqueid` = '$uniquekey' WHERE `users`.`user_id` = '$user_id';";
 mysqli_query($connection, $uniquequery);


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
        <a class="nav-link" href="home.php?admin_id=<?php echo "$aid";   ?>">
          <i class="fas fa-clinic-medical"></i> Home
          
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

<!-- Material form register -->
<div class="card carder">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Patient Profile</strong>
    </h5>
<br>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <!-- Form -->
<form action="detailsupdate.php?admin_id=<?php  echo "$aid";  ?>&p_date=<?php echo "$p_date";  ?>&flag=<?php  echo "$flag";  ?>&post_id=<?php echo "$post_id" ; ?>" method="post">

            <div class="row">
                <div class="col">
                  
                        <label for="firstname" >First Name: </label>
                        <input type="text" id="firstname" name="firstname"  value="<?php echo "$fname"; ?>" class="form-control" readonly="readonly">

                        <input type="hidden" name="user_id" value="<?php echo "$user_id"; ?>">
                        
                   
                </div>
                <div class="col">
                   
                    <!-- Last name -->
                        <label for="lastname">Last Name: </label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo "$llname"; ?>" class="form-control" readonly="readonly">
                   
                </div>
                <div class="col">
                    
                    <!-- Last name -->
                    <label for="uniqueid">Unique Id:</label>
                        <input type="text" id="uniqueid" name="uniqueid"  value="<?php echo "$user_uniqueid"; ?>" class="form-control" readonly="readonly">
                 
                </div>
                </div>

               <br>
   

            <div class="row">
              <div class="form-inline">
                    <div class="col">
                  <label for="height" >Height(Cm):</label>
                <input type="number" id="height" name="heighted" value="<?php echo "$height"; ?>"  class="form-control">
                        
            
                 </div>
                 <div class="col">
                 <label for="Weight">Weight(Kg):</label>
                <input type="number" id="Weight" name="weight" value="<?php echo "$weight"; ?>" class="form-control">
                        
                         </div>

              </div>
             

                          <div class="col">
                    
                    <!-- Last name -->
                    <label for="occupation">Occupation:</label>
                        <input type="text" id="occupation" name="occupation"  value="<?php echo "$occupation"; ?>" class="form-control">
                 
                </div>

                <div class="col">
                  <label for="phno">Phone Number:</label>
                <input type="number" id="phno" name="phno" value="<?php echo "$phno"; ?>"  class="form-control">
                      
              
          </div>

</div>
   <!-- Password -->
<br>
         <div class="row">

            <div class="col">
           
             
                  <!-- Basic dropdown -->
                  <label for="gender">Gender:</label>
<select class="browser-default custom-select" name="gender">
  <option selected><?php echo "$gender"; ?></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  
</select>
  

<!-- Basic dropdown -->

            </div>
 <!-- E-mail --><div class="col">
            <label for="dob">Date of Birth(mm/dd/yyyy):</label>

            
             
              <input  name="dob" value="<?php echo "$dob"; ?>"  type="date" class="form-control" readonly="readonly">

          </div>


          <div class="col"> 
            <label for="reffered">Reffered By:</label>
                <input type="text" id="reffered" name="reffered" value="<?php echo "$reffered"; ?>" class="form-control">
           

          </div>

            </div>

            <!-- Newsletter -->
          

<!-- Editable table -->
<br>
           
<div>
 <div  style="text-align: right;">  <input type="submit" name="submit" class="btn" value="Update"></input></div> 
    <br> <hr>
             <br>
            <?php
            $_GET['user_id']=$user_id;
            include "tabs.php";  ?>


</div>
<br>
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


