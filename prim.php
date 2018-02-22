<?php

$szam = (int)readline("add meg szamot: ");
$prim = false;
$oszto = 2;

while(($oszto < $szam) && $prim != TRUE){
	if($szam % $oszto == 0){
		$prim = true;
	}
	$oszto++;
}

if(!$prim){
	echo "prim";
}
else{
	echo "nem prim";
}