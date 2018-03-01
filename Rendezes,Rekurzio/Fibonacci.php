<?php

/*
  Írj programot, mely kiírja a képernyőre az első n Fibonacci számot.
  Az n változó értékét a felhasználó adhassa meg! Írd meg rekurzívan és iteratívan is!
 */

$howLong = readline("Add meg hany db Fibonacci szam erdekel: ");


/* iterativ megoldas */

//if ($howLong > 1) {
//	$formerNumber = 0;
//	$previousNumber = 1;
//	$fibonacci;
//	echo "$previousNumber, ";
//	for ($i = 1; $i < $howLong; $i++) {
//		$fibonacci = $formerNumber + $previousNumber;
//		$formerNumber = $previousNumber;
//		$previousNumber = $fibonacci;
//		echo "$fibonacci, ";
//	}
//} else {
//	$fibonacci = $howLong;
//	echo $fibonacci;
//}


for ($i = 1; $i <= $howLong; $i++){
	echo Fibonacci($i) . ", ";	
}

echo Fibonacci($howLong);

function Fibonacci($howLong) {

	if ($howLong <= 1) {
		return $howLong;
	} else {
		$fibonacci = Fibonacci($howLong - 1) + Fibonacci($howLong - 2);
		return $fibonacci;
	}
}
