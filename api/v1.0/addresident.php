<?php

require 'Myapi.php';
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$obj = new Myapi;
// $data = '{"fname":"Israel","lname":"Obika","phone":"08037153806","email":"oj@yahoo.com","profile":"Nice to join this platform","pwd":"1234"}';

$data = file_get_contents("php://input");

if (!is_object($data)) {
	die();
}

$data_object = json_decode($data);
//retrieve and sanitize;

$fname =trim(htmlentities($data_object->fname));
$lname = $data_object->lname;
$phone = $data_object->phone;
$email = $data_object->email;
$profile = $data_object->profile;
$pwd = $data_object->pwd;


// print_r($data_object);
$obj->add_resident($fname,$lname,$pwd,$phone,$email,$profile);
?>