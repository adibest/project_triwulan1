<?php
include 'connection.php';
$id			= $_POST['id'];
$table		= $_POST['table_name'];
$item			= $_POST['item_id'];
$qty			= $_POST['qty'];

$sqld		= "SELECT price FROM item WHERE id = '$item'";
$resulto	= mysqli_query($connection,$sqld);
if(mysqli_num_rows($resulto)>0){
	while($row = mysqli_fetch_assoc($resulto)){
$op = $row['price'];
		echo $op;
	}
}

$total	= $qty*$op;
echo "<br>".$total;
if($total < 100000){
	$diskon = 0;
	$disk = "-";
	echo "<br>".$diskon;
	echo "<br>".$disk;
} else {
	$diskon = 0.2;
	$disk = "20%";
	echo "<br>".$diskon;
	echo "<br>".$disk;
}
$badis	= $total-($diskon*$total);


$sql3 = "UPDATE ordered SET table_name='$table', item_id='$item', qty='$qty', total='$total', discount='$disk', after_discount='$badis' WHERE id='$id'";
mysqli_query($connection,$sql3);
header('location:indexorder.php');
?>
