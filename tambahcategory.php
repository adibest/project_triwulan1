<html>
<head>
<title>Add Category</title>
<link rel="stylesheet" type="text/css" href="editcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
</head>
<body>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Add Category</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="tambahcategory.php">Add Category</a></p>
			</div>
			<div id="data">
			<form action="proses_tambah_cat.php" method="POST">
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name"></td>
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
