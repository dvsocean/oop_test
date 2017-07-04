<?php 

class User extends Object {

	protected static $table= "users";
	protected static $table_columns= array('username', 'email', 'password');
	protected static $where_clause= "id";
	public $username;
	public $email;
	public $password;

		

}


?>