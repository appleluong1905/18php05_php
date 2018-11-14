<?php 
	include 'config/database.php';
	class UserModel extends DB{
		public function getUser() {
			$sql = 'SELECT * FROM users';
			return mysqli_query($this->connectDB(), $sql);
		}
	}
?>	