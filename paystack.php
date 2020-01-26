<?php
require 'residentclass.php';
$r = new Resident;

$ref = $_SESSION['transref'];
$collect = $r->get_transaction_details($ref);
$rows = $r->get_details($_SESSION['user']);
$email = $rows['resident_email'];
$total = 0;
foreach ($collect as $value) {
	$total = $total +$value['bill_amount'];

}
$answer = $total * 100;


$result = array();
//Set other parameters as keys in the $postdata array
$postdata =  array('email' => $email, 'amount' =>$answer,"reference" => $ref);
$url = "https://api.paystack.co/transaction/initialize";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$headers = [
  'Authorization: Bearer sk_test_08977ad671b905df09671b95951ca99b32be951d',
  'Content-Type: application/json',

];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$request = curl_exec ($ch);



if ($request) {
	curl_close ($ch);
  $result = json_decode($request, true);
}else{
	echo curl_error($ch);
}


echo "<pre>";
print_r($result);
echo "</pre>";

if ($result['status']) {
	$authurl = $result['data']['authorization_url'];
	echo $authurl;
header("location:$authurl");
//retrieve access code from the result and save in your table
}
else{
	echo $result['message'];
}
//Use the $result array to get redirect URL