<?php
$cartNumb = 0;
for($i = 0 ; $i < count($allProducts) ; $i++)
{
	$cartNumb += $allProducts[$i]['quantity'];
}

?>

<html>
<head>
	<title>Products Listing</title>
	<style type="text/css">
		body {
			width: 400px;
		}
		h1  {
			display: inline-block;
			margin-right: 30px;
		}
		h2  {
			display: inline-block;
			margin-right: 30px;
		}
	</style>
</head>
<body>
	<h1>Products</h1>
	<h2>Your Cart (<?= $cartNumb ?>)</h2>
		<table>
			<thead>
				<td>Description</td>
				<td>Price</td>
				<td>Qty</td>
				<td></td>
			</thead>
			<form action='Ecommerce/purch' method='post'>
				<tr>
					<td><select name='description'>
								<option>Dojo Shirt</option>
								<option>Dojo Cups</option>
						</select>
					</td>
					<td><select name='price'>
								<option>19.99</option>
								<option>39.99</option>
						</select>
					</td>
						<td><select name='quantity'>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
						</select></td>
						<td><input type='submit' name='buy' value='Buy'></td>
						<input type='hidden' name='action' value='addCart'>
				</tr>
			</form>
			<form action='Ecommerce/buy' method='post'>
				<input type='submit' name='check_out' value='Check out'>
			</form>
			<form action='/Ecommerce/delete' method='post'>
				<input type='submit' name='clear' value='Clear Cart'>
			</form>
		</table>
</body>
</html>
