<?php
require_once"dbconfig.php";

if (!isset($_SESSION['login_user2'])) {
  header("location: login.php");
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
      <a class="navbar-brand" href="index.php">Super Marker Management System</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav ml-auto">
	
        <?php
		if(isset($_SESSION['login_user2']))
		{
			?><li class="nav-item">
            <a class="nav-link active" href="index.php">Welcome, <?=ucwords($_SESSION['login_user2'])?></a>
          </li>
			<li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
			<li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
         <li class="nav-item ">
            <a class="nav-link" href="#">My Cart</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          
			<?php
		}
		else
		{
			?>
			 <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
			<?php
		}
		?>
	
          
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

        <h1 class="my-4">Categories</h1>
        <div class="list-group">
          <a href="#" class="res list-group-item"> Grocery </a>
          <a href="#" class="res list-group-item"> Clothes </a>
          <a href="#" class="res list-group-item"> Electonics </a>
          <a href="#" class="res list-group-item"> Footware </a>
   
        
        

        </div>
        
          
        

      </div>
      <!-- /.col-lg-3 -->
    

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/c1.png" alt="First slide">
            </div>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        

        <div class="row" id="showdata"></div>
        <div class="row" id="olddata">


        <div class="col-lg-4 col-md-6 mb-4">
              <form method="post" action="cart.php">

                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="img/product.png" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Product Name</a>
                    </h4>
                    <h5>000.00 INR</h5>
                    <p class="card-text"> description about product</p>
                  </div>
                  <div class="card-footer">
                    <p class="card-text">Quantity:
                      <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;">
                    </p>
                    <input type="hidden" name="hidden_name" value="">
                    <input type="hidden" name="hidden_price" value="">
                    <input type="hidden" name="hidden_RID" value="">
                    <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
                  </div>
                </div>
                
              </form>
            </div>
          

        



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