<?php

if ($argc > 1){
	$number = $argv[1];
	$prime = TRUE;
	$d = 2;
	
	while(($d < $number) && $prime !== FALSE ){
		if($number % $d == 0){
			$prime = FALSE;
		}
		$d++;
	}
	
	if($prime){
		echo "Prim!";
	}
	else{
		echo "Nem prim!";
	}
}
