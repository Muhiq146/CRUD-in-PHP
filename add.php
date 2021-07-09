<html>

<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br /><br />

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>product name</td>
				<td><input type="text" name="pname"></td>
			</tr>
			<tr>
				<td>Product description</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr>
				<td>category</td>
				<td><input type="text" name="cat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$pname = $_POST['pname'];
		$desc = $_POST['desc'];
		$cat = $_POST['cat'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$sql = "INSERT INTO `product`(`name`, `description`, `cat`) VALUES ('$pname','$desc','$cat');";
		echo $sql;
		$result = mysqli_query($mysqli, $sql);

		echo $result;
		// Show message when user added
		echo "Entry added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>

</html>