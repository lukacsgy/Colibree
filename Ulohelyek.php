

<?php

if ($argc > 1) {

	for ($i = 0; $i < 26; $i++) {
		if ($i % 13 == 0) {
			echo "\n";
		}
		$seattingCapacity[$i] = rand(0, 1);
		echo $seattingCapacity [$i] . ",  ";
	}

	$reservation = $argv[1];
	$size = count($seattingCapacity);
	
	$takenSeat = $reservation;

	for($i = 0; $i < $size; $i++){
		
		$line = ($i + 1) % 13;
		floor($line);
		if(($seattingCapacity[$i] == 0) && ($line != 0)){
			$takenSeat--;
			echo "\n" . ($i + 1) . " jo ," . $takenSeat;
					
		}
		else {
			$takenSeat = $reservation;
		}
		
		if ($takenSeat == 0){
			echo "Yeah!!!";
			$takenSeat = $reservation;
		}
		
		
	}
	
}
