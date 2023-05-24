<?php  
	session_start();
	$_SESSION["token"] = bin2hex(random_bytes(32)); 
?>
<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM items WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$phone = $resultData['phone'];
$key = $resultData['key'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="index.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<input type="hidden" name="token" value="<?=$_SESSION["token"]?>">
			<tr> 
				<td>phone</td>
				<td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
			</tr>
			<tr> 
				<td>key</td>
				<td><input type="text" name="key" value="<?php echo $key; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
