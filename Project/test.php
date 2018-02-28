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
		if(freeSeat($seattingCapacity[$i])){
			$takenSeat--;
			enoughFree($seattingCapacity[$i],$takenSeat);
		}
		else{
			$takenSeat = $reservation;
		}
	}
	
}



function freeSeat($check){
	if ($check == 0){
		return true;
	}
	else{
		return false;
	}
}

function enoughFree($setArray[],$howMany){
	
}