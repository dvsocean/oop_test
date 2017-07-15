<?php require_once("../classes/ini.php");


$user= new User();
//object   //object properties //values
$user->user_name= $db->escape_string($_POST['username']);

$user->password= md5($db->escape_string($_POST['psw']), $user->user_name);

$res= $user->get_user($user->user_name, $user->password);


if (!$res) {
	Session::set_message("<h1 style='color: white;' class='text-center'>INVALID CREDENTAILS</h1>");
	$db->redirect("../index.php");
} else {							//object notation
	$_SESSION['user_id']= $res->id;
	Session::set_message("<h1 style='color: white;' class='text-center'>Welcome " . $user->user_name ."</h1>");
	$db->redirect("../profile/profile.php");
}
	

	

?>