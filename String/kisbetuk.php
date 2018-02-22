<?php

$sentence = readline("Ird le a mondatott: ");

echo "\nA Szovegben talalhato kisbetuk szama: " . countLowerCharts($sentence)
 . "\nA szoveg csak kisbetukkel: " . strtolower($sentence);

function countLowerCharts($sentence) {
	$lowChar = 0;

	for ($i = 0; $i < strlen($sentence); $i++) {
		if (ord($sentence[$i]) >= ord("a") && ord($sentence[$i]) <= ord("z")) {
			$lowChar++;
		}
	}
	return $lowChar;
}
