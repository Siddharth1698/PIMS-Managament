<?php
session_start();
include "db.php";


// connect to the database


// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  echo "string";
   echo $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
  $height = mysqli_real_escape_string($connection, $_POST['height']);
  $weight = mysqli_real_escape_string($connection, $_POST['weight']);
  $phno = mysqli_real_escape_string($connection, $_POST['phno']);
  $gender = mysqli_real_escape_string($connection, $_POST['gender']);
  $dob = mysqli_real_escape_string($connection, $_POST['dob']);
  $reffered = mysqli_real_escape_string($connection, $_POST['reffered']);
  $occupation = mysqli_real_escape_string($connection, $_POST['occupation']);

 

  
  	$query = "INSERT INTO `users` (`user_id`, `user_uniqueid`, `user_fname`, `user_lname`, `user_dob`, `user_phone`, `user_gender`, `user_occupation`, `user_referredby`, `user_height`, `user_weight`) VALUES (NULL, '', '$firstname', '$lastname', '$dob', '$phno', '$gender', '$occupation', '$reffered ', '$height', '$weight')";
  	mysqli_query($connection, $query);
  	$_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['height'] = $height;
    $_SESSION['weight'] = $weight;
    $_SESSION['phno'] = $phno;
    $_SESSION['gender'] = $gender;
    $_SESSION['dob'] = $dob;
    $_SESSION['reffered'] = $reffered;
    $_SESSION['occupation'] = $occupation;
    header('location: profilePatient.php');
  }