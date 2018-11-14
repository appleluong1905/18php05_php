<?php 
	include 'model/home_model.php';
	include 'model/news_model.php';
	include 'controller/news_controller.php';
	class HomeController {
		//public function xulyYeucau();
		public function handleReqquest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			if ($controller == 'home') {
				switch ($action) {
					case 'home':
						// lay thong tin trang chu
						// Model lay thong tin trang chu
						$homeInfo = new HomeModel();
						$getHomepage = $homeInfo->getHomepage();
						//Do du lieu ra views
						include 'views/home/homepage.php';
						break;
					case 'listHome':
						# code...
						break;
					default:
						# code...
						break;
				}
			} elseif($controller == 'news') {
				
				$newsController = new NewsController();
				$newsController->handleReqquest($action);

			} elseif($controller == 'products') {
				switch ($action) {
					case 'listProducts':
						# code...
						break;
					case 'productDetail':
						# code...
						break;
					default:
						# code...
						break;
				}
			}
		}
	}
?>