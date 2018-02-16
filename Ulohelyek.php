

<?php

if ($argc > 1) {

	for ($i = 0; $i < 25; $i++) {
		if ($i % 13 == 0) {
			echo "\n";
		}
		$seattingCapacity[$i] = rand(0, 1);
		echo $seattingCapacity [$i] . ",  ";
	}

	$reservation = $argv[1];
	
	
	$size = count($seattingCapacity);
	
	$setNeed = 4;
	for($i = 0; $i < $size; $i++){
		if($seattingCapacity[$i] == 0){
			$setNeed--;
			for($j = 1; $j <= $setNeed; $j++){
				$nextSet = $i + $j;
				
				if($seattingCapacity[$nextSet] == 0){
					$setNeed--;
				}
				else{
					break;
				}
			}
		}
		else{
			$setNeed =$reservation;
		}
	}
}