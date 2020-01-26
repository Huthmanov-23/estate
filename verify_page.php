<?php
require 'residentclass.php';


// if (!isset($_SESSION['user'])) {
//   header('location:index.php');
// }
$r = new Resident;
$rows = $r->get_details($_SESSION['user']);
require 'header.php';


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Verify Page</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$deets = $r->get_transaction_details($_SESSION['transref']);
	// echo "<pre>";
	// print_r($deets);
	// echo "</pre>";
	?>
	 <!-- Content Row -->
    <div class="row mt-5">
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
		
		 
<form action="paystack.php" method="POST">
  
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Item</th>
      <th scope="col">Amount</th> 
    </tr>
  </thead>
  <tbody>
  	<?php
  	$i =1;  $total=0;
  	foreach ($deets as $deet) {
  		echo "<tr>";
  		echo "<td>$i</td><td>".$deet['bill_name']."</td><td>&#8358;".number_format($deet['pay_amt'],2)."</tr>";
  		echo "</tr>";
  		$i++;
  		$total = $total + $deet['pay_amt'];
      $_SESSION['total'] = $total;
      	      }
  	?>
  	
  <tr> 
      <th colspan='2' style='text-align:right'>TOTAL</th>
      <th>&#8358; <?php
  
      	
      	      echo number_format($total,2);

      ?></th>  
    </tr>
  </tbody>
</table>
<button type="button" style='text-align:right' onclick="document.location.href=''" class='btn btn-danger text-right'>Cancel</button>
<button class='btn btn-info' style='text-align:right'>Proceed to Make Payment</button>
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
</body>
</html>