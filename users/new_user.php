<!DOCTYPE html>
<html>
<head>
	<title>New user</title>
</head>
<body>

<br><br>
<br><br>
<br><br>

<h1 align="center">New user signup</h1>

<form action="new_user_data.php" method="POST">
	<table align="center">
		<tr>
			<td>
				<label>Username:</label><br>
				<input type="text" name="username"><br><br>

				<label>Email:</label><br>
				<input type="text" name="email"><br><br>

				<label>Password:</label><br>
				<input type="text" name="password"><br><br>
			</td>
		</tr>
	</table>

	<div align="center">
		<input type="submit" name="submit" value="submit">
	</div>
</form>

</body>
</html>