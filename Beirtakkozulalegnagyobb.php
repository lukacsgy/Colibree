<?php

$max = 1;
echo "Szamok legyenek nagyobbak mint 0\n";

while(($current = (int)readline("Add meg a szamokat: ")) >= "0"){
	if($current > $max){
		$prim = false;
		$div = 2;

		while(($div < $current) && $prim != TRUE){
			if($current % $div == 0){
				$prim = true;
			}
			$div++;
		}

		if(!$prim){
			$max = $current;
		}
	}
}

echo $max;
