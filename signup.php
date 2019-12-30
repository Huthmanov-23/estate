<?php
require 'header.php';
?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Cohort 13 App
      <small>Signup</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Sign up Form</li>
    </ol>

 

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Register Your Data Online</h3>
        <form name="sentMessage" id="contactForm" method="POST" action='insertmember.php'>
          <div class="control-group form-group">
            <div class="controls">
              <label>First Name:</label>
              <input type="text" class="form-control" id="name" name='fname'>
              
            </div>
          </div>
		  <div class="control-group form-group">
            <div class="controls">
              <label>Last Name:</label>
              <input type="text" class="form-control" id="name" name='lname'>
             
            </div>
          </div>
           <div class="control-group form-group">
            <div class="controls">
              <label>Password</label>
              <input type="password" class="form-control" id="pwd" name='pwd'>
             
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" name='email' id="email" required>
			   <p class="help-block text-muted">We promise never to spam you!</p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Profile (short):</label>
              <textarea rows="5" cols="50" name='profile' class="form-control" id="profile"  maxlength="300" style="resize:none"></textarea>
            </div>
          </div>
           
          
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Sign Up</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

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
  <div class="form-group" method="post" action="login.php">
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
