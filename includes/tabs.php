<?php

$user_id = $_GET['user_id'];

?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item"> 
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">Past History</a>
  </li>
  <li class="nav-item"> 
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
      aria-selected="false">Visit Update</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
      aria-selected="false">Visit History</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<br><br>

<?php
 $_GET['user_id']=$user_id;
include "ailments.php";
?>
<!-- Material inline form -->
</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<!-- Material form register -->
  <?php
              $_GET['user_id']=$user_id;

           include "visitupdate.php";
           ?>

</div>
<!-- Material form register -->
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

<?php
 $_GET['user_id']=$user_id;
include "visithistory.php";
?>
    <!--/.Content-->
  </div>
</div>