<?php 

class Photo extends Object {

	protected static $path="user_photos/";

	public $file;
	public $user_id;
	public $size;
	public $upload_path;

	protected static $table="photos";
	protected static $table_columns= array('file', 'user_id', 'size', 'upload_path');




	// public function up_load_photo($file, $current_photo, $id){
	// 	global $db;

	// 	$temp_name= $file['tmp_name'];
	// 	$size= $file['size'];
	// 	$name= $file['name'];
	// 	$target= "user_photos/".$name;

	// 	if (!file_exists($this->directory.$current_photo)){
	// 		if (!unlink($this->directory.$current_photo)) {
	// 			return false;
	// 		}
	// 	}

	// 	if (!move_uploaded_file($temp_name, $target)){
	// 		return false;
	// 		//echo $db->conn->error;
	// 	}

	// 	$sql="UPDATE users SET photo_path='$name' WHERE id='$id'";
	// 	if (!$db->query($sql)) {
	// 		return false;
	// 	}
	
	// }

	


}//END OF CLASS





?>