<?php

$fp = fopen("Text.txt", "r");

if ($fp === false) {
	echo "Error: Unable to open file\n";
	die(1);
}

$db = 0;
while (feof($fp) !== true ){
	$db++;
	echo fgets($fp);
}

echo "\nThe lines in the file test.txt are :". $db;