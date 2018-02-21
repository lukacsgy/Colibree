<?php

echo"Add meg melyik nap hany latogato volt!\n"
 . "A napokat 1-7 között add meg(ertelem szeruen hetfo-vasranapig....1-7ig) "
 . "és utana spacel elválasztva hanyan voltak\n";


fscanf(STDIN, "%d %d", $day[0], $visitors[0]);
$i = 0;

while ($day[$i] !== 0) {
	$i++;
	fscanf(STDIN, "%d %d", $day[$i], $visitors[$i]);
	for ($j = 0; $j < $i; $j++) {
		if ($day[$j] == $day[$i]) {
			$visitors[$j] += $visitors[$i];
			$visitors[$i] = 0;
		}
	}
}
array_pop($day);
array_pop($visitors);

$size = count($day);

$crowdedDay = $day[0];
$airyDay = $day[0];

$maxVisit = $visitors[0];
$minVisit = $visitors[0];

for ($i = 0; $i < $size; $i++) {
	
	if (!lessOrNoT($maxVisit, $visitors[$i])) {
		$crowdedDay = $day[$i];
		$maxVisit = $visitors[$i];
	}

	if (lessOrNot($minVisit, $visitors[$i]) && ($visitors[$i] != 0)) {
		$airyDay = $day[$i];
		$minVisit = $visitors[$i];
	}
}


echo "\nA Legtobb Latogato Ezzen A Napon Van: " . $crowdedDay;
echo "\nA Legkevesebb Latogato Ezzen A Napon Van: " . $airyDay;

function lessOrNot($checkingNumber,$maybeSmaller){
	if ($checkingNumber > $maybeSmaller) {
		return true;
	}
	else{
		return false;
	}
}
