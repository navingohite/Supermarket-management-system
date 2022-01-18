<?php
require_once"dbconfig.php";

if(isset($_SESSION['userlogin']))
{
	
}
else
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Super Marker Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include"nav.php";?>

 

    </br>
    </br>
    </br>

<!-- Footer -->
  <?php include"footer.php" ?>
  <!-- Footer -->
    </body>
</html>