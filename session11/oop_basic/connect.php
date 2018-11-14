<?php 
	class Connect {
		
		public $connect;

		public function connectDB() {
			$this->connect = mysqli_connect('localhost', 'root', 'none',
				'18php05_oop_basic');
			return $this->connect;
		}
	}
?>