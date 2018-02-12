<?php

$m = 3;
$n = 2;
$a = 5;
$b = 2;
$k = 1;


for($x = 0; $x < $n; $x++){
	for($y = 0; $y < $b; $y++){
		for ($i = 0; $i < $m; $i++){
			for($j = 0; $j < $a; $j++){
				echo "o";
			}
			for($l = 0; $l < $k; $l++){
				echo " ";
			}
		}
		echo "\n";
	}
	echo "\n";
}
