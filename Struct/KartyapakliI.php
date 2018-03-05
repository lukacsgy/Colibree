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


if (doubleCard($kartya)) {
	echo "Pakliban Van Dupla Lap";
} else {
	echo "A Pakli-ban Minden lap megvan 1x-er";
}

/* Csak rendezet paklinal mukodik */

function doubleCard($kartya, $i = 0) {

	if ($i < count($kartya) - 1) {
		if ($kartya[$i] != $kartya[$i + 1]) {
			return doubleCard($kartya, $i + 1);
		}
		else{
			return true;
		}
	}
	return false;
}

/* Dani hiányos keresése */


for ($k = 0; $k < count($kartya); $k += 13) {
    for ($i = $k; $i < $k + 12; $i++) {
        if ($kartya[$i]["szin"] == $kartya[$i + 1]["szin"]) {
            continue;
        } else {
            die("es a pakli HIÁNYOS.\n");
        }
        if ($kartya[$i]["szam"] == $kartya[$i + 1]["szam"] - 1) {
            continue;
        } else {
            die("es a pakli HIÁNYOS.\n");
        }
    }
}

echo " es A Pakli Nem Hianyos.\n"; 