<?php
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');


		// Check if user is already logged in
		if(isset($_SESSION['loggedIn'])){
			header('Location: index.php');
			exit();
		}
?>
  <body>
	<!-- Default Page Content (login form) -->
    <div class="container">
      <div class="row justify-content-center">
	  <div class="col-sm-12 col-md-5 col-lg-5">
		<div class="card">
		  <div class="card-header">
			Login
		  </div>
		  <div class="card-body">
			<form action="">
			<div id="loginMessage"></div>
			  <div class="form-group">
				<label for="loginUsername">Username</label>
				<input type="text" class="form-control" id="loginUsername" name="loginUsername">
			  </div>
			  <div class="form-group">
				<label for="loginPassword">Password</label>
				<input type="password" class="form-control" id="loginPassword" name="loginPassword">
			  </div>
			  <button type="button" id="login" class="btn btn-primary">Login</button>
			  <!-- <a href="login.php?action=register" class="btn btn-success">Register</a> -->
			  <!-- <a href="login.php?action=resetPassword" class="btn btn-warning">Reset Password</a> -->
			  <!-- <button type="reset" class="btn">Clear</button> -->
			</form>
		  </div>
		</div>
		</div>
      </div>
    </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
