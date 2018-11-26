<?php 
	$myName = 'SDC';
	//echo $myName;
	//
	//setcookie("myName", $myName)
	//echo time();
	echo "<br>";
	setcookie("myName", $myName, time() + 100, '/');

	echo $_COOKIE['myName'];

	// function setCookieL($phut) {
	// 	setcookie("myName", $myName, time() + $phut*60);		
	// }
	//setcookie('myName', '', time() - 100, '/');
	//unset($_COOKIE['myName']);

	//echo $_COOKIE['myName'];
?>