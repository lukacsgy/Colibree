<?php

/*
  Írj programot, mely kiírja a képernyőre az első n Fibonacci számot.
  Az n változó értékét a felhasználó adhassa meg! Írd meg rekurzívan és iteratívan is!
 */

$whichFibonacci = readline("Add meg hanyadik Fibonacci szam erdekel: ");


/*iterativ megoldas */
//
//if ($whichFibonacci > 1) {
//	$formerNumber = 0;
//	$previousNumber = 1;
//	$fibonacci;
//
//	for ($i = 1; $i < $whichFibonacci; $i++) {
//		$fibonacci = $formerNumber + $previousNumber;
//		$formerNumber = $previousNumber;
//		$previousNumber = $fibonacci;
//	}
//} else {
//	$fibonacci = $whichFibonacci;
//}
//echo $fibonacci;


echo Fibonacci($whichFibonacci);


function Fibonacci($whichFibonacci){
	if ($whichFibonacci <= 1){
		return $whichFibonacci;
	}
	else{
		$fibonacci = Fibonacci($whichFibonacci - 1) + Fibonacci($whichFibonacci - 2);
		return $fibonacci;
	}
}