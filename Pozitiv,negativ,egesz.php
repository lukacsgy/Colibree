<?php

$number = (float) readline("Add meg a szamot(tizedest . ird): ");

if ($number > 0){
	echo "A szam Pozitiv, és";
}
elseif ($number == 0){
	echo "A szam NULLA, tehat";
}
else {
	echo "A szam Negativ, és";
	$number *= -1;
}

$modulo = $number - floor($number);

if ($modulo == 0){
	echo " egesz szam.\n";
}
else {
	echo " nem egesz szam.\n";
}

