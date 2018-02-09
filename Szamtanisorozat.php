<?php

$number1 = (float) readline("Add meg az elso valos szamot: ");
$number2 = (float) readline("Add meg az masodik valos szamot: ");
$number3 = (float) readline("Add meg az harmadik valos szamot: ");

if ($number1 < 0){
	echo "Negativ szam ";
}
else{
	echo "Nem neagtív szam ";
}

for ($i = $number1; $i <= $number3; $i += $number2){
	echo number_format($i,1). " ";
}