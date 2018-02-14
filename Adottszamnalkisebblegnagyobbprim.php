<?php


	$number = (int)$argv[1];
	
	$possiblePrim = false;
	
	for($test = ($number - 1); !$possiblePrim; $test--){
		
		$possiblePrim = true;
		$div = 2;
		
		while ($possiblePrim && $div < $test) {
			if ($test % $div == 0) {
				$possiblePrim = false;
			}
			$div++;
		}
	}
	 echo ($test + 1);

