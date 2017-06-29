<?php 

class User extends Object {

	protected static $table= "users";
	public $username;
	public $email;
	public $password;

		public function show_me(){
			$props= get_class_vars();
			return $props;
		}

}


?>