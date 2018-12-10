<html>
<head>
<title>Index Category</title>
<link rel="stylesheet" type="text/css" href="indexcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
</head>
<body>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Category</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="tambahcategory.php">Add Category</a></p>
			</div>
			<div id="data">
				<table>
					<tr>
						<td>No</td>
						<td>Name</td>
						<td>Action</td>
					</tr>
<?php
include 'connection.php';
$nomor	= 1;
$sql		= "SELECT * FROM category";
$result	= mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		echo "
			<tr>
				<td>".$nomor++."</td>
				<td>".$row['name']."</td>
				<td>
					<a href='editcategory.php?id=".$row['id']."'>Edit</a>
					<a href='deletecategory.php?id=".$row['id']."'onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
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
