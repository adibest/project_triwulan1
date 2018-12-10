<?php
include 'connection.php';
$category	= $_POST['category_name'];
$name			= $_POST['name'];
$price		= $_POST['price'];
$status		= $_POST['status'];

$sql1 = "INSERT INTO item (category_id, name, price, status) VALUES ('$category', '$name', '$price', '$status')";
mysqli_query($connection, $sql1);
header('location:indexitem.php');
?>
