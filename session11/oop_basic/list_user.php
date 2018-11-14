<?php 
include 'user.php';
$user = new User();
$users = $user->listUser();

while ($row = $users->fetch_assoc()) {
	echo $row['id'].' - '.$row['name'].'<br>';
}

?>