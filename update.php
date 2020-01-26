<?php

require 'residentclass.php';
$x = new Resident;
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$add = $_POST['add'];
$id = $_SESSION['user'];
$rows = $x->editprofile($fname,$lname,$email,$phone,$add,$id);

header('Location:edit.php?message=success');

?>