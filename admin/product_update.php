<?php require_once('../classes/ini.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Update</title>
</head>
<body>

<?php 
$id= $_GET['id'];
$sql="SELECT * FROM beers WHERE id='$id'";
$result= $db->query($sql);

while ($row= $result->fetch_object()) {
	$name= $row->name;
	$quantity= $row->quantity;
	$price= $row->price;
	$id= $row->id;
}

?>

<form action="product_update_data.php" method="post">
	<label>Name:</label><br>
	<input type="text" name="name" value="<?php echo $name; ?>"><br><br>

	<label>Quantity:</label><br>
	<input type="text" name="quantity" value="<?php echo $quantity; ?>"><br><br>
	
	<label>Price:</label><br>
	<input type="text" name="price" value="<?php echo $price; ?>"><br><br>

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<input type="submit" name="submit" value="Update">



</form>













</body>
</html>