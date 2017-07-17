login <?php
		require_once('../classes/ini.php');

$beer_name= $db->escape_string($_POST['name']);

$sql= "SELECT price FROM beers WHERE name='$beer_name'";

$result= $db->query($sql);

$row= $result->fetch_object();



echo $row->price;


?>