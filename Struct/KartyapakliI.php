<?php

/*
  Kártyás játékot írunk. Definiálj egy olyan C-s típust,
  amely tárolhatja egy kártya adatait (szín: pikk, treff, … és szám: A, 2, 3, … J, Q, K).
  Tölts fel egy tömböt egy pakli kártyáival. Utána keverd meg a tömböt.
  A keverő algoritmus ne cserélje feleslegesen sokszor a tömb elemeit!
  Végül írd ki, milyen sorrendben szerepelnek a kártyák a megkevert pakliban.

  Hiányos-e a pakli! ( Dani csinálja/ csinálta )
  Van-e benne dupla lap (kétszer ugyanaz)! ( Gyuri(én) csinálta/ csinálja )
 */


$kartya = [];

for ($i = 1; $i <= 4; $i++) {
	for ($j = 2; $j <= 14; $j++) {
		$kartya[] = ["szin" => $i, "szam" => $j];
	}
}

for ($i = 0; $i < rand(50, 100); $i++) {

	$rand = rand(0, 51);
	$rand2 = rand(0, 51);

	$temp = $kartya[$rand];
	$kartya[$rand] = $kartya[$rand2];
	$kartya[$rand2] = $temp;
}

sort($kartya);

//$kartya[1] = ["szin" => 1, "szam" => 2];
//if (doubleCard($kartya)) {
//	echo "Pakli jo";
//} else {
//	echo "Pakli rossz";
//}

doubleCard($kartya);
//if (checkingForSameCards($kartya)) {
//	echo "fasza";
//} else {
//	echo "nem";
//}

/* Kiprobálom Strázsa technikát..
  Végig megyek szamokon és váltok szint */
doubleCard($kartya);

function doubleCard($kartya, $i = 0) {
	
	if ($kartya[$i] == $kartya[$i + 1]) {
		
		return doubleCard($kartya, $i + 1) . "buzi, ";
	}
//	
//	if($i > count($kartya)){
//		return false;
//	}
//	
//	return true;
}

function sentinelSearch($kartya, $checkValue) {
	$itsIn = false;
	array_push($kartya, $checkValue);
	$i = 0;
	while ($kartya[$i] != $checkValue) {
		$i++;
	}
	if ($i != count($kartya) - 1) {
		return $itsIn = true;
	}

	return $itsIn;
}
