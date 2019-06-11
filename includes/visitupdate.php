<?php

$flag = $_GET['flag'];
$post_id = $_GET['post_id'];


if($flag == 1 && $post_id!=0){

$sql = "SELECT * FROM savedvisit WHERE post_id='$post_id'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
    $user_id = $row['user_id'];
 
  $complaints = $row['complaints'];
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


}


?>




<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Visit Information</strong>
    </h5>
<br>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->

 
  <form method="post" action="visitDetails.php" >
    <div class="form-group">
        <label for="complaints">Complaints: </label>
        <textarea type="text" name="complaints" rows="6"  class="form-control" id="complaints" placeholder="Complaints"><?php  if($flag==1){ echo "$complaints";}  ?></textarea>
    </div>

    
    <div class="form-group">
         <label for="bp1">Blood Pressure: </label>
         <div class="form-inline">
         <input type="number" value= "<?php  if($flag==1){ echo "$bp1";}  ?>" name="bp1" class="form-control" id="bp1" placeholder="1st BP Field"> /
         <input type="number" name="bp2" value= "<?php  if($flag==1){ echo "$bp2";}  ?>" class="form-control" id="bp2" placeholder="2nd BP field">
    </div>
   </div>

    <div class="form-group">
        <label for="ps">Pulse Rate: </label>
        <input type="number" name="pulse" value= "<?php  if($flag==1){ echo "$pulse";}  ?>" class="form-control" id="ps" placeholder="Pulse Rate">
    </div>

     <div class="form-group">
        <label for="ge">General Examination: </label>
        <textarea type="text" name="ge" value= "" rows="6" class="form-control" id="ge" placeholder="General Examination"><?php  if($flag==1){ echo "$ge";}  ?></textarea>
    </div>
     <div class="form-group">
        <label for="se">System Examination: </label>
        <textarea type="text" name="se" rows="6" value= "" class="form-control" id="se" placeholder="System Examination"><?php  if($flag==1){ echo "$se";}  ?></textarea>
    </div>
     

      <div class="form-group form-inline">
        <label for="pd">Investigation Parameters: </label>
      
        
    </div>
    <div class="form-group">
        <label for="fd">Final Diganosis: </label>
        <textarea type="text" name="fd" value= "" rows="6" class="form-control" id="fd" placeholder="Final Diganosis"><?php  if($flag==1){ echo "$fd";}  ?></textarea>
        <input type="hidden" name="field1" value= "<?php  if($flag==1){ echo "$fcheck";} else{ echo "0";}  ?>" >
<input type="checkbox" name="field1" value= "<?php  if($flag==1){ echo "$fcheck";} else{ echo "1";}  ?>">Please tick the checkbox to include in prescription
<br>
    </div>

    
      <div class="form-group form-inline">
        <label for="pd">Medication: </label>


     
        
    </div>

      <div class="form-group">
        <label for="ac">Any comments: </label>
        <textarea type="text" value= "" rows="6" name="comments" class="form-control" id="ac" placeholder="Any Comments"><?php  if($flag==1){ echo "$comments";}  ?></textarea>
    </div>

       <div class="form-group">
        <label for="pnv">Planned Next Visit: </label>
        <input type="date" name="next_appointment" value= "<?php  if($flag==1){ echo "$next_appointment";}  ?>" class="form-control" id="pnv" placeholder="Planned Next Visit">
    </div>
   
   
   <div class="text-center">
    <input type="submit" value="Update" class="btn update" name="up" ></input>

   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
        
    </div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Submit" class="btn sub" name="sub" ></input>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


</form>

    </div>


