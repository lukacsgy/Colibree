<?php

/*
  A buborékrendezés egymás melletti elemeket cserél sorban. Egy sor csere hatására a legnagyobb elem a tömb végére vándorol;
 * a következő körben azt már nem kell vizsgálni, hanem a tömb eggyel rövidebb részletét csak.
 *  Ezt kell folytatni addig, amíg el nem fogy a tömb.

  A buborékrendezés hatékonysága javítható azzal, ha megjegyezzük, hogy a vizsgált tömbrészletnél volt-e csere.
 *  Ha nem volt, akkor minden pár jó sorrendben van. 
 * Akkor a rövidebb részt vizsgálva is ugyanerre az eredményre jutnánk, vagyis a külső ciklust már nem kell folytatni.
 *  Implementáld ezt a változatot!
 */

$tomb = [10, 6, 5, 8];


for ($i = count($tomb) - 1; $i > 0; $i--) {
	$csere = false;
	for ($j = 0; $j < $i; $j++) {
		if ($tomb[$j] > $tomb[$j + 1]) {
			$temp = $tomb[$j];
			$tomb[$j] = $tomb[$j + 1];
			$tomb[$j + 1] = $temp;
			$csere = true;
		}
	}
	
	if (!$csere) {
		$i = 0;
	}
	
	print_r($tomb);
}