<?php 
	include 'connect.php';
	class User extends Connect {
		public function addUser($name){
			$sql = "INSERT INTO users(name) VALUES('$name')";
			mysqli_query($this->connectDB(), $sql);
		}
		public function listUser(){
			$sql = "SELECT * FROM users";
			return mysqli_query($this->connectDB(), $sql);
		}
	}
?>