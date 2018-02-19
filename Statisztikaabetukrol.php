<?php

$fp = fopen("test1.txt", "w");

fwrite($fp,$argv[1]);

$fp = fopen("test1.txt", "r");

for($i = "A"; $i <= "Z" ; $i++){
	$chartsCount[$i] = 0;
}
 

while (($char = fgetc($fp)) !== false){
	for($i = "A"; $i <= "Z"; $i++){
		if ($char == $i){
			$chartsCount[$i]++;
		}
	}
}


spellArray($chartsCount);

function spellArray($array){
	foreach ($array as $key => $value) {
		if ($value > 0){
			echo "\n" .$key . ": " . $value . " Db";
		}
	}
}


