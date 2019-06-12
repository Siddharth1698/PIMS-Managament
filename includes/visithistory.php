<?php
ob_start();
 include "db.php";

 
$uid = $_GET['user_id'];
$sql = "SELECT * FROM visit WHERE user_id='$uid' order by current_appointment desc";
$select_user_query = mysqli_query($connection, $sql);
$i =0 ;

 
 


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
    $i = $i + 1;

      ?><tr>
      <th scope="row"><?php echo "$i";  ?></th>
          <td><a href="" data-toggle="modal" data-target="#modalCookie1"> <?php echo "$current_appointment";  ?></a></td> </tr>  
     <?php  
 }
?>
    
 
  </tbody>

</table>





  </div>
</div>




<!-- Central Modal Small -->
<div class="modal fade top" id="modalCookie1"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-fluid" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Report</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="printableArea">

        <?php include "report.php";  ?>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
        <button type="button"  onclick="printDiv('printableArea')" class="btn btn-primary btn-lg">Print</button>


<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->