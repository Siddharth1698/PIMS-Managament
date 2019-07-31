<?php
ob_start();
 include "db.php";
 $user_id = $_GET["user_id"];
 $current_appointment = $_GET["current_appointment"];



$ailsql = "SELECT * FROM table1 where user_id='$user_id";


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
  $pd = $row['pd'];
  $fcheck = $row['fcheck'];
  $comments = $row['comments'];
  $next_appointment = $row['next_appointment'];

   $dater = DateTime::createFromFormat('Y-m-d', "$next_appointment"); 
 }
 ?>


<!DOCTYPE html>
<html>
<head>
  <title> Patient Information Manangment Sysytem</title>
<style type="text/css">
    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        padding-top: 5px;
        padding-bottom: 40px;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    .fixed-header, .fixed-footer{
        width: 100%;
               
        
        
        
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }    
    /* Some more styles to beutify this example */
    nav a{
        color: #fff;
        text-decoration: none;
        
        display: inline-block;
    }
    .container p{
        line-height: 200px; /* Create scrollbar to test positioning */
    }
</style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

  <body style="margin-left: 10px; margin-top: 10px; margin-right: 10px;">
    <div style="text-align: right; margin-right: 50px; "><button class="btn" onclick="printElem('printthis')">Print</button>

<button class="btn"  onclick="goBack()">Close</button></div>
<br><br>
      <div id="printthis">

    <header >
       <p style="text-align: right;" ><i>
                Dr. Jinachandran M K<br>
MBBS MD(Gen. Med), DNB(Gastro)<br>
Consultant Gastroenterologist<br>
Reg. No. 35864<br>
Tel: +91 9746055577</i>

       </p>
</header>

     <div class="fixed-header">
        <div class="container">
           <div style="text-align: center;">
      

    </div>
        </div>
    </div>
    <?php
 $date = new DateTime($dob);
 $now = new DateTime();
 $interval = $now->diff($date);
 $age = $interval->y;
 
    ?>
  <div >  
    <br><br>
    <p><span style="font-weight: 400;" class="text-center"><b><u>Visit Summary Report</u></b></span></p>
  <p><span style="font-weight: 400;">____________________________________________________________________________</span></p>

<p><span style="font-weight: 400;"><b>Date</b>: <?php echo "$current_appointment";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Unique ID</b>: </span><span style="font-weight: 400;"><?php echo "$user_uniqueid";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Name</b></span><span style="font-weight: 400;">: <?php echo "$fname"; echo " "; echo "$lname"; ?></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-weight: 400; margin-left: 30px;" ><b>Age</b></span><span style="font-weight: 400;">: <?php echo "$age";  ?> Years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-weight: 400; margin-left: 30px;"><b>Gender</b></span><span style="font-weight: 400;">: <?php echo "$gender";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Referred by</b></span><span style="font-weight: 400;">: <?php echo "$reffered";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Complaints</b></span><span style="font-weight: 400;">: </span></p>
<p><span style="font-weight: 400;" rows="6"><?php echo "$complaints";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Past History</b></span><span style="font-weight: 400;">:</span></p>


  <?php
       $i = 1;

$sql = "select * from table1 where user_id='$user_id'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
 
    $inname = $row['name'];
    $indet = $row['detail'];
    
 



?><tr>
      <th scope="row"><?php echo "$i"; echo "."; ?></th>
      <td><?php echo "$inname";  ?></td>
      <td><?php echo "$indet";  ?></td>
      <br>
      
    </tr>

    <?php
    $i =$i + 1;
}

    ?>





<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>On Examination</b></span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><b>BP</b>: <?php echo "$bp1";  ?> / <?php echo "$bp2";  ?> mmHG&nbsp; &nbsp;</span> <span style="font-weight: 400;"><b>Pulse Rate</b>: <?php echo "$pulse";  ?> /min</span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>General Examination</b></span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$ge";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>System Examination</b></span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$se";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Provisional Diagnosis</b></span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$pd";  ?></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Investigation Parameters</b></span><span style="font-weight: 400;">:</span></p>


      <?php
       $i = 1;

$sql = "SELECT * FROM investigation WHERE user_id='$user_id' AND current_appointment='$current_appointment'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
 
    $inname = $row['name'];
    $indet = $row['detail'];
    
 



?><tr>
      <th scope="row"><?php echo "$i"; echo "."; ?></th>
      <td><?php echo "$inname";  ?></td>
      <td><?php echo "$indet";  ?></td>
      <br>
      
    </tr>

    <?php
    $i =$i + 1;
}

    ?>



<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Final Diagnosis</b></span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$fd";  ?></span></p>
<p><br /></p>
<p><span style="font-weight: 400;"><b>Medications</b></span><span style="font-weight: 400;">:</span></p>

<?php
       $i = 1;

$sql = "SELECT * FROM medication WHERE user_id='$user_id' AND current_appointment='$current_appointment'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
 
    $inname = $row['name'];
    $indet = $row['detail'];
        $inmed = $row['med'];

    
 



?><tr>
      <th scope="row"><?php echo "$i"; echo "."; ?></th>
      <td><?php echo "$inname";  ?></td>
      <td><?php echo "$indet";  echo " "; echo "for"; ?></td>
       <td><?php echo "$inmed"; echo " "; ?></td>  <br>
      
    </tr>

    <?php
    $i =$i + 1;
}

    ?>



<p>&nbsp;</p>
<p><span style="font-weight: 400;"><b>Comments</b></span><span style="font-weight: 400;">:</span></p>
<p><span style="font-weight: 400;"><?php echo "$comments";  ?></span></p>
<p>&nbsp;</p>
<?php  



?>
<p><span style="font-weight: 400;"><b>Next review date</b></span><span style="font-weight: 400;">: <?php echo $next_appointment; ?></span></p>
<br>
</div>

     



</div>

<br>
<div  style=" text-align: center;" class='no-print'>
  <div style="text-align: right; margin-right: 50px; "><button class="btn" onclick="printElem('printthis')">Print</button>

<button class="btn"  onclick="goBack()">Close</button></div>
</div>
<br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


<script type="text/javascript">
  function goBack() {
  window.history.back();
}
  
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