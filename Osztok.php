<?php

$number = (int)readline("Adj meg egy egesz szamot: ");

echo "A szam osztoi: ";
for ($i = 1;  $i <= $number /2 ; $i++){
	if ($number % $i == 0){
		echo $i.", ";
	}
}