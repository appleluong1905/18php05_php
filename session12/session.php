<?php 
	// session_start();
	// //$_SESSION['myPhone'] = '0935667777';

	// //echo $_SESSION['myPhone'];
	// //unset($_SESSION['myPhone']);
	// //session_unset();
	// //$_SESSION['myPhone'] = '0935667777';
	// //echo $_SESSION['myPhone'];
	// $_SESSION['myPhone'] = '0935667777';
	// $_SESSION['myName']  = 'SDC';	
	// session_start() ;
	// session_destroy() ;
	// //session_unset();
	// //$_SESSION['myPhone'] = '0935667777';
	// echo $_SESSION['myPhone'];
	// echo $_SESSION['myName'];
	session_start();
	$_SESSION['login'] = 'Admin';
	//echo $_SESSION['login'];
	var_dump($_SESSION);
	session_destroy();
	var_dump($_SESSION);
?>