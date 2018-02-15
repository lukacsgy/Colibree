<?php

if ($argc > 1){
	
	$source = fopen("Szoveg.txt", "w");
	$text = $argv[1];
	fwrite($source, $text);
	
	$source = fopen("Szoveg.txt", "r");
	$target = fopen("Tarolo.txt", "w");
	
	$count = 0;
	
	do{
		$char = fgetc($source);
		$possiblePrim = false;
		
		if($count >= 2){
			$possiblePrim = true;
			$div = 2;

			while ($possiblePrim && $div < $count) {
				if ($count % $div == 0) {
					$possiblePrim = false;
				}
				$div++;
			}
		}
		
		if($possiblePrim){
			fwrite($target, $char);
		}
		
		$count++;
	}while ($char !== false);
	
	fclose($source);
	fclose($target);
	
	unlink("Szoveg.txt");
	rename("Tarolo.txt", "Szoveg.txt");
	
	
}

