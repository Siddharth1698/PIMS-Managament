<?php
ob_start();
session_start();
include "db.php";


 $user_id = $_SESSION['user_id'] ;



if (isset($_POST['up'])) {


  $complaints = mysqli_real_escape_string($connection, $_POST['complaints']);
  $bp1 = mysqli_real_escape_string($connection, $_POST['bp1']);
  $bp2 = mysqli_real_escape_string($connection, $_POST['bp2']);
  $pulse = mysqli_real_escape_string($connection, $_POST['pulse']);
  $ge = mysqli_real_escape_string($connection, $_POST['ge']);
  $se = mysqli_real_escape_string($connection, $_POST['se']);
  $fd = mysqli_real_escape_string($connection, $_POST['fd']);
  $fcheck = mysqli_real_escape_string($connection, $_POST['field1']);
  $comments = mysqli_real_escape_string($connection, $_POST['comments']);
  $next_appointment = mysqli_real_escape_string($connection, $_POST['next_appointment']);


 

  
    $query = "INSERT INTO `savedvisit` (`post_id`, `user_id`, `complaints`, `bp1`, `bp2`, `pulse`, `ge`, `se`, `fd`, `fcheck`, `comments`, `next_appointment`, `current_appointment`) VALUES (NULL, '$user_id', '$complaints', '$bp1', '$bp2', '$pulse', '$ge', '$se', '$fd', '$fcheck', '$comments', '$next_appointment', '2019-06-12');";
  $result =  mysqli_query($connection, $query);



    $getquery = "SELECT post_id FROM savedvisit ORDER BY post_id DESC LIMIT 1;";
    $select_user_query = mysqli_query($connection, $getquery);

     while($row = mysqli_fetch_array($select_user_query)){
    $post_id = $row['post_id'];
 }

   



  header('Location: profilePatient.php?user_id='.$user_id.'&flag=1&post_id='.$post_id);

}




if (isset($_POST['sub'])) {

  ?>
<!-- Central Modal Small -->

<!-- Central Modal Small -->

  <?php


  $complaints = mysqli_real_escape_string($connection, $_POST['complaints']);
  $bp1 = mysqli_real_escape_string($connection, $_POST['bp1']);
  $bp2 = mysqli_real_escape_string($connection, $_POST['bp2']);
  $pulse = mysqli_real_escape_string($connection, $_POST['pulse']);
  $ge = mysqli_real_escape_string($connection, $_POST['ge']);
  $se = mysqli_real_escape_string($connection, $_POST['se']);
  $fd = mysqli_real_escape_string($connection, $_POST['fd']);
  $fcheck = mysqli_real_escape_string($connection, $_POST['field1']);
  $comments = mysqli_real_escape_string($connection, $_POST['comments']);
  $next_appointment = mysqli_real_escape_string($connection, $_POST['next_appointment']);
  date_default_timezone_set('Asia/Kolkata');
  $current_appointment =  date('d-m-Y H:i');



  
    $query = "INSERT INTO `visit` (`visit_id`, `user_id`, `complaints`, `bp1`, `bp2`, `pulse`, `ge`, `se`, `fd`, `fcheck`, `comments`, `next_appointment`, `current_appointment`) VALUES (NULL, '$user_id', '$complaints', '$bp1', '$bp2', '$pulse', '$ge', '$se', '$fd', '$fcheck', '$comments', '$next_appointment', '$current_appointment');";
  $result =  mysqli_query($connection, $query);


    $queryes = "UPDATE `users` SET `current_appointment` = '$current_appointment' WHERE `users`.`user_id` = $user_id;";
    mysqli_query($connection, $queryes);

    header('Location: profilePatient.php?user_id='.$user_id.'&flag=0&post_id=0');



}

?>