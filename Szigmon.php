<?php

$array = [25, 69, 54, 8, 77, 6, 29, 10, 3, 98];

$nov = true;
$csok = true;

$size = count($array);

for($i = 0; $i < ($size - 1); $i++){
	if($nov  || $csok){
		if($array[$i] >= $array[($i + 1)]){
			$nov = false;
		}
		if($array[$i] <= $array[($i + 1)]){
			$csok = false;
		}
	}
}

if($nov){
	echo "Szigoruan monoton no!";
}
elseif ($csok) {
	echo "Szigoruan monoton csokken";
}
 else {
	echo "Egyiksem";
}



