<?php 
	$a = 5;
	$str = "Hello";
	function myFunction() {
		echo "<br>Hi!";
	}
	myFunction();
	// 	Viết hàm tính tổng và hiệu của 2 số cho trước
	// và in ra màn hinh

	/*
	* Description: Sum 2 number
	* Created by CanhLH
	* Created 15/10/2018	
	*/
	function mySum($a, $b) {
		return $a + $b;
	}

	echo " Tong cua 4 + 5 la: ";
	echo mySum(4, 5);

	// if else
	// switch case
	// for
	for ($i = 0; $i < 10; $i++) {
		echo "<br>". $i;
	}
	$n = 1;
	switch ($n) {
		case 1:
			echo "MOT";
			break;
		
		default:
			# code...
			break;
	}
	echo "<br>";
	for ($i = 1; $i <= 10; $i++) {
		switch ($i) {
			case 2:
				echo "<br>$i Today is Monday!";
				break;
			case 3:
				echo "<br>$i Today is Tuesday!";
				break;
			case 4:
				echo "<br>$i Today is Wednesday!";
				break;
			case 5:
				echo "<br>$i Today is Thursday!";
				break;
			case 6:
				echo "<br>$i Today is Friday!";
				break;
			case 7:
				echo "<br>$i Today is Saturday!";
				break;
			case 8:
				echo "<br>$i Today is Sunday!";
				break;
			default:
				echo "<br>$i Today is not day in week!";
				break;
		}
	}
	for ($i = 1; $i <= 10; $i++) {
		if($i == 2) {
			echo "<br>$i Today is Monday!";
		} elseif($i == 3) {
			echo "<br>$i Today is Tuesday!";
		} elseif($i == 4) {
			echo "<br>$i Today is Wednesday!";
		} elseif($i == 5) {
			echo "<br>$i Today is Thursday!";
		} elseif($i == 6) {
			echo "<br>$i Today is Friday!";
		} elseif($i == 7) {
			echo "<br>$i Today is Saturday!";
		} elseif($i == 8) {
			echo "<br>$i Today is Sunday!";
		} else {
			echo "<br>$i Today is not day in week!";
		}
	}

	//
	


?>