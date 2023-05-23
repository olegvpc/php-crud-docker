<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Phone</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr> 
				<td>Key</td>
				<td><input type="text" name="key"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add Item"></td>
			</tr>
		</table>
	</form>
</body>
</html>

