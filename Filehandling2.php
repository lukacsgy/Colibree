<?php

$fg = fopen("Text.txt", "r");

if ($fg === false) {
	echo "Error: Unable to open file\n";
	die(1);
}
echo "The file Text.txt created successfully...!!\n";
echo fgets($fg);
fclose($fg);
