<?php
$conn = new Mysqli("localhost","root","","demoapp");

$item = $_POST['item'];
$sql = "SELECT * FROM registration WHERE fullname LIKE '%$item%'";
$result = $conn->query($sql);

if($result  ->num_rows > 0){
	echo '<table border="1">';
	while($res= $result->fetch_assoc()){		
		?>
	<tr>
		<td><?php echo $res['fullname'];?></td>
		<td>
			<a href="page.php?id=<?php echo $res['reg_id'];?>">Visit Page</a></td>
	</tr>
		<?php
	}
	echo '</table>';
}


?>