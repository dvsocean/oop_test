<?php require_once("../classes/ini.php");


$user= new User();
//object   //object properties //values
$user->user_name= $db->escape_string($_POST['username']);

$user->password= md5($db->escape_string($_POST['psw']), $user->user_name);


$validated_user= $user->get_user($user->user_name, $user->password);

if (!$validated_user) {
	Session::set_message("INVALID CREDENTIALS");
	$db->redirect("login_page.php");
} else {							//object notation
	$_SESSION['user_id']= $validated_user->id;
	Session::set_message("<h1 style='color: green;' class='text-center'><b>Welcome back " . $user->user_name ."</b></h1>");
	
	//REDIRECT IT BACK TO PROFILE/PROFILE.PHP
	$db->redirect("../profile/profile.php");
}
	

	

?>