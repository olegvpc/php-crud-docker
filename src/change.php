<?php

// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli,  "SELECT name, phone, `key`, created_at, updated_at FROM items WHERE created_at != updated_at ORDER BY id DESC");

?>

<html>
<head>	
	<title>Change</title>
</head>

<body>
	<h2>History of change</h2>
	<p>
		<a href="index.php">Home</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Name</strong></td>
			<td><strong>Phone</strong></td>
			<td><strong>Key</strong></td>
            <td><strong>Date of create</strong></td>
            <td><strong>Date of update</strong></td>
			<!-- <td><strong>Action</strong></td> -->
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['phone']."</td>";
			echo "<td>".$res['key']."</td>";	
            echo "<td>".$res['created_at']."</td>";
            echo "<td>".$res['updated_at']."</td>";	
		}
		?>
	</table>
</body>
</html>