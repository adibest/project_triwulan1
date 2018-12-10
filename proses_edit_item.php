<?php
include 'connection.php';
$id			= $_POST['id'];
$category	= $_POST['category_name'];
$name			= $_POST['name'];
$price		= $_POST['price'];
$status		= $_POST['status'];

$sql3 = "UPDATE item SET category_id='$category', name='$name', price='$price', status='$status' WHERE id='$id'";
mysqli_query($connection,$sql3);
header('location:indexitem.php');
?>
