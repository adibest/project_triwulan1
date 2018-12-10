<html>
<head>
<title>Edit Item</title>
<link rel="stylesheet" type="text/css" href="editcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
	<script type="text/javascript">
		function isilah() {
			var sttus = document.forms["iniform"]["status"].value;
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
			<p>Point of Sale - Edit Item</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="edititem.php">Edit Item</a></p>
			</div>
			<div id="data">
<?php
include 'connection.php';
$id		= $_GET['id'];
$sql2		= "SELECT * FROM item WHERE id=$id";
$result	= mysqli_query($connection,$sql2);
$row		= mysqli_fetch_assoc($result);
?>
			<form action="proses_edit_item.php" method="POST" name="iniform" onSubmit="return isilah()">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<table>
					<tr>
						<td>Category</td>
						<td>
							<select type="text" name="category_name">
<?php while($data = mysqli_fetch_assoc($risalt)) {?>
<?php if($data['id']==$row['category_id']){?>
								<option value="<?php echo $data['id']; ?>"selected><?php echo $data['name']; ?></option>
<?php }else {?>
								<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
<?php }} ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
					</tr>
					<tr>
						<td>Price</td>
						<td><input type="text" name="price" value="<?php echo $row['price']; ?>"></td>
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
						<td id="subm"><input type="submit" id="submit" value="SUBMIT"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>
</body>
</html>
