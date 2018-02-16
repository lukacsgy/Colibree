<?php

$number1 = readline("Add meg az 'a' szamot: ");
$number2 = readline(" Add meg a 'b' szamot: ");
$number3 = readline(" Add meg a 'c' szamot: ");

if (($number1 < $number2) && ($number1 < $number3)){
	echo "a<";
	if($number2 > $number3){
		echo "c<b";
	}
	elseif($number3 > $number2){
		echo "b<c";
	}
	else{
		echo "b=c";
	}
}
elseif (($number2 > $number1) && ($number2 > $number3)) {
	echo "b<";
	if($number1 > $number3){
		echo "b>c";
	}
	elseif($number3 > $number2){
		echo "c>b";
	}
	else{
		echo "b=c";
	}
}