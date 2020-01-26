<?php

require 'Myapi.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With");

$obj = new Myapi;
// $data = '{"fname":"Israel","lname":"Obika","phone":"08037153806","email":"oj@yahoo.com","profile":"Nice to join this platform","pwd":"1234"}';

$data = file_get_contents("php://input");


$data_object = json_decode($data);
// print_r($data_object);
//retrieve and sanitize;
if (!is_object($data)) {
	die();
}


$fname =trim(htmlentities($data_object->fname));
$lname = $data_object->lname;
$phone = $data_object->phone;
$email = $data_object->email;
$profile = $data_object->profile;
$pwd = $data_object->pwd;
if ($obj->add_resident($fname,$lname,$pwd,$phone,$email,$profile)) {
	$message = "Successfully Registered";
	$status = 1;
}else{
	$message = "Error Registering";
	$status = 0;
}
$ret = array('message'=>$message,'status'=>$status);
echo json_encode($ret);