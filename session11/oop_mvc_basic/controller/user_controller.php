<?php 
	include 'model/user_model.php';
	class User {
		public function xulyVandeLienquanUser($action) {
			if ($action == 'listUsers') {
				$this->listUser();
			} elseif ($action == 'addUsers') {
				$this->addUser();
			}
		}

		public function listUser(){
			$user = new UserModel();
			$listUsers	= $user->getUser();
			include 'views/users/list_users.php';
		}
	}
?>