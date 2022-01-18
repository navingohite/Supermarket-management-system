<?php
require_once"dbconfig.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin | Super Marker Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Super Marker Management System</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
	
			
		  <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
	
          
        </ul>
      </div>
    </div>
  </nav>
</br>
  <!-- Page Content -->
  <div class="container">

    

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Sign In</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      
      <!-- Contact Details Column -->
     
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
	<div class="col-lg-4 "></div>
      <div class="col-lg-4 ">
        <h3>Only admin can login...</h3>

        <form method="post">
          
          
          <div class="control-group form-group">
            <div class="controls">
              <label>Email:</label>
              <input type="text" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
		  <div class="control-group form-group">
            <div class="controls">
              <label>Password:</label>
              <input type="password" class="form-control" name="password" required data-validation-required-message="Please enter your password.">
            </div>
          </div>
         
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
        </form>
        </form>
				  <?php
				  if(isset($_REQUEST['submit']))
				  {
					  extract($_REQUEST);
					  $n=select("select * from admin where email='$email' and password='$password'");
					  $t=mysqli_num_rows($n);
					  if($t==1)
					  {
						  $_SESSION['adminlogin']='yes';
						  echo"<script>window.location='index.php';</script>";
					  }
					  else
					  {
						  echo"<script>alert('Something Went Wrong');</script>";
					  }
				  }
				  ?>
      </div>

    </div>
	<br>
    <!-- /.row -->

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Super Marker Management System</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
