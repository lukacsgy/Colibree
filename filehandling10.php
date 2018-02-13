<?php

$fileName = readline ("Input the file name to be opened : ");

$fp = fopen($fileName, "a");

if ($fp === FALSE ){
	echo "Error: Unable to open file\n";
	die(1);
}

$s = readline("Input the number of lines to be written: ");
echo "The lines are : \n";

fwrite($fp,"\n");

for ($i = 0; $i < $s; $i++){
	$line = fgets(STDIN);
	fwrite($fp, $line);
}

fclose($fp);
