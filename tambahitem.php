<html>
<head>
<title>Add Item</title>
<link rel="stylesheet" type="text/css" href="editcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<script type="text/javascript">
		function isilah() {
			var nama = document.forms["iniform"]["name"].value;
			var harga = document.forms["iniform"]["price"].value;
			var sttus = document.forms["iniform"]["status"].value;
			if (nama == "") {
				alert("Name must be filled out!");
				return (false);
			}
			if (harga == "") {
				alert("Price must be filled out!");
				return (false);
			}
			if (sttus == "") {
				alert("Status must be checked out!");
				return (false);
			}
		}
	</script>
</head>
<body>
<?php
include 'connection.php';
$sqlc	= "SELECT * FROM category ORDER BY id ASC";
$risalt	= mysqli_query($connection,$sqlc);
?>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Add Item</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="tambahitem.php">Add Item</a></p>
			</div>
			<div id="data">
			<form action="proses_tambah_item.php" method="POST" name="iniform" onSubmit="return isilah()">
				<table>
					<tr>
						<td>Category</td>
						<td><select type="text" name="category_name">
<?php while($data = mysqli_fetch_assoc($risalt)) {?>
								<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Price</td>
						<td><input type="text" name="price"></td>
					</tr>
					<tr>
						<td>Status</td>
						<td>
						<input type="radio" name="status" value="1"> Aktif 
						<input type="radio" name="status" value="0"> Tidak Aktif
						</td>
					</tr>
					<tr>
						<td></td>
						<td id="subm"><input type="submit" value="SUBMIT" id="submit"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>
</body>
</html>
