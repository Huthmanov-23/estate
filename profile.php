<?php
require 'residentclass.php';


// if (!isset($_SESSION['user'])) {
//   header('location:index.php');
//}
$r = new Resident;
$rows = $r->get_details($_SESSION['user']);
require 'header.php';



// echo "<pre>";
// print_r($rows);
// echo "</pre>";
?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Member
      <small>Payment Page</small>
    </h1>

    <div class='alert alert-info'>Hi, you are logged in. Your UserId is <?php
    echo $rows['resident_userid'];
    ?></div>

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
	  <form method="POST" action="image_upload.php" enctype="multipart/form-data">
	  <input type='file' name='mypix'>
    <button>Upload Picture</button>
	  </form>
	  </div>
        <div class="list-group">
          <a href="index.php" class="list-group-item">Home</a>
          <a href="" class="list-group-item">Edit Profile</a>
          <a href="payments.php" class="list-group-item">My Payments</a>
          <a href="shop.php" class="list-group-item">Shop</a>
          <a href="logout.php" class="list-group-item">Logout</a>
         
          
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <h2>Hi <?php
          echo ucwords($rows['resident_fname']." " . $rows['resident_lname']);
        ?></h2>
        <p>A welcome is a kind of greeting designed to introduce a person to a new place or situation, and to make them feel at ease. The term can similarly be used to describe the feeling of being accepted on the part of the new person. In some contexts, a welcome is extended to a stranger to an area or a household..</p>
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
        <form action='login.php'>
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
</body>

</html>
