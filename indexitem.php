<html>
<head>
<title>Index Item</title>
<link rel="stylesheet" type="text/css" href="indexcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
</head>
<body>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Item</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="tambahitem.php">Add Item</a></p>
			</div>
			<div id="data">
				<table>
					<tr>
						<td>No</td>
						<td>Category</td>
						<td>Name</td>
						<td>Price</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
<?php
include 'connection.php';
$nomor	= 1;
$sql		= "SELECT item.id as id, category.name as category, item.name as name, item.price as price, item.status as status FROM item 
JOIN category ON category.id = item.category_id";

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
				<td>".$row['category']."</td>
				<td>".$row['name']."</td>
				<td>".repes($row['price'])."</td>
				<td>".status($row['status'])."</td>
				<td>
					<a href='edititem.php?id=".$row['id']."'>Edit</a>
					<a href='deleteitem.php?id=".$row['id']."'onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
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
