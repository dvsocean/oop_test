<?php 
require_once("../classes/ini.php");

$photo= new Photo();

$current= $_POST['current_photo'];

$id= $_SESSION['user_id'];

$file= $_FILES['user_photo'];





if ($photo->up_load_photo($file, $current, $id)) {
	Session::set_message("<p style='background-color: green;'>PHOTO UPDATE COMPLETE</p>");
	$db->redirect("../profile/profile.php");
} else{
	Session::set_message("<p style='background-color: red;'>PHOTO UPLOAD FUNCTION FAILED</p>");
	$db->redirect("../profile/profile.php");
}

























// var_dump($size);

// $user= new User();

// //escape values coming in from form
// $user->first_name= $db->escape_string($_POST['first_name']);
// $user->last_name= $db->escape_string($_POST['last_name']);
// $user->email= $db->escape_string($_POST['email']);

// $user->update($_SESSION['user_id']);

// //redirect user

// $db->redirect("../profile/profile.php");



?>