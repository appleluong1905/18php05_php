<?php 
	function uploadImage($file, $target, $width, $heigth) {
		//
		// upload va resize anh (neu can)
		//
		return $image;
	}



	// Model hoac Controller se lam viec nay
	$avatar = $_FILES['avatar'];

	$imageName = uploadImage($avatar, 'uploads', 450, 600);
	// end


?>