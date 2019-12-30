<?php
require('header.php');
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
?>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> 
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/building1.jpg')">
          <div class="carousel-caption d-none d-md-block" style='background-color:rgba(0,0,0,0.6); bottom:160px;'>
            <h3>Welcome to Cohort 13 Estate</h3>
            <p> The best and most peaceful environment you can find around...</p>
          </div>
        </div>
       
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/building.jpg')">
          <div class="carousel-caption d-none d-md-block" style='background-color:rgba(0,0,0,0.6); bottom:160px;'>
            <h3>Welcome to Cohort 13 Estate</h3>
            <p> Helping you manage your data online...</p>
          </div>
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
  </header>

  <!-- Page Content -->
  <div class="container">

    <h2 class="my-4">Welcome to Cohort 13 Members App</h2>

    <!-- Marketing Icons Section -->
    <div class="row">
       <div class="col-lg-12">
        
        <p>Our 21st Century Online App just made life easier for you:</p>
        <ul>
          <li>
            <strong>Features</strong>
          </li>
          <li>Pay your annual dues online</li>
          <li>Check Your Payment History</li>
          <li>Connect with other elites living in Cohort 13 Estate</li>
          <li>Purchase Estate's Sourveniors</li>
        </ul>
        <p>By the way, this is a test content, just ignore with all your strenght and power, you are advised not to take it serious as much as you can.</p>
      </div>
    

    </div>
	<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3>Have you registered your data online? <a href="signup.php" class='btn btn-success btn-lg' style='float:right'>Sign Up Now</a></h3>
   
  </div>
</div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h4>Featured Members</h4>
 <div class="row">
      <div class="col-lg-2 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p2.jpg" alt=""></a>
          <div class="card-body">
            <h6 class="card-title">
              <a href="single.html">Tolani Balogun</a>
            </h6>
            <p class="card-text">Paid</p>
          </div>
        </div>
      </div> 
	   <div class="col-lg-2 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p1.jpg" alt=""></a>
          <div class="card-body">
            <h6 class="card-title">
              <a href="single.html">Tolani Balogun</a>
            </h6>
            <p class="card-text">Paid</p>
          </div>
        </div>
      </div> 
	   <div class="col-lg-2 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p3.jpg" alt=""></a>
          <div class="card-body">
            <h6 class="card-title">
              <a href="#">Tolani Balogun</a>
            </h6>
            <p class="card-text">Paid</p>
          </div>
        </div>
      </div> 
	   <div class="col-lg-2 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p4.jpg" alt=""></a>
          <div class="card-body">
            <h6 class="card-title">
              <a href="#">Tolani Balogun</a>
            </h6>
            <p class="card-text">Paid</p>
          </div>
        </div>
      </div> 
	   <div class="col-lg-2 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p5.jpg" alt=""></a>
          <div class="card-body">
            <h6 class="card-title">
              <a href="#">Tolani Balogun</a>
            </h6>
            <p class="card-text">Member</p>
          </div>
        </div>
      </div> 
	   <div class="col-lg-2 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p1.jpg" alt=""></a>
          <div class="card-body">
            <h6 class="card-title">
              <a href="#">Tolani Balogun</a>
            </h6>
            <p class="card-text">Paid Member</p>
          </div>
        </div>
      </div> 
	 
    </div>
    <!-- /.row -->
	  <hr>
	  <p style='text-align:right'><a href='allmembers.html' class='btn btn-info'>View All</a></p>
 
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5" style='background-color:green'>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Modal -->
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
</body>

</html>
