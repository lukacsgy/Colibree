<?php

$string = $argv[1];

echo "A szovegben" . countOneAtStrin($string) . " db 1-es van";

function countOneAtStrin($string) {
	$lump = 0;
	for ($i = 0; $i < strlen($string); $i++) {
		if ($string[$i] === "1") {
			$lump++;
		}
	}
	return $lump;
}
