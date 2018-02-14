<?php

if($argc > 1){
	$number = $argv[1];

	$szum = 0;

	for($div = 1; $div <= $number; $div++){
		if($number % $div == 0){
			$szum += $div;
		}
	}

	$possiblePrim = true;
	$oszto = 2;
	while ($possiblePrim && $oszto < $szum) {
		if ($szum % $oszto == 0) {
			$possiblePrim = false;
		}
		$oszto++;
	}

	if ($possiblePrim) {
		echo $szum . ", Prim szam az Osztok Osszege!";
	}
	else{
		echo $szum . ", Nem Prim szam az Osztok Osszege!";
	}
}

