<html>
<head>
<title>Edit Category</title>
<link rel="stylesheet" type="text/css" href="editcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
</head>
<body>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Edit Category</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="editcategory.php">Edit Category</a></p>
			</div>
			<div id="data">
<?php
include 'connection.php';
$id		= $_GET['id'];
$sql2		= "SELECT * FROM category WHERE id=$id";
$result	= mysqli_query($connection,$sql2);
$row		= mysqli_fetch_assoc($result);
?>
			<form action="proses_edit_cat.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
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
