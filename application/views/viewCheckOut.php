<?php
$cartNumb = 0;
$total = 0;
for($i = 0 ; $i < count($allProducts) ; $i++)
{
	$cartNumb += $allProducts[$i]['quantity'];
	$total += $allProducts[$i]['quantity'] * $allProducts[$i]['price'];
}
var_dump($allProducts);

?>

<html>
<head>
	<title>Products Listing</title>
	<style type="text/css">
		h1  {
			display: inline-block;
			margin-right: 30px;
		}
		h2  {
			display: inline-block;
			margin-right: 30px;
		}
		.input {
			display: block;
		}
	</style>
	<script type="text/javascript">
		function thanks()
		{
			document.getElementById("thanks").innerHTML = '$thanks';
		}
	</script>
</head>
<body>
	<h1>Check Out</h1>
	<h2>Your Cart (<?= $cartNumb ?>)</h2>
	<table>
		<thead>
			<td>Qty</td>
			<td>Description</td>
			<td>Price</td>
			<td></td>
		</thead>
			<?php foreach ($allProducts as $value) 
			{ ?>
			<tr>
				<td><?= $value['quantity'] ?></td>
				<td><?= $value['description'] ?></td>
				<td><?= $value['price'] ?></td>
				<td><a href="/Ecommerce/remove"><button>Delete</button></a></td>
			</tr>
			<?php } ?>

		<tr>
			<td></td>
			<td>Total</td>
			<td><?= $total ?></td>
			<td></td>
		</tr>
	</table>
	<h5>Billing Info</h5>
	<form action='/Ecommerce/thanks' method='post'>
		Name: <input class='input' type='text' name='name'>
		Address: <input class='input' type='text' name='address'>
		Card #: <input class='input' type='password' name='card'>
		<input class='input' type='submit' name='submit' value='SUBMIT'>
		<input type='hidden' action='submit' value='thanks'>
		<p id='thanks'></p>
	</form>
</body>
</html>
