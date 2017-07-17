<?php 
class Session{
//DEFINING CONSTRUCTOR
	function __construct() {
		session_start(); 
    }

	public static function set_message($msg) {
		$_SESSION['message']= $msg;
	}

	public static function display_message() {
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
	}



}//END OF CLASS

$session= new Session();

?>