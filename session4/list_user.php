<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = 'none'; //$password = '';
	$database = '18php05_demo';
	$connect = mysqli_connect($server, $username, $password, $database);
	$sql = "SELECT * FROM users";
	$result = mysqli_query($connect, $sql);
	if($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$id = $row['id'];
			echo $row['id'].' - '.$row['name'].' - '.$row['email'];
			echo "<a href='delete_user.php?ID_delete=$id'>DELETE</a>";
			echo "| <a href='edit_user.php?id=$id'>EDIT</a>";
			echo '<br>';
		}
	} else {
		echo "No user";
	}
?>