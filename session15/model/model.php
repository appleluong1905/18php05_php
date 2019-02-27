<?php 
	class Model {
		function buyProduct($id) {
			$cart = array(
					$id => array(
							'id' => $id,
							'quantity' => 1
						)
				);
		}
		function updateQuantity($id, $quantity) {
			// $cart = array(
			// 	$id => array(
			// 			'id' => $id,
			// 			'quantity' => $quantity
			// 		)
			// );	
			$cart[$id] = array('id' => $id, 'quantity' => $quantity);
		}
		function checkPermission() {
			$isAdmin = true;
			//check role theo SESSION login xem co phai admin khong?
			// Neu khong phai thi isAdmin = false;
			return $isAdmin;
		}
	}
?>