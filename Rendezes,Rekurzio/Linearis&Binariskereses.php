<?php

/*
  Töltsünk fel egy nagy tömböt véletlenszámokkal. Rendezzük a tömböt.
  Válasszunk egy elemet a tömb értékkészletéből, és keressük meg,
  hogy a rendezett tömb mely tartományában szerepel (hányadiktól hányadik indexig).
  Tegyük ezt a keresést a lehető leggyorsabban!
 */

$searchingValue = readline("Add meg a keresett erteket: ");

$array = [];
$array = selectionSort(generateRandArray($array, 100, 0, 10));

echo "A kereset ertek a tomben  a "
 . searchTheStartingIndex($array, $searchingValue)
 . " es " . searchTheEndingIndex($array, $searchingValue)
 . " index-en talalhato";


/* Generalok egy random tombot */

function generateRandArray($array, $size, $randStart, $randEnd) {
	for ($i = 0; $i < $size; $i++) {
		$array[$i] = random_int($randStart, $randEnd);
	}

	return $array;
}

/* Közvetlen Kivalasztás melett döntöttem mert tomb random es nagy es szerintem hatékonyabb */

function selectionSort($array) {

	for ($i = 0; $i < count($array) - 1; $i++) {
		$minindex = $i;

		for ($j = $i + 1; $j < count($array); $j++) {
			if ($array[$minindex] > $array[$j]) {
				$minindex = $j;
			}
		}

		if ($minindex != $i) {
			$temp = $array[$minindex];
			$array[$minindex] = $array[$i];
			$array[$i] = $temp;
		}
	}

	return $array;
}

/* Binaris keresest alkalmazok hogy megkeressük a kereset "érétket" */

function searchTheStartingIndex($array, $searchingValue) {

	$min = 0;
	$max = count($array) - 1;
	$middle = ($min + $max) / 2;

	while ($min <= $max) {
		if ($array[$middle] < $searchingValue) {
			$min = $middle + 1;
		} else {
			$max = $middle - 1;
		}
		$middle = ($min + $max) / 2;
	}

	if ($array[$middle] != $searchingValue) {
		$middle ++;
	}
	return floor($middle);
}

function searchTheEndingIndex($array, $searchingValue) {
	$min = 0;
	$max = count($array) - 1;
	$middle = ($min + $max) / 2;

	while ($min <= $max) {
		if ($array[$middle] > $searchingValue) {
			$max = $middle - 1;
		} else {
			$min = $middle + 1;
		}
		$middle = ($min + $max) / 2;
	}

	if ($array[$middle] != $searchingValue) {
		$middle --;
	}
	return floor($middle);
}
