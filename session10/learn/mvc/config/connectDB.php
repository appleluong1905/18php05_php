<?php 
	class ConnectDB {
		var $connect;
		var $server   = 'localhost';
		var $username = 'root';
		var $password = 'none';
		var $database = '18php05_mvc_demo';
		
		public function connectDB() {
			$this->connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
			return $this->connect;
		}

	}
?>