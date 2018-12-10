<?php
include 'connection.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM ordered WHERE id = '$id'";
mysqli_query($connection,$sql4);
header('location:indexorder.php');
?>
