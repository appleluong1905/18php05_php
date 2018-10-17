<?php 
	$arr = array();
	var_dump($arr); // ~ console.log(arr);
	$arr = array(1, 2, 3, 4);
	var_dump($arr);
	$arr = array('a' => 1, 'b' => 2, 'c' => 3);
	var_dump($arr);
	$arr2 = array(
				array('name' => 'Trung', 
				  'year' => 1997,
				  'phone' => '0988777999'),
				array('name' => 'Nam', 
				  'year' => 1998,
				  'phone' => '0943555666'),
				array('name' => 'Thuy', 
				  'year' => 1994,
				  'phone' => '099866444'),

		    );
	$arr2 = array(
			'trung' =>	array('name' => 'Trung', 
					          'year' => 1997,
					          'phone' => '0988777999'),
			'nam' =>	array('name' => 'Nam', 
					          'year' => 1998,
					          'phone' => '0943555666'),
			'thuy' =>	array('name' => 'Thuy', 
					          'year' => 1994,
					          'phone' => '099866444'),

		    );
	var_dump($arr2);
	//Lay gia tri cua phan tu trong mangs
	echo "<br>";
	echo $arr2['nam']['name'];
	echo "<br>";
	echo $arr2['thuy']['year'];

	// Doi gia tri cua phan tu trong mang
	$arr2['nam']['name'] = 'Hung';
	echo "<br>";
	echo $arr2['nam']['name'];

	// Bo bot mot phan tu trong mang
	unset($arr2['nam']);
	echo "<pre>";
	var_dump($arr2);
	echo "<br>";
	foreach($arr2 as $arrA){
		// echo "<pre>";
		// var_dump($arrA);
		echo $arrA['name'].' - '.$arrA['year'].' - '.$arrA['phone'];
		echo "<br>";
	}
?>
