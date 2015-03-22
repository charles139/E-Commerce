<?php
	echo 'Thank you, '. $allCustomers[count($allCustomers) - 1]['name'].'.'.'<br>'
		.'Your order will be shipped to the specified address: '.'<br>'
		.$allCustomers[count($allCustomers) - 1]['address'];
?>