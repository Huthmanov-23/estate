<?php

class Myapi{
	private $conn;

	function __construct(){
		$this->conn = new Mysqli('localhost','root','','estate');
	}
	public function get_resident(){
		$sql = "SELECT resident_id as id, resident_fname as fname,resident_lname as lname,resident_userid as userid,resident_phone as phone FROM residents";
		$result = $this->conn->query($sql);
		$id = $this->conn->insert_id;
		$collect = [];
		if ($result->num_rows > 0) {
			while ($rows = $result->fetch_assoc()) {
				$collect[] = $rows; 
			}
			$message = $collect;
			$status = 1;
		}else{
			$message = "No residents found";
			$status = 0;
			return json_encode($message);
		}
		$ret = array('message'=>$message,"status"=>$status);
		echo json_encode($ret);



	}
	function add_resident($fname,$lname,$pwd,$phone,$email,$profile){
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
		$message = "Successfully Registered";
		$status = 1;
	}else{
		$message = "Error Registering";
		$status = 0;
	}

	$ret = array('message'=>$message,'status'=>$status);
	echo json_encode($ret);
}
	public function delete_resident(){

	}
	public function update_resident(){

	}
}


?>