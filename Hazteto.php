<?php

$number = readline("Add meg a haztető méretét: ");

for ($i = 1; $i <= $number; $i++){
	for($j = $i; $j <$number; $j++){
		echo " ";
	}
	echo "#";
	for($k = 0; $k < 2; $k++){
		for($j = 1; $j < $i; $j++){
			echo " ";
		}
	}
	echo "#\n";
}

