<html>
<head>
<title>Edit Order</title>
<link rel="stylesheet" type="text/css" href="editcat.css">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
</head>
<body>
<?php
include 'connection.php';
$sqlso	= "SELECT * FROM item WHERE status = 1";
$resalt	= mysqli_query($connection,$sqlso);
$sqlb = "SELECT * FROM ordered ORDER BY id ASC";
$rasalt = mysqli_query($connection,$sqlb);
?>
	<div id="container">
		<div id="title">
			<p>Point of Sale - Edit Order</p>
		</div>
		<div id="main">
			<div id="mainside">
				<p><a href="indexcategory.php">Category</a></p>
				<p><a href="indexitem.php">Item</a></p>
				<p><a href="indexorder.php">Order</a></p>
				<p id="special"><a href="editorder.php">Edit Order</a></p>
			</div>
			<div id="data">
<?php
include 'connection.php';
$id		= $_GET['id'];
$sql2		= "SELECT * FROM ordered WHERE id='$id'";
$result	= mysqli_query($connection,$sql2);
$row		= mysqli_fetch_assoc($result);
?>
			<form action="proses_edit_order.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
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
<?php while($data = mysqli_fetch_assoc($resalt)) {?>
<?php if($data['id']==$row['item_id']){?>
								<option value="<?php echo $data['id']; ?>"selected><?php echo $data['name']; ?></option>
<?php }else {?>
								<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
<?php }} ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Qty</td>
						<td><input type="text" name="qty" value="<?php echo $row['qty']; ?>"></td>
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
