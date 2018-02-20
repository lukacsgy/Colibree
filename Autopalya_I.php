<?php

echo "Add meg az 'gyorshajtó' adatait „óra perc sebesség” formában!"
 . "\nKiértékeléshez 0 0 0 formátumot add meg.\n";


$maxSpeed = array_fill(0, 24, 0);
$penalty = array_fill(0, 24, 0);


do {
	fscanf(STDIN, "%d %d %d\n", $hour, $min, $speed);

	if ($hour == 24) {
		$hour = 0;
	}

	if ($maxSpeed[$hour] < $speed) {
		$maxSpeed[$hour] = $speed;
	}

	if ($speed > 140) {
		if ($speed > 180) {
			$penalty[$hour] += 70;
		}
		$penalty[$hour] += 30;
	}
} while ($speed !== 0);


$size = count($maxSpeed);

for($i = 0; $i < $size; $i++) {
	if ($maxSpeed[$i] > 0) {
		echo "\n" . sprintf("%2s", $i) . ":00-" . sprintf("%2s", $i) . ":59 -> " . sprintf("%3s", $maxSpeed[$i]) . " Km/H"
			 . "A Kisszabott buntetesek osszege az adot oraban: " . $penalty[$i] . " 000 Ft.";
	}
}




