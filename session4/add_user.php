<!DOCTYPE html>
<html>
<head>
	<title>Add user - Session 4</title>
</head>
<body>
	<?php 
		$server = 'localhost'; //$server = '127.0.0.1';
		$username = 'root';
		$password = 'none'; //$password = '';
		$database = '18php05_demo';
		$connect = mysqli_connect($server, $username, $password, $database);
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
			//var_dump($_FILES);exit();
			$imageAvatar = $_FILES['avatar'];
			// 1. lay duoc ten anh de luu vao database
			$avatar = $imageAvatar['name'];
			$pathSave = 'uploads/'.$avatar;
			// 2. Upload anh len thu muc luu tru
			move_uploaded_file($imageAvatar['tmp_name'], $pathSave);
			if($check) {
				$register = 'Register success!';
				$sql = "INSERT INTO users(name, email, avatar) 
				VALUES('$name', '$email', '$avatar')";
				mysqli_query($connect, $sql);
			}
		}
	?>
	<p><?php echo $register?></p>
	<form name="AddUser" action="#" method="post" enctype="multipart/form-data">
		<p>Name:<input type="text" name="name" value="<?php echo $name;?>"></p>
		<span><?php echo $errName;?></span>
		<p>Email:<input type="text" name="email" value="<?php echo $email;?>"></p>
		<span><?php echo $errEmail;?></span>
		<p> Avatar:
			<input type="file" name="avatar">
		</p>
		<p><input type="submit" name="add_user" value="ADD USER"></p>
	</form>
</body>
</html>