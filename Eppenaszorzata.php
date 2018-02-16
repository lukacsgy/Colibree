<?php

if ($argc > 1){
	
	$numberZ = $argv[1];
	
	$array = [1, 2, 3, 4, 5];
	
	$possibleProduct = false;
	foreach ($array as $value) {
		foreach ($array as $value2) {
			
			$product = $value * $value2;
			if ($product == $numberZ){
				/* echo "Van a tomben 2 olyan szam :" . $value . " * " . $value2 . " = " . $product . "\n";*/
				$possibleProduct = true;
			}
		}
	}
	
	if ($possibleProduct){
		echo "Vannak olyana szamok!";
	}
	else{
		echo "Nincsen 2 olyan szam aminek szorzata a kerestt szam!";
	}
	
	
	
}