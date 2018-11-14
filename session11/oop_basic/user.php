<?php 
	class User {
		public function addUser($name){
			$connect = mysqli_connect('localhost', 'root', 'none',
				'18php05_oop_basic');
			$sql = "INSERT INTO users(name) VALUES('$name')";
			mysqli_query($connect, $sql);
		}
		public function listUser(){

		}
	}
?>