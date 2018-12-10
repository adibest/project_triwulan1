<html>
<head>
<title>Add Order</title>
<link rel="stylesheet" type="text/css" href="editcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<script type="text/javascript">
		function isilah() {
			var qnty = document.forms["iniform"]["qty"].value;
			if (qnty == "") {
				alert("Quantity must be filled out!");
				return (false);
			}
		}
	</script>
</head>
<body>
<?php
include 'connection.php';
$sqlso	= "SELECT * FROM item";
$risalt	= mysqli_query($connection,$sqlso);
?>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Add Order</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="tambahorder.php">Add Order</a></p>
			</div>
			<div id="data">
			<form action="proses_tambah_order.php" method="POST" name="iniform" onSubmit="return isilah()">
				<table>
					<tr>
						<td>Table Name</td>
						<td>
							<select type="text" name="table_name">
								<option value="A01">A01</option>
								<option value="A02">A02</option>
								<option value="A03">A03</option>
								<option value="A04">A04</option>
								<option value="B01">B01</option>
								<option value="B02">B02</option>
								<option value="B03">B03</option>
								<option value="C01">C01</option>
								<option value="C02">C02</option>
								<option value="C02.5">C02.5</option>
								<option value="C03">C03</option>
								<option value="C04">C04</option>
								<option value="C05">C05</option>
								<option value="C06">C06</option>
								<option value="D01">D01</option>
								<option value="D02">D02</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Item</td>
						<td>
							<select type="text" name="item_id">
<?php while($data = mysqli_fetch_assoc($risalt)) {?>
<?php if($data['status']==1){ ?>
								<option value="<?php echo $data['id']; ?>"><?php echo $data['name'];} ?></option>
<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Qty</td>
						<td><input type="text" name="qty"></td>
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
