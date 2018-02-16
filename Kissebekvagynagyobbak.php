<?php

if($argc > 1){
	
	$array = [1, 1, 1, 1, 5, 7, 7, 7, 7, 1];
	$trial = $argv[1];
	
	$major = 0;
	$minor = 0;
	foreach ($array as $value) {
		if ($trial > $value){
			$minor++;
		}
		if ($trial < $value){
			$major++;
		}
	}
	
	if ($major > $minor){
		echo "A megadott szamnal tobb nagyobb erteku szam van a tomben";
	}
	elseif ($minor > $major) {	
		echo "A megadott szamnal tobb kisebb erteku szam van a tomben";
	}
	else{
		echo "A nagyobb es kisebb erteku elemek aranya nagyabol megyezeik";
	}
	
	
}