<!DOCTYPE html>
<html>
<head>
	<title>18php05 Shop</title>
</head>
<body>
	<?php
	 	//include 'controller/home_controller.php';
	 	//$handleRequest = new HomeComtroller();
	 	//$handleRequest->handleRequest();
		// $_SESSION['login'] = 'canh';


		// $_SESSION['cart'] = array();

	 // 	$cart['1'] = array('id' => 1, 'quantity' => 2);
	 // 	$_SESSION['cart']['1'] = $cart['1'];
	 // 	//$_SESSION['cart']['1'] = array('id' => 1, 'quantity' => 2);
	 // 	$cart['5'] = array('id' => 5, 'quantity' => 1);
	 // 	$_SESSION['cart']['5'] = $cart['5'];

	 // 	$cart['3'] = array('id' => 3, 'quantity' => 6);
		// $_SESSION['cart']['3'] = $cart['3'];

	 // 	echo "<pre>";
	 // 	var_dump($_SESSION['cart']);
	 	//SELECT * FROM `products` WHERE id in (1, 5, 3)
	?>

	<?php 
		$cart = array(
					1 => array('id' => 1, 'quantity' => 2),
					5 => array('id' => 5, 'quantity' => 3),
					8 => array('id' => 8, 'quantity' => 1),
					9 => array('id' => 9, 'quantity' => 7)
			);
		echo "<pre>";
		var_dump($cart);


	?>
</body>
</html>