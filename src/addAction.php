<?php  
	session_start();
?>
<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$key = mysqli_real_escape_string($mysqli, $_POST['key']);
		
	// Check for empty fields
	if (empty($name) || empty($phone) || empty($key)) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($phone)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if (empty($key)) {
			echo "<font color='red'>Key field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) and token is OK
		if (isset($_POST["token"]) && isset($_SESSION["token"]) && $_POST["token"]==$_SESSION["token"]) { 
			// Insert data into database
			$result = mysqli_query($mysqli, "INSERT INTO items (name, phone, `key`) VALUES ('$name', '$phone', '$key')");
		} else {
			$post_token = $_POST["token"];
			$session_token = $_SESSION["token"];
			echo "<p><font color='red'>WRONG TOKEN - $post_token NOT EQUAL $session_token </p>";
		}
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
