<?php
ob_start();
 include "db.php";

 
$uid = $_GET['user_id'];
$sql = "SELECT * FROM visit WHERE user_id='$uid' order by current_appointment desc";
$select_user_query = mysqli_query($connection, $sql);
$i =0 ;

 if($select_user_query){
  $rowcount=mysqli_num_rows($select_user_query);
 }
 


 ?>

<table class="table">
  <thead class="blue white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Visit History</th>
    </tr>
  </thead>
  <tbody>
    
      <?php

while($row = mysqli_fetch_array($select_user_query)){
    $current_appointment = $row['current_appointment'];
   

      ?><tr>
      <th scope="row"><?php echo "$rowcount";  ?></th>
          <td><a href="report.php?user_id=<?php echo $uid; ?>&current_appointment=<?php echo $current_appointment; ?>"> <?php echo "$current_appointment";  ?></a></td> </tr>  
     <?php   $rowcount = $rowcount - 1;
 }
?>
    
 
  </tbody>

</table>





  </div>
</div>




<!-- Central Modal Small -->