<?php
class Utility{
	protected $conn;
	function __construct(){
		session_start();//this automatically starts a session in all the inherited classes
		$this->conn = new Mysqli('localhost','root','','estate');// this automatically connects to the database in all of the children classes
	}
}


?>