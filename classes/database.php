<?php 
class Database {
	public $conn;

	public function __construct(){
		$this->db_connect();
	}

	public function db_connect(){
		$this->conn= new mysqli('127.0.0.1', 'root', '1945', 'oop_test');
		if($this->conn->errno){
			die("WTF ".$this->conn->error);
		}
	}

	public function query($sql){
		return $this->conn->query($sql);
	}

	public function redirect($location){
		header("Location: ".$location);
	}



}//END OF CLASS

$db= new Database();




?>