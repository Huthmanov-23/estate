<?php
require 'residentclass.php';
$obj =new Resident;

$obj->login($_POST['userid'],$_POST['pwd']); 

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


?>