<?php 

class User extends Object {

	protected static $table= "users";
	protected static $table_columns= array('username', 'email', 'password');
	public $username;
	public $email;
	public $password;

		

}


?>