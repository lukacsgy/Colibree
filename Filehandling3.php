<?php

$fp = fopen("Text.txt", "w");

if ($fp === false) {
	echo "Error: Unable to open file\n";
	die(1);
}

echo " The content of the file test.txt is  :\n";

$txt = "test line";

for ($i = 1; $i <= 4; $i++) {
	echo $txt . $i . "\n";
	fwrite($fp, $txt . $i . "\n");
}
fclose($fp);

