<?php 
class User extends Object {

protected static $table_columns= array("first_name", "last_name", "email", "user_name", "password", "address");
protected static $table= "users";
protected static $where_clause= "id";

public $first_name;
public $last_name;
public $email;
public $user_name;
public $password;
public $address;

	// READ**
	public function get_user($username, $pass){
		global $db;

		$sql="SELECT * FROM users WHERE user_name='$username' AND password='$pass'";

		$sql_result=$db->query($sql);
		
		return $sql_result->fetch_object();
	}

	

	// DELETE**
	public function delete(){
		//
	}

}






?>