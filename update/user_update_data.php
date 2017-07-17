<?php 
require_once("../classes/ini.php");

$photo= new Photo();

$new_file= $_FILES['user_photo'];

$photo->file= $new_file['name'];
$photo->user_id= $_SESSION['user_id'];
$photo->size= $new_file['size'];
$photo->upload_path= "user_photos/". $photo->file;


$current= $_POST['current_photo'];








if ($photo->upload_user_photo($new_file, $current, $photo->user_id)) {
	Session::set_message("<p style='background-color: green;'>PHOTO UPDATE COMPLETE</p>");
	$db->redirect("../profile/profile.php");
} else{
	Session::set_message("FAILEDDDD");
	
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