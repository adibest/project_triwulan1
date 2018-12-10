<?php
include 'connection.php';
$name		= $_POST['name'];

$sql1 = "INSERT INTO category (name) VALUES ('$name')";
mysqli_query($connection,$sql1);
header('location:indexcategory.php');
?>
