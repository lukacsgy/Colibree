<?php

$fp = fopen("Text.txt", "r");

if ($fp === false) {
	echo "Error: Unable to open file\n";
	die(1);
}
echo "The content of the file Text.txt  are :\n";

$db = 0;
while (feof($fp) !== true ){
	$db++;
	echo fgets($fp);
}

echo "The lines in the file test.txt are :". ($db - 1);