<?php 
	include 'user_controller.php';
	class FrontEndController {
		public function xulyYeucau() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			if ($controller == 'home') {
				if (!isset($_SESSION['login'])) {
					header("Location: index.php?controller=users&action=login");
				} else {
					include 'views/home.php';
				}
			} elseif ($controller == 'users') {
				$users = new User();
				$users->xulyVandeLienquanUser($action);
			}
		}
	}
?>