<?php
require('residentclass.php');//name of the file that contains resident class.




$r= new Resident;//the name of the class



//Data cleaning
$fname=trim(htmlentities($_POST['fname']));
$lname=trim(htmlentities($_POST['lname']));
$pwd=(htmlentities($_POST['pwd']));
$phone=trim(htmlentities($_POST['phone']));
$email=trim(htmlentities($_POST['email']));
$profile=trim(htmlentities(addslashes($_POST['profile'])));

$r->signup($fname,$lname,$pwd,$phone,$email,$profile);



?>