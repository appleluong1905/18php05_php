<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = 'none'; //$password = '';
	$database = '18php05_demo';
	$connect = mysqli_connect($server, $username, $password, $database);
	if (mysqli_connect_errno()){
		echo "Connect error! ". mysqli_connect_error();
	} else {
		echo "Connect success!";
	}
	// demo
	$sql = "INSERT INTO users(name, email) 
	VALUES('TEST ok ok', 'testok@gmail.com')";
	mysqli_query($connect, $sql);
?>