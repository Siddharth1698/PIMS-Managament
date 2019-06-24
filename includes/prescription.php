<?php

ob_start();
 include "db.php";
 $user_id = $_GET["user_id"];
 $p_date = $_GET["p_date"];
 $current_appointment = $_GET["current_appointment"];



 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		.man{border-style: groove;
			padding : 25px;
			
			}

	</style>


<?php

$sql = "SELECT * FROM users WHERE user_id='$user_id'";
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



         $date = new DateTime($dob);
         $now = new DateTime();
         $interval = $now->diff($date);
         $age = $interval->y;


  
 }



?>

	<p><br /><br /><br /><br /><br /></p>
	<div class="man">
<p><span style="font-weight: 400;">Date</span><span style="font-weight: 400;">: <?php  echo "$current_appointment";   ?> </span><em><span style="font-weight: 400;"></span></em></p>
<p><br /><br /></p>
<p><span style="font-weight: 400;">Unique ID</span><span style="font-weight: 400;">: <?php echo "$user_uniqueid";  ?></span></p>
<p><span style="font-weight: 400;">Name</span><span style="font-weight: 400;">: <?php echo "$fname"; echo " "; echo "$lname";  ?></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: 400;">Age</span><span style="font-weight: 400;">: <?php echo "$age";  ?> Years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-weight: 400;">Gender</span><span style="font-weight: 400;">: <?php echo "$gender";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Medications</span><span style="font-weight: 400;">:</span></p>


      <?php
       $i = 1;

$sql = "SELECT * FROM medication WHERE user_id='$user_id' AND p_date='$p_date'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
 
    $inname = $row['name'];
    $indet = $row['detail'];
        $inmed = $row['med'];

    
 



?><tr>
      <th scope="row"><?php echo "$i"; ?></th>
      <td><?php echo "$inname";  ?></td>
      <td><?php echo "$indet"; echo " ";  echo "for"; ?></td>
       <td><?php echo "$inmed";  ?></td>
      
    </tr>

    <?php
    $i =$i + 1;
}

    ?>
    

<p><span style="font-weight: 400;">Final Diagnosis</span><span style="font-weight: 400;">: </span><em><span style="font-weight: 400;">In case ticked in the visit report</span></em><span style="font-weight: 400;"> &nbsp;</span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Next review date</span><span style="font-weight: 400;">: dd/mm/yyyy</span></p></div>
<p><br /><br /><br /><br /></p>

</body>
</html>