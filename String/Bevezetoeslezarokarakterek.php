<?php

$source = readline("Add meg a szoveget: ");
echo "Add meg milyen karakter illeszek be és szokozzel elvaszta add meg hanyszor!";

fscanf(STDIN, "%s %d", $seperator, $often);

$newsolution;

for($i = 0; $i < $often; $i++){
	$newsolution[$i] = $seperator;
}

echo $newsolution;