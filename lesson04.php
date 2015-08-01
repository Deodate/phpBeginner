<?php
	include 'lesson03.php';

	$p=quotes();//here we are seeing new php builtin function to print array

	/* in php when we need to print a single element of array we use foreach see example bellow */
	foreach ($p as $quote => $value) {
		# code...
		$evaluate= $value;
	}
	for ($i=0; $i <2 ; $i++) { 
		# code...
		echo $evaluate[$i];echo "<br>";
	}


?>