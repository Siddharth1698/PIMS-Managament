<?php
ob_start();

$flag = $_GET['flag'];
$post_id = $_GET['post_id'];
 $admin_id=$_GET['admin_id'];
 $p_date = $_GET["p_date"];

$fcheck = '';


if($flag == 1 && $post_id!=0){

$sql = "SELECT * FROM savedvisit WHERE post_id='$post_id'";
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

 
  <form method="post" action="visitDetails.php?admin_id=<?php echo "$admin_id"; ?>&p_date=<?php echo "$p_date"; ?>" >
    <div class="form-group">
        <label for="complaints">Complaints: </label>
        <textarea type="text" name="complaints" rows="6"  class="form-control" id="complaints" placeholder="Complaints"><?php  if($flag==1){ echo "$complaints";}  ?></textarea>
    </div>


    
    <div class="form-group">
         <label for="bp1">Blood Pressure(mmHg): </label>
         <div class="form-inline">
         <input type="number" value= "<?php  if($flag==1){ echo "$bp1";}  ?>" name="bp1" class="form-control" id="bp1" placeholder="1st BP Field"> /
         <input type="number" name="bp2" value= "<?php  if($flag==1){ echo "$bp2";}  ?>" class="form-control" id="bp2" placeholder="2nd BP field">
    </div>
   </div>


    <div class="form-group">
        <label for="ps">Pulse Rate(/min): </label>
        <input type="number" name="pulse" value= "<?php  if($flag==1){ echo "$pulse";}  ?>" class="form-control" id="ps" placeholder="Pulse Rate">
    </div>

     <div class="form-group">
        <label for="pd">Provisional Diganosis: </label>
        <textarea type="text" name="pd" rows="6"  class="form-control" id="pd" placeholder="Provisional Diganosis"><?php  if($flag==1){ echo "$pd";}  ?></textarea>
    </div>



  
<a href="<?php  echo "investigation/index.php?user_id=$user_id&p_date=$p_date"; ?>" class="btn" >Investigation Parameters</a>

<style type="text/css">
  .table td.fit, 
.table th.fit {
    white-space: nowrap;
    width: 1%;
}
</style>


<table style="white-space: nowrap; width: 1%;" class="table">
  <thead class="blue white-text">
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Investigation Parameters</th>
      <th scope="col">Values</th>
      
    </tr>
  </thead>
  <tbody>
    
      <?php
       $i = 1;

$sql = "SELECT * FROM investigation WHERE user_id='$user_id' AND p_date='$p_date'";
$select_user_query = mysqli_query($connection, $sql);

 while($row = mysqli_fetch_array($select_user_query)){
 
    $inname = $row['name'];
    $indet = $row['detail'];
    
 



?><tr>
      <th scope="row"><?php echo "$i"; ?></th>
      <td><?php echo "$inname";  ?></td>
      <td><?php echo "$indet";  ?></td>
      
    </tr>

    <?php
    $i =$i + 1;
}

    ?>

  </tbody>
</table>
<hr>

   <div class="form-inline">
    <div class="row">
       <div class="col-xs-6 col-md-6 col-sm-6 col-lg-5 form-group">
    <label for="ge">General Examination:</label>

<textarea type="text" name="ge" value= "" rows="6" cols="50" class="form-control" id="ge" placeholder="General Examination"><?php  if($flag==1){ echo "$ge";}  ?></textarea></div>
 
 <div class="col-xs-6 col-md-6 col-sm-6 col-lg-5 form-group">
    
        <label for="se">System Examination: </label>

  <textarea type="text" name="se" rows="6" value= "" cols="50" class="form-control" id="se" placeholder="System Examination"><?php  if($flag==1){ echo "$se";}  ?></textarea> </div>

   

</div>
</div>
    

     
    <div class="form-group">
        <label for="fd">Final Diganosis: </label>
        <textarea type="text" name="fd" value= "" rows="6" class="form-control" id="fd" placeholder="Final Diganosis"><?php  if($flag==1){ echo "$fd";}  ?></textarea>
        <input type="hidden" name="field1" >
<input type="checkbox" name="field1" value="yes" <?php echo ($fcheck=='yes' ? 'checked' : '');?>>Please tick the checkbox to include in prescription
<br>
    </div>


     <a href="<?php  echo "medication/index.php?user_id=$user_id&p_date=$p_date"; ?>" class="btn" >Medication</a> 


<table  style="white-space: nowrap; width: 1%;" class="table">
  <thead class="blue white-text">
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Med/Test</th>
      <th scope="col">Frequency</th>
      <th scope="col">Duration</th>
      
    </tr>
  </thead>
  <tbody>
    
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
      <td><?php echo "$indet";  ?></td>
       <td><?php echo "$inmed";  ?></td>
      
    </tr>

    <?php
    $i =$i + 1;
}

    ?>
    
  </tbody>
</table>

<hr>
    

      <div class="form-group">
        <label for="ac">Any comments: </label>
        <textarea type="text" value= "" rows="6" name="comments" class="form-control" id="ac" placeholder="Any Comments"><?php  if($flag==1){ echo "$comments";}  ?></textarea>
    </div>

       <div class="form-group">
        <label for="pnv">Planned Next Visit: </label>

<style type="text/css">
  
  .cole{
    width: 180px;
  }
</style>


 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
  
 


 <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd-mm-yy" }).val()
       });
   </script>

        <input type="text"  name="next_appointment"  id="datepicker"  class="form-control cole" placeholder="Planned Next Visit" value= "<?php  if($flag==1){ echo "$next_appointment";}  ?>" size="30"/> 

        
    </div>
   
   
   <div class="text-center">
   <!--  <input type="submit" value="Update" class="btn update" name="up" ></input> -->

   <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Final Submission</button>
        
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
        <p>This action will commit data to the DB. No further changes possible. Do you want to continue"</p>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Yes" class="btn sub" name="sub" ></input>

        <button type="button" class="btn" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>


    </div>


