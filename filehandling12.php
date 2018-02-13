<?php

if ($argc > 3){
	$source[0] = fopen($argv[1], "r");
	$source[1] = fopen($argv[2], "r");
	
	$target = fopen($argv[3], "w");

	for ($i = 0; $i < 2; $i++){
		while(($line = fgets($source[$i])) !== FALSE){
			fwrite($target, $line);
		}
		
		if (!feof($source[$i])){
			echo "Error";
		}
	}
	
	echo "The two files merged into " . $argv[3] . " file successfully..!!";
	
}
