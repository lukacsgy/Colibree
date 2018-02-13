<?php

if ($argc > 2){
	if ($argv[1] !== "--"){
		$source = fopen($argv[1], "r");
	}
	else{
		$source = STDIN;
	}
	
	$target = fopen($argv[2], "w");
	
	do{
		$line = fgets($source);
		fwrite($target, $line);
	}while($line !== FALSE);
	
	if (!feof){
		echo "error";
		die();
	}
	
	fclose($source);
	fclose($target);
}
