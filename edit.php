<?php
require 'residentclass.php';

$r = new Resident;
$rows = $r->get_details($_SESSION['user']);
require 'header.php';

?>
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->

    <div class='alert alert-info mt-5'>Hi, you are logged in. Your UserId is <?php
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
            echo "Records has been successfully updated";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>";
            echo "</div>";
          }

        ?>
        <form method="POST" action="update.php" class="mx-auto w-100 shadow bg-light p-3">
      	<label for="fname">First Name</label>
      	<input type="text" value="<?php echo $rows['resident_fname'] ?>" name="fname" id="fname" class="mb-2 form-control">
      	<label for="lname">Last Name</label>
      	<input type="text" value="<?php echo $rows['resident_lname'] ?>" name="lname" id="lname" class="mb-2 form-control">
      	<label for="email">Email</label>
      	<input type="email" value="<?php echo $rows['resident_email'] ?>" name="email" id="email" class="mb-2 form-control">
      	<label for="phone">Phone</label>
      	<input type="number" value="<?php echo $rows['resident_phone'] ?>" name="phone" id="phone" class="mb-2 form-control">
      	<label for="add">House Number</label>
      	<input type="text" value="<?php echo $rows['resident_address'] ?>" name="add" id="add" class="form-control">
      	<button class="btn btn-success btn-lg mt-3">Update</button>
      </form>
      </div>
      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->