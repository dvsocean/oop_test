<!DOCTYPE html>
<html>
<head>
	<title>New Product</title>
</head>
<body>

<br><br>
<br><br>
<br><br>

	<h1 align="center">New Product</h1>
	
	<form action="new_product_data.php" method="POST">
		<table align="center">
			<tr>
				<td>
					<label>Name:</label><br>
					<input type="text" name="name"><br><br>

					<label>Make:</label><br>
					<input type="text" name="make"><br><br>

					<label>Model:</label><br>
					<input type="text" name="model"><br><br>
				</td>
			</tr>
		</table>

		<div align="center">
			<input type="submit" name="submit" value="submit">
		</div>
	</form>

</body>
</html>