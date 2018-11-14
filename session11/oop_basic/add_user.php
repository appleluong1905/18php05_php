<?php 
include 'user.php';
	if(isset($_POST['add_user'])) {
		$name = $_POST['name'];
		$user = new User();
		$user->addUser($name);
		header("Location: list_user.php");
	}
?>

<h1>Add user</h1>
<form method="post">
	<p>Name:<input type="text" name="name"></p>
	<p><input type="submit" name="add_user" value="ADD USER"></p>
</form>