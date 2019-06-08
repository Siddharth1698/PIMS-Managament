<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Patient Info Managment System</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">







   

  <!-- Your custom styles (optional) -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/addPatient.css">
        <script type="text/javascript" src="../js/addPatient.js"></script>

        <script src="item-ajax.js"></script>
</head>

<body>

  <!-- Start your project here-->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark indigo fixed-top">
  <a class="navbar-brand" href="#">PIMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">
          <i class="fas fa-clinic-medical"></i> Home
          
        </a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="../index.html">
         <i class="fab fa-instagram"></i> Logout</a>
      </li>

    
    </ul>

  </div>
</nav>
<!--/.Navbar -->

<!-- Material form register -->
<div class="card carder">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Add or Update Patient</strong>
    </h5>
<br>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <div class="md-form">                   First Name:

                        <input type="text" id="materialRegisterFormFirstName"  class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                    <!-- Last name -->Last Name:
                        <input type="email" id="materialRegisterFormLastName"  class="form-control">
                        <label for="materialRegisterFormLastName"></label>
                    </div>
                </div>

                <div class="col">
            <div class="md-form">Phone Number:
                <input type="number" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhone">
               <br>
                  
                </small>
            </div></div>

   <!-- Password -->
</div>
         <div class="form-row">

            <div class="col">Gender:
            <div class="md-form"> 
             
                  <!-- Basic dropdown -->
<select class="browser-default custom-select">
  <option selected>Select Gender</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
  
</select>
  
</div>
<!-- Basic dropdown -->

            </div>
 <!-- E-mail --><div class="col">Date:
            <div class="md-form"> 
                 <input id="datepicker"  width="100%" />
                            <script>
                          $('#datepicker').datepicker({
                             uiLibrary: 'bootstrap4'
                                     });
                          </script>
            </div>
            </div>

 <div class="col"> Reffered By:
            <div class="md-form">
                <input type="text" id="text" class="form-control" aria-describedby="text">
                
              
                  
                </small>
            </div></div>

            </div>

            <!-- Newsletter -->
          
            <!-- Sign up button -->
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


<!-- Editable table -->


<?php
include "ailments.php";
?>
<!-- Material inline form -->

   

<!-- Editable table -->


</div>


  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...



<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Visit Information</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">   Complaints:
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>
               
            </div>

            <!-- E-mail -->
            <div class="form-row">

              <div class="col">
                    <!-- First name -->
                    <div class="md-form"> Blood Pressure:
                        <input type="number" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>

                <div class="col">
                    <!-- First name -->
                    <div class="md-form"> Pulse Rate:
                        <input type="number" id="materialRegisterFormFirstName"  class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>
              

            </div>
         
            <!-- E-mail -->
            <div class="form-row">

              <div class="col">
                    <!-- First name -->
                    <div class="md-form"> General examination:
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>

                <div class="col">
                    <!-- First name -->
                    <div class="md-form"> System Examination:
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>
              

            </div>

             <div class="form-row">

              <div class="col">
                    <!-- First name -->
                    <div class="md-form"> Provisional Diganosis:
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>

              
            </div>

          <div class="form-row">

              <div class="col">
                    <!-- First name -->
                    <div class="md-form"> Final Diganosis:
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>

              
              

            </div>

             <div class="form-row">

              <div class="col">
                    <!-- First name -->
                    <div class="md-form"> Any Comments:
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName"></label>
                    </div>
                </div>


              <div class="col">
            <div class="md-form"> Next Appointment: 
                <input type="date" id="materialRegisterFormFirstName"  class="form-control">
                        <label for="materialRegisterFormFirstName"></label> 
            </div>
            </div>

              
              

            </div>



          

    

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Submit</button>

            <!-- Social register -->
  

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->






  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

<table class="table">
  <thead class="blue white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Visit History</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
          <td><a href="" data-toggle="modal" data-target="#modalCookie1"> 22/03/2019</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>12/01/2019</td>
    </tr>
    
  </tbody>
</table>





  </div>
</div>

<!--Modal: modalCookie-->
<div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
<br>
<h6 class="text-left">Visit Summary Report<br>
Date: dd/mm/yyyy
</h6>
<br>

<h6 class="text-right">Dr. Jinachandran <br>
MD, DM, Whatnot, Best doctor in the world,
Ph, Email, etc.
</h6>
<br>


        <div class="row d-flex justify-content-center align-items-center">





<form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Refered By</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Gender</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
          <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Past History</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Complaints</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">General Examination</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">System Examination</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">BP</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">PR</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Provisional Diganosis</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Investigation Parameters</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Final Diganosis</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>

            <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Medications</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>

             <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Comments from last Visit</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
    


       <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">Next Review</label>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

          </div>
    
    
        <div class="row text-center">
            <div class="col-md-12">
                <p class="text-muted">
                    <button type="button" class="btn btn-light">Print/Save</button>

          
            </div>
        </div>
    </div>

</form>
              





        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalCookie-->






            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">ADD/UPDATE</button>



        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->


<!-- Footer -->
<footer class="page-footer font-small blue ">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> PIMS</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/addPatient.js"></script>
  <!-- Bootstrap tooltips -->
  

  <!-- Bootstrap core JavaScript -->
 
</body>

</html>


