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
	

	for ($i = 0; ($i < $size); $i++) {
	
		if ($seattingCapacity[$i] < 1) {
			$empty = true;
			$row = floor(($i + 1) / 14);
			$seat = 1;

			while ($seat < $reservation) {

				$empty = false;
				$next = $i + $seat;

				if($size > $next){
					if (($seattingCapacity[$next] < 1) && ($row == floor($next / 14))) {
						$empty = true;
						echo "\n" . $row . "[" . ($i + 1) . "]";
					}
				}
				$seat++;
			}
		}
	}
}
