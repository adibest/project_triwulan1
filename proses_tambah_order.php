<?php
include 'connection.php';
$table	= $_POST['table_name'];
$item		= $_POST['item_id'];
$qty		= $_POST['qty'];

/*$sqls		= "SELECT item.price as price FROM ordered JOIN item ON item.id = ordered.item_id WHERE item.id = '$item'";*/
$sqls		= "SELECT price FROM item WHERE id = '$item'";
$resulto	= mysqli_query($connection,$sqls);
if(mysqli_num_rows($resulto)>=0){
	while($row = mysqli_fetch_assoc($resulto)){
		$op = $row['price'];
		echo $op;
	}
}
/*echo $item."<br>".$qty."<br>".$op;*/
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
echo "<br>".$diskon."<br>".$badis;
/*if($diskon = 0.2){
	$disk = "20%";
	echo "<br>".$disk;
} else {
	$disk = "-";	
	echo "<br>".$disk;
}*/


$sql1 = "INSERT INTO ordered (table_name, item_id, qty, total, discount, after_discount) VALUES ('$table', '$item', '$qty', '$total', '$disk', '$badis')";
mysqli_query($connection, $sql1);
header('location:indexorder.php');
?>
