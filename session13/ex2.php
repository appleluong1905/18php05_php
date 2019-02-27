<?php 
	$keo = 0;
	$dola = 0;
	$euro = 0;
	while ($keo < 50) {
		// doi dola lay keo
		$dola-=5;
		$keo++;
		$euro+=3;
		// khi co tien euro thi doi euro lay keo cho den khi het euro
		while ($euro > 0) {
			$euro-=2;
			$dola+=3;
			$keo++;
		}
	}
	echo "Ton ".$dola." de co ".$keo." cai keo";
?>