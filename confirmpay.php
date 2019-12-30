<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
require 'residentclass.php';
$r= new Resident;

//

$residentid = $_SESSION['user'];
//generate the transaction ref;

$_SESSION['transref'] = mt_rand();




$r->insert_pay($_POST['item'],$residentid);
header('location:verifY_page.php');
?>