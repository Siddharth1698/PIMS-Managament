<?php

ob_start();
 include "db.php";
 $user_id = $_GET["user_id"];
 $p_date = $_GET["p_date"];
 $admin_id = $_GET["admin_id"];
 $current_appointment = $_GET["current_appointment"];


 $date_clickeder = time();

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

  <div id="printthis">

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
      <th scope="row"><?php echo "$i"; echo "."; ?></th>
      <td><?php echo "$inname";  ?></td>
      <td><?php echo "$indet"; echo " ";  echo "for"; ?></td>
       <td><?php echo "$inmed";   echo " ";  echo "weeks"; ?></td>
      <br>
    </tr>

    <?php
    $i =$i + 1;
}

    ?>
    


<?php

$sql = "SELECT * FROM visit WHERE current_appointment='$current_appointment'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
    $user_id = $row['user_id'];
 
  $complaints = $row['complaints'];
  $bp1 = $row['bp1'];
  $bp2 = $row['bp2'];
  $pulse = $row['pulse'];
  $pd = $row['pd'];
  $ge = $row['ge'];
  $se = $row['se'];
  $fd = $row['fd'];
  $fcheck = $row['fcheck'];
  $comments = $row['comments'];
  $next_appointment = $row['next_appointment'];
 }



?>



<?php
   
   if ($fcheck == "1") {
   	?>
<p><span style="font-weight: 400;">Final Diagnosis</span><span style="font-weight: 400;">: </span><span style="font-weight: 400;"><p><?php echo "$fd";  ?></p></span><span style="font-weight: 400;"> &nbsp;</span></p>
<p>&nbsp;</p>



   	<?php

   }

?>

<p><span style="font-weight: 400;">Next review date</span><span style="font-weight: 400;">: <?php  echo "$next_appointment";  ?></span></p></div>
<p></p>

</div>

<br>
<div  style=" text-align: center;" class='no-print'>
<button onclick="printElem('printthis')">Print</button>
<button  ><a style="text-decoration: none; color: black;" href="profilePatient.php?user_id=<?php echo "$user_id" ?>&flag=0&post_id=0&admin_id=<?php echo "$admin_id" ?>&p_date=<?php echo "$date_clickeder" ?>">Close</a></button></div>
<br><br><br><br>
</body>
</html>




<script type="text/javascript">
  
function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print');
    mywindow.document.write(content);
 mywindow.document.write('<html><head><title> Patient Information Manangment Sysytem</title>');
    
    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
    mywindow.close();
    return true;
}
</script>