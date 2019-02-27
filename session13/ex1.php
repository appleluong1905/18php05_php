<?php 
	$binh = 27;
	$minh = $binh/3;
	$solanchuyen = 0;
	
	while ($binh != $minh*2) {
		$binh--;
		$minh++;
		$solanchuyen++;
	}

	echo "So lan chuyen sach tu Binh qua Minh la: ".$solanchuyen;
?>

