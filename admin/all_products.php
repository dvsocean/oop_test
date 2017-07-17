<?php require_once("../classes/ini.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>All Products</title>
	<script
			  src="https://code.jquery.com/jquery-1.12.4.js"
			  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
			  crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/products.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	
</head>
<body>

<?php 
$sql="SELECT * FROM beers";
$result= $db->query($sql);
?>

<table border="1" align="center">
	<tr>
		<td>
			<h1>name</h1>
		</td>

		<td>
			<h1>quantity</h1>
		</td>

		<td>
			<h1>price</h1>
		</td>

		<td>
			<h1>edit</h1>
		</td>
	</tr>
<?php while($row= $result->fetch_object()) { ?>
	<tr>
		<td>
			<p><?php echo $row->name; ?></p>
		</td>

		<td>
			<p><?php echo $row->quantity; ?></p>
		</td>

		<td>
			<p><?php echo $row->price; ?></p>
		</td>

		<td>
			<a href="product_update.php?id=<?php echo $row->id; ?>" class="btn btn-primary">Click</a>
		</td>
	</tr>
<?php } ?>
</table>

<script src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>