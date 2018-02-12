<?php
$boxsize = readline("Add meg a láda méretét: ");

/*Teteje*/
echo "+";
for($i = 0; $i < $boxsize; $i++){
	echo "-";
}
echo "+\n";


for($i = 0; $i < $boxsize; $i++){
	echo "|";
	for ($j = 0; $j < $i; $j++){
		echo " ";
	}
	echo "\\";
	for ($j = $i + 1; $j < $boxsize; $j++){
		echo " ";
	}
	echo "|\n";
}




/*Alja*/
echo "+";
for($i = 0; $i < $boxsize; $i++){
	echo "-";
}
echo "+\n";