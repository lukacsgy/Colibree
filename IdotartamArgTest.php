<?php


assertEquals(`php IdotartamArg.php 1 5 0 1 10 0` ,
			"A két időpont közötti különbség(masodpercben): 300");

function assertEquals($a, $b){
	if ($a == $b){
echo "OK!";
	}
	else{
		echo "FAIL!";
	}
}