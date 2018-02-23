<?php

$parameter = readline("Add meg a szoveget: ");
$trimChar = readline("Add meg milyen karaktert toroljunk a szoveg elejen es vegen: ");

echo trimming($parameter, $trimChar);

function trimming($parameter, $trimChar) {
	$i = 0;
	while ($parameter[$i] === $trimChar) {
		$parameter[$i] = " ";
		$i++;
	}

	$end = strlen($parameter) - 1;
	while ($parameter[$end] === $trimChar) {
		$parameter[$end] = " ";
		$end--;
	}

	return $parameter;
}
