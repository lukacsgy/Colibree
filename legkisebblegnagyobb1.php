<?php

$size = (int) readline("Hany darab szam lesz: ");

$first = readline("Add meg az 1. szamot: ");

$max = $first;
$min = $first;
$szum = $first;

for ($i = 1; $i < $size; $i++) {
	$current = (int) readline(" Add meg a " . ($i + 1) . " szamot: ");

	if ($current >= $max) {
		$max = $current;
	}

	if ($min > $current) {
		$min = $current;
	}

	$szum += $current;
}

echo "A Legnagyobb Szam: " . $max . "\nA Legkisebb Szam: " . $min . "\nA Szamok atlaga : " . ($szum / $size);
