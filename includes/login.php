<?php  ob_start(); 
include "db.php"; ?>
<?php session_start(); ?>
<?php
if(isset($_POST['login'])){
    echo   $username = $_POST['username'];
       $password =  $_POST['password'];

    echo   $username = mysqli_real_escape_string($connection,$username);
      echo $password  = mysqli_real_escape_string($connection,$password);
    

    $query = "SELECT * FROM `admin` WHERE `admin_username` = '{$username}'";
     $select_user_query = mysqli_query($connection,$query);

     if(!$select_user_query){
         die("Query failes!". mysqli_error($connection));
     }
 while($row = mysqli_fetch_array($select_user_query)){
    echo    $db_admin_id = $row['admin_id'];
     echo   $db_admin_username = $row['admin_username'];
        $db_admin_password = $row['admin_password'];
    }

    if($username !== $db_admin_usename && $password !== $db_admin_password){
        header("Location: ../index.php");
    }
    else if($username == $db_admin_username && $password == $db_admin_password){
        $_SESSION['username'] = $db_admin_username;
        $_SESSION['adminid'] = $db_admin_id;

        header("Location: home.php?admin_id=$db_admin_id");
    }
    else{
        header("Location: ../index.php");
    }
 }
?>