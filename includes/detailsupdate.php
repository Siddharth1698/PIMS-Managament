<?php
include "db.php";


// connect to the database


// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form

  $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
  $user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
  $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
  $height = mysqli_real_escape_string($connection, $_POST['heighted']);
 $weight = mysqli_real_escape_string($connection, $_POST['weight']);
  $phno = mysqli_real_escape_string($connection, $_POST['phno']);
  $gender = mysqli_real_escape_string($connection, $_POST['gender']);
  $dob = mysqli_real_escape_string($connection, $_POST['dob']);
  $reffered = mysqli_real_escape_string($connection, $_POST['reffered']);
  $occupation = mysqli_real_escape_string($connection, $_POST['occupation']);

$quersel = "SELECT * FROM `users` WHERE `user_id` LIKE '$user_id'";

  $query = "UPDATE `users` SET `user_fname` = '$firstname', `user_lname` = '$lastname', `user_dob` = '$dob', `user_phone` = '$phno', `user_gender` = '$gender', `user_occupation` = '$occupation', `user_referredby` = '$reffered', `user_height` = '$height', `user_weight` = '$weight'
       WHERE `users`.`user_id` = '$user_id'";

       mysqli_query($connection, $query);




   header('Location: profilePatient.php?user_id='.$user_id);
   
    
  }

  ?>