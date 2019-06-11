<?php
include "db.php";


if (isset($_POST['submit'])) {


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

 
  <form method="post" >
    <div class="form-group">
        <label for="complaints">Complaints: </label>
        <textarea type="text" name="complaints" rows="6" class="form-control" id="complaints" placeholder="Complaints"></textarea>
    </div>

    
    <div class="form-group">
         <label for="bp1">Blood Pressure: </label>
         <div class="form-inline">
         <input type="number" name="bp1" class="form-control" id="bp1" placeholder="1st BP Field"> /
         <input type="number" name="bp2" class="form-control" id="bp2" placeholder="2nd BP field">
    </div>
   </div>

    <div class="form-group">
        <label for="ps">Pulse Rate: </label>
        <input type="number" name="pulse" class="form-control" id="ps" placeholder="Pulse Rate">
    </div>

     <div class="form-group">
        <label for="ge">General Examination: </label>
        <textarea type="text" name="ge" rows="6" class="form-control" id="ge" placeholder="General Examination"></textarea>
    </div>
     <div class="form-group">
        <label for="se">System Examination: </label>
        <textarea type="text" name="se" rows="6" class="form-control" id="se" placeholder="System Examination"></textarea>
    </div>
     

      <div class="form-group form-inline">
        <label for="pd">Investigation Parameters: </label>
      
        
    </div>
    <div class="form-group">
        <label for="fd">Final Diganosis: </label>
        <textarea type="text" name="fd" rows="6" class="form-control" id="fd" placeholder="Final Diganosis"></textarea>
        <input type="hidden" name="field1" value="0">
<input type="checkbox" name="field1" value="1">Please tick the checkbox to include in prescription
<br>
    </div>

    
      <div class="form-group form-inline">
        <label for="pd">Medication: </label>


     
        
    </div>

      <div class="form-group">
        <label for="ac">Any comments: </label>
        <textarea type="text" rows="6" name="comments" class="form-control" id="ac" placeholder="Any Comments"></textarea>
    </div>

       <div class="form-group">
        <label for="pnv">Planned Next Visit: </label>
        <input type="date" name="next_appointment" class="form-control" id="pnv" placeholder="Planned Next Visit"></textarea>
    </div>
   
   
   <div class="text-center">
    <input type="submit" value="Update" class="btn" name="submit"></input>
    </div>
</form>

    </div>

<script type="text/javascript">
  
