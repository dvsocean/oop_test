<?php 

class Database{
	
   public $conn;
   
   function __construct(){
		$this->db_connection();      
   }

   public function db_connection(){
   	$this->conn= new mysqli("127.0.0.1", "root", "1945", "datarunners");

		if ($this->conn->connect_errno){
			die("Connection failed ". $this->conn->connect_error);
		} //else{
			//echo "connection active";			
		//}	
							
			return $this->conn;
   }




   

	public function query($sql){
		$result= $this->conn->query($sql);			
					
			if (!$result){      //test if there are query results
			  die("QUERY FAILED ". $this->conn->error);
			}
			return $result;					
	}






	//Familiarize how to use escape_string when using a super global POST
	public function escape_string($value){
		return $this->conn->real_escape_string($value);
	}

    public function redirect($location){
    	header('Location: '. $location);
    }



    public function auto_id() {
    	return mysqli_insert_id($this->conn);
    }



}//End of class

//class is instantiated
//available throughout any page
$db= new Database();


//useless if a constructor is used
//$new_con= $db->db_connection();


?>