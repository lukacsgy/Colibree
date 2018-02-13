<?php

$size = (int) readline("Hany darab szam lesz: ");
$first = readline("Add meg az 1. szamot: ");
	
$max = $first;
$szum = $first;

for($i = 1; $i < $size; $i++){
	$current = (int) readline(" Add meg a ". ($i + 1) . " szamot: ");
		
	if ($current > $max){
		$max = $current;
	}
	
	$szum += $current;
}

echo "A Szamok osszege a legnagyobb nelkul : " . ($szum - $max);