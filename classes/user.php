<?php 
class User extends Object {

protected static $table_columns= array("first_name", "email", "user_name", "password");
protected static $table= "users";
protected static $where_clause= "id";

public $first_name;
public $email;
public $user_name;
public $password;

	// READ
	public function get_user($username, $pass){
		global $db;

		$sql="SELECT * FROM users WHERE user_name='$username' AND password='$pass'";

		$res= $db->query($sql);
		if (!$res) {
			return false;
		} else {
			return $res->fetch_object();
		}

	}

	

	// DELETE
	public function delete(){
		//
	}

}






?>