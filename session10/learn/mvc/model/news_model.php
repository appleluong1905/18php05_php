<?php 
	include 'config/connectDB.php';
	class NewsModel extends ConnectDB{
		public function getNewsList() {
			//var_dump($this->connect);
			$newsList = "News list info";
			return $newsList;
		}
		public function getNewsDetail($newsID) {
			$newsDetail = "News detail info $newsID";
			return $newsDetail;
		}
	}
?>