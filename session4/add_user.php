<!DOCTYPE html>
<html>
<head>
	<title>Add user - Session 4</title>
</head>
<body>
	<?php 
		// Khoi tao 2 bien loi bang "";
		$errName = "";
		$errEmail = "";
		$name = "";
		$email = "";
		$register = '';
		$check = true;
		// Neu chua submit thi k vao duoc cau lenh if nay
		if(isset($_POST['add_user'])){
			$name  = $_POST['name'];
			$email = $_POST['email'];
			if($name == "") {
				$check = false;
				$errName = "Please input your name";
			} else {
				$errName = "";
			}
			if($email == "") {
				$check = false;
				$errEmail = "Please input your email";
			} else {
				$errEmail = "";
			}
			// if($name != '' && $email != '') {
			// 	$register = 'Register success!';
			// }
			if($check) {
				$register = 'Register success!';
			}
		}
	?>
	<p><?php echo $register?></p>
	<form name="AddUser" action="#" method="post">
		<p>Name:<input type="text" name="name" value="<?php echo $name;?>"></p>
		<span><?php echo $errName;?></span>
		<p>Email:<input type="text" name="email" value="<?php echo $email;?>"></p>
		<span><?php echo $errEmail;?></span>
		<p><input type="submit" name="add_user" value="ADD USER"></p>
	</form>
</body>
</html>