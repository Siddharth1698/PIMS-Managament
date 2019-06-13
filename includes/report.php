<?php

ob_start();
 include "db.php";
 $user_id = $_GET["user_id"];
 $current_appointment = $_GET["current_appointment"];


 $sql = "SELECT * FROM visit INNER JOIN users ON visit.user_id= $user_id AND users.user_id = $user_id AND visit.current_appointment= '$current_appointment' ";

$select_user_query = mysqli_query($connection, $sql);


while($row = mysqli_fetch_array($select_user_query)){
      $user_id = $row['user_id'];
 
  $complaints = $row['complaints'];
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
  $bp1 = $row['bp1'];
  $bp2 = $row['bp2'];
  $pulse = $row['pulse'];
  $ge = $row['ge'];
  $se = $row['se'];
  $fd = $row['fd'];
  $fcheck = $row['fcheck'];
  $comments = $row['comments'];
  $next_appointment = $row['next_appointment'];

 }


 ?>


<!DOCTYPE html>
<html>
<head>
	<title> Patient Information Manangment Sysytem</title>
	<style type="text/css">
	@media screen {
  div.divFooter {
    display: none;
  }
}
@media print {
  div.divFooter {
    position: fixed;
    bottom: 0;
  }
}
</style>
</head>
<body style="margin-left: 20px;" >
	<div id="printthis">
		<div style="text-align: center;">
			
			Patient Information Manangment Sysytem
		</div>
		<br><br>
		<p><span style="font-weight: 400;" class="text-center">Visit Summary Report</span></p>
	<p><span style="font-weight: 400;">____________________________________________________________________________</span></p>

<p><span style="font-weight: 400;">Date: <?php echo "$current_appointment";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Unique ID:</span><span style="font-weight: 400;"><?php echo "$user_uniqueid";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Name</span><span style="font-weight: 400;">: <?php echo "$fname"; echo "$lname"; ?></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-weight: 400; margin-left: 30px;" >Age</span><span style="font-weight: 400;">: <?php echo "$dob";  ?> Years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-weight: 400; margin-left: 30px;">Gender</span><span style="font-weight: 400;">: <?php echo "$gender";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Referred by</span><span style="font-weight: 400;">: <?php echo "$reffered";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Complaints</span><span style="font-weight: 400;">: </span></p>
<p><span style="font-weight: 400;"><?php echo "$complaints";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Past History</span><span style="font-weight: 400;">:</span></p>
<ol>
<li style="font-weight: 400;"><span style="font-weight: 400;">Ailment 1 for 2 years</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Ailment 2 was there, now got married so other problems instead</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Ailment 3 same as Ailment 2</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Ailment 4 same as Ailment 2</span></li>
</ol>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">On Examination</span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;">BP: <?php echo "$bp1";  ?> / <?php echo "$bp2";  ?> mmHG</span> <span style="font-weight: 400;">Pulse Rate: <?php echo "$pulse";  ?> /min</span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">General Examination</span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$ge";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">System Examination</span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$se";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Provisional Diagnosis</span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "to be added.. mistakenly missed it";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Investigation Parameters</span><span style="font-weight: 400;">:</span></p>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td>
<p><span style="font-weight: 400;">SGOT = </span></p>
</td>
<td>
<p><span style="font-weight: 400;">SGPT = </span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">INR = </span></p>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Final Diagnosis</span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$fd";  ?></span></p>
<p><br /><br /><br /><br /><br /></p>
<p><span style="font-weight: 400;">Medications</span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;">Deigene</span> <span style="font-weight: 400;">1-1-1</span> <span style="font-weight: 400;">for 2 weeks</span></p>
<p><span style="font-weight: 400;">Feigene</span> <span style="font-weight: 400;">1-0-1</span> <span style="font-weight: 400;">for 1 weeks</span></p>
<p><span style="font-weight: 400;">Seigene</span> <span style="font-weight: 400;">1-1-0</span> <span style="font-weight: 400;">for 0.5 weeks</span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Comments</span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$comments";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">Next review date</span><span style="font-weight: 400;">: <?php echo "$next_appointment";  ?></span></p>
<br>
<footer>
	<div class="divFooter">

	<p><span style="font-weight: 400;">Dr. Jinachandran, MD,Whatnot, Best doctor in the world,</span><span style="font-weight: 400;"><br>
		<span style="font-weight: 400;">
Ph, Email, etc </span><span style="font-weight: 400;">:</span></p></div>

       
</footer>
</div>

<br>
<div class="text-center form-inline" style="margin-left: 200px; ">
<button onclick="printElem('printthis')">Print</button>
<button>Close</button></div>
<br><br><br><br>
</body>
</html>


<script type="text/javascript">
	
function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

    mywindow.document.write(content);


    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
    mywindow.close();
    return true;
}
</script>
