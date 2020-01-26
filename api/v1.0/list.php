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

//step 1 - initialize curl
// $curlobj = curl_init();
// $url = "http://localhost/estate/api/v1.0/list.php";
//step2 : set curl options using the function curl_setopt()
// curl_setopt($curlobj,CURLOPT_RETURNTRANSFER, true); //true will tell curl to return the string instead of print it out..
// curl_setopt($curlobj, CURLOPT_URL,$url);
//step 3 : execute the curl session using curl_exec()
// $response = curl_exec($curlobj);
//step 4: close the opened curl session
// curl_close($curlobj);
//step 5 : do whatever you want to do with the response
// $response_inphp_obj = json_decode($response);

?>