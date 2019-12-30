<?php
require ("Myapi.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$obj = new Myapi;
if ($_SERVER['REQUEST_METHOD']== 'GET') {
	$resident = $obj->get_resident();
}else{
	$message = "Method Not Allowed";
	$status = 0;
	$ret = array("message"=>$message,"status"=>$status);
	http_response_code(405);
	echo json_encode($ret);
}

//http://localhost/estate/api/v1.0/list.php
?>