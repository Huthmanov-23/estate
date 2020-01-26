
<?php

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
  <script src="vendor/jquery/jquery.min.js" type="text/javascript" ></script>
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
      <a class="navbar-brand" href="index.html"><img src="images/logo2.png" width='100'></a>
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
          <?php
          if(isset($_SESSION['user'])){

          ?>
       <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hello <?php 
            echo $rows['resident_fname'];
            ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="edit.php">Edit Profile</a>
              <a class="dropdown-item" href="payments.php">My Payments</a>
              <a class="dropdown-item" href="shop.php">Shop</a>
            </div>
          </li>
          <?php
        }
          ?>
          <li class="nav-item" style='background-color:yellow;margin-left:60px !important;'>
            <?php
              if(isset($_SESSION['user'])){
            ?>
            <a href="logout.php" class="nav-link" style="color:green">Logout</a>
            <?php
          }else{
          ?>
          <a href="#" class="nav-link" data-toggle='modal'  data-target='#exampleModal'>Login</a>
          <?php
        }
        ?>
          </li>
          
           
         
        </ul>
      </div>
    </div>
  </nav>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member's Login Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='login.php' method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">User ID</label>
    <input type="text" name='userid' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name='pwd' class="form-control" id="exampleInputPassword1">
  </div>
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
  <button type="submit" class="btn btn-info">Login</button>
</form>
      </div>
      
    </div>
  </div>
</div>