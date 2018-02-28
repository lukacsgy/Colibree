<?php

/*
  Írj függvényt, amely átvesz egy double elemekből álló tömböt, és visszaadja a medián elemét!
  A medián az az elem, amelynél annyi kisebb van a tömbben, ahány nagyobb. Felteheti,
  hogy a tömbben páratlan sok elem van, és nincs két egyforma.

  Tetszőlegesen használhatsz segédfüggvényeket, memóriát, de az eredeti tömböt nem változtathatod meg!
 */

$array = [];
$array = randFloatArrayGenerator($array, $arraySize);

function randFloatArrayGenerator($array, $arraySize) {
	for ($i = 0; $i < $arraySize; $i++) {
		$array[$i] = rand() / mt_getrandmax();
	}
	return $array;
}
