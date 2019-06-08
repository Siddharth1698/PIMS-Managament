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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
<nav class="navbar navbar-dark indigo text-center d-flex justify-content-center">
  <span class="navbar-text white-text">
Patient Information Managment System  </span>
</nav>


<!-- Material form subscription -->
<div class="card text-center d-flex justify-content-center ">

    <h5 class="card-header info-color white-text text-center py-4 ">
        <strong>Log In</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="includes/login.php" method="post">

            

            

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" name="username" id="username" class="form-control">
                <label for="username">Name</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
                <input type="password" name="password" id="password" class="form-control">
                <label for="password">Password</label>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="login">Sign in </button>


        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form subscription -->
<!--/.Navbar -->

<!-- Footer -->
<footer class="page-footer font-small blue fixed-bottom">

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
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
