<!DOCTYPE html>
<html>
<head>
	 
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<input type="text" id="searchtxt"> 
	<button type="button" id="btn" class="btn btn-block btn-primary">Register!</button>
 
<div id="results">
	
</div> 			 

	<script type="text/javascript" src="jquery/jquery.js"></script>

	<script>
		$(document).ready(function(){
			$('#btn').click(function(){
				var mydata = $('#searchtxt').val();
				$.ajax({
				url:"somephp.php",
				type:"POST", 
				data:"item="+mydata,
				dataType:"text",
				success:function(s){
					$('#results').html(s);
				},
				error:function(errmsg){
					console.log(errmsg);
				}
			}); 
			})
			//$.ajax({variable:value,variable:value})
		});
	</script>
</body>
</html>