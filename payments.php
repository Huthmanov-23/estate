<?php
require 'residentclass.php';



$r = new Resident;
$rows = $r->get_details($_SESSION['user']);
include 'header.php';

$items = $r->get_bills();

?>





<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Moat Academy Cohort 13 Estate</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  
<style type="text/css">
.nav-link{ color:white;}
.nav-link:hover{
	color:grey;
}
</style>


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg  fixed-top" style='background-color:green'>
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo2.png" width='100'></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
		   <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Hello Adeola
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="profile.php">Edit Profile</a>
              <a class="dropdown-item" href="blog-home-2.php">My Payments</a>
              <a class="dropdown-item" href="blog-post.php"></a>
            </div>
          </li>
          <li class="nav-item" style='background-color:yellow;margin-left:60px !important;'>
            <a class="nav-link" style='color:green' href='#' data-toggle="modal" data-target="#exampleModal" >Login</a>
          </li>
           
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Member
      <small>Personalized Page</small>
    </h1>

    

    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
	  <div>
	  <img src="<?php

    if($rows['resident_picture']!=''){
      echo 'uploaded/'.$rows['resident_picture'];
    }else{
      echo 'uploaded/male_avatar.png';
    }

    ?>" class='img-fluid'>
	  </div>
        <div class="list-group">
          <a href="profile.php" class="list-group-item">Home</a>
          <a href="edit.php" class="list-group-item">Edit Profile</a>
          <a href="payments.php" class="list-group-item">My Payments</a>
          <a href="pass.php" class="list-group-item">Change Password</a>
          <a href="logout.php" class="list-group-item">Logout</a>
         
          
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <p>A receipt will be sent to you... Payment instructions</p>
		
		 
<form action="confirmpay.php" method="POST">
  
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><input type='checkbox' id='selectall'></th>
      <th scope="col">Item</th>
      <th scope="col">Amount</th> 
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($items as $item) {
    ?>
    <tr>
      <th scope="row"><input type='checkbox' class='item' value='<?php echo $item['bill_id'];?>' name='item[]'></th>
      <td><?php echo $item['bill_name'];?></td>
      <td>&#8358;<?php echo number_format($item['bill_amount'],2);?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<div style='text-align:right'><button class='btn btn-info'>Proceed to Make Payment</button></div>
</form>

      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#selectall").change(function() {
        var g = $('#selectall').prop('checked');
        if (g) {
          $(".item").attr('checked', 'checked');
        }else{
          $(".item").removeAttr('checked');
        }
      });
    });
  </script>

</body>

</html>
