<?php
require 'utility.php';
class Resident extends Utility{


function signup($fname,$lname,$pwd,$phone,$email,$profile){
$encrypted_pass=md5($pwd);
	$sql="INSERT INTO residents SET 
		               resident_fname= '$fname',
		               resident_lname='$lname',
		               resident_phone='$phone',
		               resident_email='$email',
		               resident_bio='$profile', 
		               resident_pwd='$encrypted_pass'";
	$this->conn->query($sql);// ran the query
	$id = $this->conn->insert_id;// check if it inserted into  the table and gives the id;
	$userid =0;
	if ($id >0) {
		$userid="COH". '/'.date('Y'). '/'. $id;
		$sqls = "UPDATE residents SET resident_userid ='$userid' where resident_id = $id";
		$this->conn->query($sqls);
	}
	$message= "Dear $fname,
				You can now login using with your user id $userid";
				file_put_contents('resident.txt', $message);
	@mail($email, "Thank You", $message); //how to send automated emails
	$_SESSION['user'] = "$id";//picking session to use on other pages
	header("location:profile.php");


	echo "$userid";

}

function get_details($residentid){
	$sql = "SELECT * FROM residents WHERE resident_id='$residentid'";

	$result = $this->conn->query($sql);
	$row = 0;
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
	return $row;
}
function login($userid, $pwd){

	$encrypted_pass=md5($pwd);
	$sql="SELECT * FROM residents WHERE resident_userid='$userid' AND resident_pwd='$encrypted_pass' LIMIT 1";
	$result=$this->conn->query($sql);


	if ($result->num_rows > 0) {
		$deets= $result->fetch_assoc();
		$_SESSION['user'] = $deets['resident_id'];
		header('location:profile.php');
	}else{
		header('location:index.php');
	}
}

function doupload($file_array){
	$residentid = $_SESSION['user'];
	$tmp_location = $file_array['mypix']['tmp_name'];
	$original = $file_array['mypix']['name'];

	$dst = "uploaded/$original";
	move_uploaded_file($tmp_location, $dst);//('temporary storage','newlocation/file name')

	//save details in database
	$sql = "UPDATE residents SET resident_picture='$original' WHERE resident_id='$residentid'";
	$this->conn->query($sql);
	header("location:profile.php");

}

function get_bills(){
	$sql = "SELECT * FROM bills";

	$result = $this->conn->query($sql);
    $collect = [];
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$collect[] = $row;
		}
	}
	return $collect;
}
function get_bills_details($billid){
	$sql = "SELECT * from bills WHERE bill_id = $billid";
	$result = $this->conn->query($sql);
	$rows = 0;
	if ($result->num_rows > 0) {
		 $rows= $result->fetch_assoc();
	}
	return $rows;
}

function insert_pay($array_items,$userid){
	if (is_array($array_items)) {
		foreach ($array_items as $value) {
			$itemid = $value;
			$itemdetails = $this->get_bills_details($itemid);
			$item_amt = $itemdetails['bill_amount'];
			$transid = $_SESSION['transref'];

			$sql ="INSERT into bills_payment SET
								pay_bill ='$itemid',
								pay_amt ='$item_amt',
								pay_residentid='$userid',
								pay_status = 'Pending',
								pay_trxref='$transid'";
			// echo "$sql";
			 $this->conn->query($sql);
		}
	}
}

function get_transaction_details($transref){
	$sql = "SELECT * from bills_payment
	JOIN bills
	ON bills_payment.pay_bill = bills.bill_id
	WHERE pay_trxref = '$transref'";
	$result = $this->conn->query($sql);
	$rows = [];
	if ($result->num_rows > 0) {
		 while ($row= $result->fetch_assoc()) {
		 	$rows[]= $row;
		 }
	}
	return $rows;
}
function paid($transref){
	$sql = "UPDATE bills_payment SET pay_status = 'Paid' WHERE pay_trxref = '$transref'";
	$result = $this->conn->query($sql);
	return $result;
}
function editprofile($fname,$lname,$email,$phone,$add,$id){
	$sql = "UPDATE residents set resident_fname= '$fname',
					              resident_lname='$lname',
					              resident_phone='$phone',
					              resident_email='$email',
					              resident_address='$add' WHERE resident_id = '$id'";
	$result = $this->conn->query($sql);
	return $result;
}
function getAllResidents(){
	$sql = "SELECT * FROM residents";
	$result = $this->conn->query($sql);
	$rows = [];
	if ($result->num_rows > 0) {
		 while ($row= $result->fetch_assoc()) {
		 	$rows[]= $row;
		 }
	}
	return $rows;
}
function changepassword($pwd,$id){
	$sql = "UPDATE residents SET resident_pwd = '$pwd' WHERE resident_id = '$id'";
	$result = $this->conn->query($sql);
	$error = $this->conn->error;
	echo "$error";
	return $result;
}

}

?>