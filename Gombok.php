<?php
$bulk = 0;
$i = 10;

while ($bulk < 1000000){
	$bulk = (4 * pow($i, 3) * M_PI )/ 3;
	if ($bulk > 1000000){		
	}
	else{
		echo number_format($bulk, 2)."cm3\n";
	}
	$i += 10;
}
