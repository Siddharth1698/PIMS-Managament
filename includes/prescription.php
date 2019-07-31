<?php

ob_start();
 include "db.php";
 $user_id = $_GET["user_id"];
 $p_date = $_GET["p_date"];
 $admin_id = $_GET["admin_id"];
 $prstatus = $_GET["prstatus"];
 $current_appointment = $_GET["current_appointment"];

 if ($prstatus == "1") {

 	$sql = "SELECT * FROM medication WHERE user_id='$user_id' AND current_appointment='$current_appointment'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
 $p_date = $row['p_date'];

 }
 }


 $date_clickeder = time();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  
  <link href="../css/mdb.min.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


	<style type="text/css">
		.man{border-style: groove;
			padding : 25px;
			
			}

	</style>

<div>
  <br>
<div  style=" text-align: right; margin-right: 50px;"  class='no-print'>
<button class="btn" onclick="printElem('printthis')">Print</button>

<?php if ($prstatus!=0) {
  ?>
<button class="btn" onclick="goBack()">Close</button>

<?php }else{

?>

<button class="btn"  ><a style="text-decoration: none; color: black;" href="profilePatient.php?user_id=<?php echo "$user_id" ?>&flag=0&post_id=0&admin_id=<?php echo "$admin_id" ?>&p_date=<?php echo "$date_clickeder" ?>">Close</a></button></div>
<?php  }
?>
  

</div>

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

   $dater = DateTime::createFromFormat('Y-m-d', "$next_appointment"); 
 }



?>
<div style="text-align: center;">
  
  <p ><i>
Dr. Jinachandran M K <br>
MBBS MD(Gen. Med), DNB(Gastro)<br>
Consultant Gastroenterologist <br>
Reg. No. 35864</i>
</p>



</div>
<br>


	<p><h4 style="text-align: center;"><u>Prescription</u></h4><br /></p>
	<div class="man">
<p><span style="font-weight: 400;"><b>Date</b></span><span style="font-weight: 400;">: <?php  echo "$current_appointment";   ?> </span><em><span style="font-weight: 400;"></span></em></p>
<p></p>
<p><span style="font-weight: 400;"><b>Unique ID</b></span><span style="font-weight: 400;">: <?php echo "$user_uniqueid";  ?></span></p>
<p><span style="font-weight: 400;"><b>Name</b></span><span style="font-weight: 400;">: <?php echo "$fname"; echo " "; echo "$lname";  ?></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: 400;"><b>Age</b></span><span style="font-weight: 400;">: <?php echo "$age";  ?> Years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-weight: 400;"><b>Gender</b></span><span style="font-weight: 400;">: <?php echo "$gender";  ?></span></p>


<?php
   
   if ($fcheck == "yes") {
    ?>
<p><span style="font-weight: 400;"><b>Diagnosis</b>: <?php echo "$fd";  ?></span></p>




    <?php

   }

?>




      <?php
       $i = 1;

$sql = "SELECT * FROM medication WHERE user_id='$user_id' AND p_date='$p_date'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
 
    $inname = $row['name'];
    $indet = $row['detail'];
        $inmed = $row['med'];

    
 



?>
<p><span style="font-weight: 400;"><b>Medications</b></span><span style="font-weight: 400;">:</span></p>
<tr>
      <th scope="row"><?php echo "$i"; echo "."; ?></th>
      <td><?php echo "$inname";  ?></td>
      <td><?php echo "$indet"; echo " ";  echo "for"; ?></td>
       <td><?php echo "$inmed";   echo " ";   ?></td>
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

   $dater = DateTime::createFromFormat('Y-m-d', "$next_appointment"); 
 }



?>



<br>

<p><span style="font-weight: 400;"><b>Next review date</b></span><span style="font-weight: 400;">: <?php echo $next_appointment; ?></span></p></div><br>

<div style="text-align: right;">
    <p style="text-align: right;">Dr. Jinachandran M K</p>


</div>
<p></p>
<style type="text/css">
  @media print {
  @page { margin: 0; }
  body { margin: 1.6cm; }
}
</style>
</div>

<br>
<div  style=" text-align: right; margin-right: 50px;"  class='no-print'>
<button class="btn" onclick="printElem('printthis')">Print</button>

<?php if ($prstatus!=0) {
  ?>
<button class="btn" onclick="goBack()">Close</button>

<?php }else{

?>

<button class="btn"  ><a style="text-decoration: none; color: black;" href="profilePatient.php?user_id=<?php echo "$user_id" ?>&flag=0&post_id=0&admin_id=<?php echo "$admin_id" ?>&p_date=<?php echo "$date_clickeder" ?>">Close</a></button></div>
<?php  }
?>
<br><br><br><br>
</body>
</html>

<script type="text/javascript">
history.pushState(null, null, '<?php echo $_SERVER["REQUEST_URI"]; ?>');
window.addEventListener('popstate', function(event) {
  window.location.href="profilePatient.php?user_id=<?php echo "$user_id" ?>&flag=0&post_id=0&admin_id=<?php echo "$admin_id" ?>&p_date=<?php echo "$date_clickeder" ?>";
   
});
</script>


<script type="text/javascript">


  
  function goBack() {
  window.history.back();
}

function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print');
    mywindow.document.write(content);
 
    
    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
    mywindow.close();
    return true;
}
</script>