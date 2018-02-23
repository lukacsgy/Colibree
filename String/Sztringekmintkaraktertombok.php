<?php

$string = $argv[1];

echo "A szovegben" . countOneAtString($string) . " db 1-es van";

function countOneAtString($string) {
	$lump = 0;
	for ($i = 0; $i < strlen($string); $i++) {
		if ($string[$i] === "1") {
			$lump++;
		}
	}
	return $lump;
}
