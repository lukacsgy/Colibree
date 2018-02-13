<?php
/* 2 file-t hozzuknk létre hogy kimásoljuk a "megfeelő tartalamat majd átirjuk  a fájlt" */
$filename = readline("Input the file name to be opened: ");
$fp = fopen($filename, "r");

if ($fp === FALSE){
	echo "Error: Unable to open file\n";
	die(1);
}

$temp = fopen("temp.txt", "w");

if ($temp === FALSE){
	echo "Error: Unable to open file\n";
	die(1);
}

$newline = readline("Input the content of the new line :");
$lineRemove = readline("Input the line you want to remove: ");

/*Itt történik a másolás az ideglénes fájlba*/
$part = 0;

while (feof($fp) !== TRUE){
	$part++;
	$lines = fgets($fp);
	if ($part != $lineRemove){
		fwrite($temp, $lines);
	}
	else{
		fwrite($temp, $newline);
	}
}
/* Itt töröljük a régit és átrijuk az uj nevét*/

fclose($fp);
fclose($temp);

unlink($filename);
rename("temp.txt", $filename);

/*Kiiaratjuk konzolra a fájlt*/

$fp = fopen($filename, "r");

if ($fp === FALSE){
	echo "Error: Unable to open file\n";
	die(1);
}

echo "The Content of the file ". $filename." is :\n";

while (feof($fp) !== TRUE){
	$line = fgets($fp);
	echo $line ;
}

fclose($fp);
