<?php

	echo "Add meg az 'gyorshajtó' adatait „óra perc sebesség” formában!"
       . "\nKiértékeléshez 0 0 0 formátumot add meg.\n";
	
	
	$maxSpeed = array_fill(0, 24, 0);
	
	
	do{
	fscanf(STDIN,"%d %d %d\n" , $hour , $min ,$speed);
	
	if($hour == 24){
		$hour = 0;
	}
	
	if ($maxSpeed[$hour] < $speed){
		$maxSpeed[$hour] = $speed;
	}
	
	}while ($speed !== 0);
	
foreach ($maxSpeed as $key => $value) {
	if($value > 0){
		echo "\n" . sprintf("%2s",$key) . ":00-" . sprintf("%2s",$key) . ":59 -> " . sprintf("%3s",$value) . " Km/H";
	}
}