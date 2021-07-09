<!DOCTYPE html>
<html lang="en">
<?php
// Create database connection using config file
include("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM product");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Add New User</a><br/>

    <table width='80%' border=1>

    <tr>
        <th>Product Name</th> <th>Product Description</th> <th>Categorys</th> <th>Update</th>
    </tr>
    <?php

    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['description']."</td>";
        echo "<td>".$user_data['cat']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>;
        </tr>";
    }
    ?>
    </table>
</body>
</html>