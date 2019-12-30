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
      <a class="navbar-brand" href="index.html"><img src="images/logo2.png" width='100'></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.html">Dashboard</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="admin.html">View All Members</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.html">Payment Report</a>
          </li>
		   
         <li class="nav-item">
            <a class="nav-link" href="adminlogout.html">Logout</a>
          </li>
           
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <link type='text/css' rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <div class="container" style='min-height:500px'>

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Admin
      <small>All members</small>
    </h1>

     
    <!-- Content Row -->
    <div class="row">
     
      <!-- Content Column -->
      <div class="col-lg-12 mb-4">
      <div style='text-align:right'>
	  <button class='btn btn-info mb-4'>Register New Member</button>
	  
	  </div>
	   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date Joined</th>
	  <th scope="col">Status</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tobechukwu Osa</td>    
      <td>osa@yahoo.com</td>
	  <td>21st December 2018</td>
	  <td><button class='btn btn-sm btn-success'>Active</button></td>
      <td><a href='delete.php' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>&nbsp; Delete</a>&nbsp;&nbsp;&nbsp;<a href='details.html' class='btn btn-sm btn-info'><i class='fa fa-list'></i>&nbsp; Details</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tobechukwu Osa</td>    
      <td>osa@yahoo.com</td>
	  <td>21st December 2018</td>
	  <td><button class='btn btn-sm btn-warning'>Inactive</button></td>
      <td><a href='delete.php' class='btn btn-sm btn-danger'>Delete</a>&nbsp;&nbsp;&nbsp;<a href='' class='btn btn-sm btn-info'>Details</a></td>
    </tr>
	<tr>
      <th scope="row">3</th>
      <td>Tobechukwu Osa</td>    
      <td>osa@yahoo.com</td>
	  <td>21st December 2018</td>
	  <td><button class='btn btn-sm btn-success'>Active</button></td>
      <td><a href='delete.php' class='btn btn-sm btn-danger'>Delete</a>&nbsp;&nbsp;&nbsp;<a href='' class='btn btn-sm btn-info'>Details</a></td>
    </tr>
  </tbody>
</table>

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
