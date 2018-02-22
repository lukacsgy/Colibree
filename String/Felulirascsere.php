<?php

$sentence = readline("Add meg a mondatott: ");

echo "Add meg hogy mit milyen karakterre csereljek és majd irjak felul!(szokozzel elvalsztva):";
fscanf(STDIN, "%s %s", $origin, $replace);

echo replaceAndOverwrite($sentence, $origin, $replace);


function replaceAndOverwrite($sentence, $origin, $replace) {

	for ($i = 0; $i < strlen($sentence); $i++) {
		if ($sentence[$i] === $origin) {
			$sentence[$i] = $replace;
		} elseif ($sentence[$i] === $replace) {
			$sentence[$i] = $origin;
		}
	}
	return $sentence;
}
