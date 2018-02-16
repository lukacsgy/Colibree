<?php

$array = [25, 69, 54, 8, 77, 6, 29, 10, 3, 98];

print_r($array);

for($i = 0; $i < 3; $i++){
	array_push($array, $array[0]);
	array_shift($array);
}

print_r($array);