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
    <input type='file' class="mb-2" name='mypix'>
    <button class="btn btn-info mb-2">Upload Picture</button>
    </form>
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
        <h2>Hi <?php
          echo ucwords($rows['resident_fname']." " . $rows['resident_lname']);
        ?></h2>
        <p>A welcome is a kind of greeting designed to introduce a person to a new place or situation, and to make them feel at ease. The term can similarly be used to describe the feeling of being accepted on the part of the new person. In some contexts, a welcome is extended to a stranger to an area or a household..</p>
        <?php

         if (isset($_GET['message']) && $_GET['message'] == 'success') {
            echo "<div class='alert alert-success alert-dismissible fade show mb-2' role='alert'>";
            echo "Password has been successfully changed";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>";
            echo "</div>";
          }

        ?>

        <form action="password.php" method="POST" id="form" class="p-3 shadow rounded w-50">
          <div class="form-group">
            <label for="pwd1">New Password</label>
            <input type="password" name="pwd" id="pwd1" class="form-control">
          </div>
          <div class="form-group">
            <label for="pwd2">Confirm New Password</label>
            <input type="password" id="pwd2" class="form-control">
          </div>
          <p id="para"  class="mt-2 text-danger mb-2"></p>
          <button type="submit" id="submit" class="btn btn-success mt-2">Update Password</button>
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
            $(document).ready(function(){  
                $("form").submit(function(event) {
                var pwd1 = $("#pwd1").val();
                var pwd2 = $("#pwd2").val();
                  if (pwd1 != pwd2) {
                    event.preventDefault();
                     $("#para").text("Passwords do not match");
                  }
                });

            });
          </script>
</body>

</html>
