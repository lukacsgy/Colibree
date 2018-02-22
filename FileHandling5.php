<?php

$fp = fopen("Text.txt", "r");

if ($fp === false) {
	echo "Error: Unable to open file\n";
	die(1);
}


$db = 0;
while ( fgets($fp) !== FALSE ){
	$db++;
}

echo "The lines in the file Text.txt are :". $db;



