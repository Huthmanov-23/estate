

<?php

// $data = $_POST['israel'];
// file_put_contents('uthman.txt', $data);

$name = $_GET['center'];
if ($name == 'local'){
	$option = "<option value='Lagos'>Lagos</option>
<option value='Abuja'>Abuja</option>
<option value='Kwara'>Kwara</option>
<option value='Kano'>Kano</option>";
}else{
	$option = "<option value='London'>London</option>
<option value='Manchester'>Manchester</option>";
}
echo $option ;

?>