<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Visit Information</strong>
    </h5>
<br>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->

 
  <form>
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
        <input type="number" name="ps" class="form-control" id="ps" placeholder="Pulse Rate">
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
        <?php include "investe.php"; ?>
        
    </div>
    <div class="form-group">
        <label for="fd">Final Diganosis: </label>
        <textarea type="text" name="fd" rows="6" class="form-control" id="fd" placeholder="Final Diganosis"></textarea>
        <input type="checkbox" name="fdtopresc" value="True"  placeholder="Final Diganosis">Please tick the checkbox to include in prescription
<br>
    </div>

     <div class="form-group form-inline">
        <label for="pd">Medication: </label>
        <input type="text" name="ipdropdown" class="form-control" id="ipdropdown" ></textarea>
    </div>

      <div class="form-group">
        <label for="ac">Any comments: </label>
        <textarea type="text" rows="6" name="ac" class="form-control" id="ac" placeholder="Any Comments"></textarea>
    </div>

       <div class="form-group">
        <label for="pnv">Planned Next Visit: </label>
        <input type="date" name="pnv" class="form-control" id="pnv" placeholder="Planned Next Visit"></textarea>
    </div>
   
   
   <div class="text-center">
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

    </div>
