<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dot Load</title>
	<link rel="stylesheet" href="">
	<link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />

	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
	<!-- <div id="content"></div>

	<button type="button" id="btn" class="btn btn-success">Load contents</button>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#btn').click(function() {
				$('#content').load('interface.php');
			});	
		});
	</script> -->

<!-- 
	<div id="msg">	</div>
		<textarea name="message" id="message" cols="10" rows="10" class="form-control"></textarea>
		<button id="btn" class="btn btn-outline-success" type="button">Submit</button>


	<script type="text/javascript">
		$(document).ready(function() {
			$('#btn').click(function() {
				var k =$('#message').val();
				var data = {"israel":k};
				$('#msg').load('interface.php',data);
			});
		});
	</script> -->

	<select id="select" style="margin-top: 40px; margin-left: 40px">
		<option value="">Select Your Locality</option>
		<option value="local">Local</option>
		<option value="Foreign">Foreign</option>
	</select><br><br>

	<select id="select1" style="margin-left: 40px"></select>

<script type="text/javascript">
	$(document).ready(function() {
		$('#select').change(function() {
			var k = $('#select').val();
			$('#select1').load('interface.php?center='+k);
		});
	});
</script>




</body>
</html>