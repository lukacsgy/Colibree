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
$i = 0;
while (($lines = fgets($fp)) !== false){
	$i++;
	
	if ($i != $lineRemove){
		fwrite($temp, $lines);
	}
	else{
		fwrite($temp, $newline ."\n");
	}
}

if (!feof($fp)) {
	echo "hiba";
	die(1);
}

/* Itt töröljük a régit és átrijuk az uj nevét*/

fclose($fp);
fclose($temp);

unlink($filename);
rename("temp.txt", $filename);

echo "Replacement did successfully..!! ";