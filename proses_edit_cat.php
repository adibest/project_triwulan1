<?php
include 'connection.php';
$id		= $_POST['id'];
$name		= $_POST['name'];

$sql3 = "UPDATE category SET name = '$name' WHERE id='$id'";
mysqli_query($connection,$sql3);
header('location:indexcategory.php');
?>
