
<?php
require_once"dbconfig.php";

if(isset($_SESSION['adminlogin']))
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

  <title>Admin Panel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <style>
    .pagination {
      display: inline-block;
    }

    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
    }

    .pagination a.active {
      background-color: #4CAF50;
      color: white;
      border-radius: 5px;
    }

    .pagination a:hover:not(.active) {
      background-color: #ddd;
      border-radius: 5px;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Super Marker Management System</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav ml-auto">
	
			 
		  <li class="nav-item">
            <a class="nav-link" href="login.html">Logout</a>
          </li>
	
          
        </ul>

        
        
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  </br>
  </br>

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Admin Panel</h1>


        <div class="list-group">
          <a href="#" class=""> Dashbord </a>
          <a href="employee.php" class=""> Employee Details </a>
          <a href="searchproduct.php" class=""> Search Product </a>
          <a href="addproduct.php" class=""> Add Product </a>
          <a href="quantity.php" class=""> Product Quantity </a>
        </div>
        
          
        

      </div>
      <!-- /.col-lg-3 -->
    

      <div class="col-lg-9">
        <br><br><br>
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
          aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
       <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name </th>
            <th scope="col">Product Price </th>
            <th scope="col">Product Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Rice</td>
            <td>60/-</td>
            <td>1000/kg</td>
          </tr>
         
        </tbody>
      </table>
          <br><br><br><br><br><br><br><br>

          <br><br><br>
          <br><br><br>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>


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
  <script>
    $(document).ready(function() {
      $(".res").on('click', function() {
        var id = $(this).attr('idd');
        $.ajax({
          url: "fet_data.php",
          method: "POST",
          data: {
            id: id
          },
          success: function(data) {
            $('#olddata').hide();
            $('#showdata').html(data);
          }


        });
        return false;
      });
      /*$(document).on("click",".pagination_link",function(e){
		   var page = $(this).attr('hre');  
		   
             $('#aboutdata').hide();
		     $('#aboutdata1').hide();
			 $.ajax({
			type: 'POST',
			url: 'index.php',
			data: {"page":page},
			success: function(data){
				 
				
			}
});
return false;
            
      }); */
    });
  </script>

</body>

</html>