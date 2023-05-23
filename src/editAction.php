<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
			echo $name, $phone, $key;
		}
		
		if (empty($key)) {
			echo "<font color='red'>Key field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE items SET `name` = '$name', `phone` = '$phone', `key` = '$key', `updated_at` = CURRENT_TIMESTAMP WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
