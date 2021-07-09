<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$query = "DELETE FROM `product` WHERE id = $id";
$result = mysqli_query($mysqli, $query);
print_r($_GET);
print_r($result);
die();
// After delete redirect to Home, so that latest user list will be displayed.
?>
