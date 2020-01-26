<?php
require 'residentclass.php';
$obj = new Resident;
$rows = $obj->get_details($_SESSION['user']);
$id = $_SESSION['user'];
if ($_POST) {
	$password = $_POST['pwd'];
	$encrypted_pass = md5($password);
}
$row = $obj->changepassword($encrypted_pass,$id);
header('Location:pass.php?message=success');

$email = $rows['resident_email'];
$subject = "Updated Passord";
$message = "Dear customer, you updated your password, your new password is $password";

 @mail($email, $subject, $message);

?>