<?php

$fp = fopen("uj.txt", "r");
$b = 0;
$line = fread($fp, 50);
	echo $line;
	
	
	
fclose($fp);