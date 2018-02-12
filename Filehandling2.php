<?php

$fg = fopen("Text.txt", "r");

if ($fp === false) {
	echo "Error: Unable to open file\n";
	die(1);
}
echo fgets($fg);
fclose($fg);
