<?php
include 'connection.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM category WHERE id = '$id'";
mysqli_query($connection,$sql4);
header('location:indexcategory.php');
?>
