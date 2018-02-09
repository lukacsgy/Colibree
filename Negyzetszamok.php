<?php

$number =(int) readline("Add meg hany darab negyzetszamot adjak meg(1-től kezdve):");


for( $i = 1; $i <= $number; $i++){
	echo pow($i,2). "\n";
}
echo"\n ".$number." kisseb negyszamok pedig: ";

$power = 1;
while (pow($power,2) < $number){
	echo $power * $power. ", ";
	$power++;
}	

