<?php 
	include 'user.php';
	class Student extends User {
		var $studenCode;
		public function add() {
			echo "Add student co ma sinh vien <br>";
		}
		public function edit() {
			echo "Edit student co ma sinh vien <br>";
		}
		public function testPublic() {
			$this->changePassword();
		}
	}
	$student = new Student;
	$student->add();
	$student->testPublic();
?>