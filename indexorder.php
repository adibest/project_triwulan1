<html>
<head>
<title>Index Order</title>
<link rel="stylesheet" type="text/css" href="indexcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
</head>
<body>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Order</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="tambahorder.php">Add Order</a></p>
			</div>
			<div id="data">
				<table>
					<tr>
						<td>No</td>
						<td>Table Name</td>
						<td>Item</td>
						<td>Qty</td>
						<td>Total</td>
						<td>Diskon</td>
						<td>After Diskon</td>
						<td>Action</td>
					</tr>
<?php
include 'connection.php';
$nomor	= 1;
$sql		= "SELECT ordered.id as id, ordered.table_name as table_name, item.name as name, ordered.qty as qty, ordered.total as total, ordered.discount as discount, ordered.after_discount as after_discount FROM ordered 
JOIN item ON item.id = ordered.item_id WHERE item.status =1 ";

function status($stat) {
	if ($stat == "1") {
		return "Aktif";
	} else {
		return "Tidak Aktif";
	}
}
status();

function repes($angka) {
	$hasil = "Rp" . number_format($angka,2,',','.');
	return $hasil;
}
repes();

$result	= mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		echo "
			<tr>
				<td>".$nomor++."</td>
				<td>".$row['table_name']."</td>
				<td>".$row['name']."</td>
				<td>".$row['qty']."</td>
				<td>".repes($row['total'])."</td>
				<td>".$row['discount']."</td>
				<td>".repes($row['after_discount'])."</td>
				<td>
					<a href='editorder.php?id=".$row['id']."'>Edit</a>
					<a href='deleteorder.php?id=".$row['id']."'onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
				</td>
			</tr>
		";
	}
}
?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
