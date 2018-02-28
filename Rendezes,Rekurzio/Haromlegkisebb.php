<?php

/*
  Írjunk programot, amelyik egy tömbből kiírja a három legkisebb elemet.
 */

$array = [9, 4, 4, 6, 9, 1, 3, 9, 7, 4];
$array = sortToLowestValues($array, 3);

echo " A harom legkisebb elem: ";

for ($i = 0; $i < 3; $i++) {
	echo $array[$i] . ", ";
}

function sortToLowestValues($array, $howManyValue) {

	for ($i = 0; $i < $howManyValue; $i++) {
		$minIndex = $i;
		for ($j = $i + 1; $j < count($array); $j++) {
			if ($array[$minIndex] > $array[$j]) {
				$minIndex = $j;
			}
		}

		if ($minIndex != $i) {
			$temp = $array[$minIndex];
			$array[$minIndex] = $array[$i];
			$array[$i] = $temp;
		}
	}
	return $array;
}
