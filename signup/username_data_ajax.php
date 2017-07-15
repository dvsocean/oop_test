<?php 
require_once"../classes/ini.php";

$uname= $_POST['uname'];
 $sql="SELECT * FROM users WHERE user_name='$uname'";

$result= $db->query($sql);

if ($row= $result->fetch_object()) {
	echo"USER NAME TAKEN";
}


?>