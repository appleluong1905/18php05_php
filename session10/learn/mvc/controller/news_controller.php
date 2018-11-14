<?php 
	class NewsController {
		public function handleRequest($action) {
			switch ($action) {
					case 'listNews':
						# code...
						// lay thong tin trang danh sach news
						// Model lay thong tin trang danh sach news
						$newsList = new NewsModel();
						$getNewsList = $newsList->getNewsList();
						//Do du lieu ra views
						include 'views/news/getNewsList.php';
						break;
					case 'newsDetail':
						# code...
						$newsID = $_GET['id'];
						$newsList = new NewsModel();
						$getNewsDetail = $newsList->getNewsDetail($newsID);
						//Do du lieu ra views
						include 'views/news/getNewsDetail.php';
						break;
					default:
						# code...
						break;
				}
		}
	}
?>