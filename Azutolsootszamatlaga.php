<?php


$i = 0;
while(($refil = readline("Add meg a tomb elemeit")) != 0){
	
	if ($i < 5){
		$numbers[$i] = $refil;
	}
	
	else{
		array_shift($numbers);
		array_push($numbers, $refil);
		/*print_r($numbers);*/
	}
	$i++;
}

$numbersAvarage = array_sum($numbers)/count($numbers);

echo "Az utolso 5 szam atalaga : " . $numbersAvarage;