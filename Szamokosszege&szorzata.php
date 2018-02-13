<?php

$szum = 0;
$product = 1;
while(($number = readline("Add meg a szamokat: ")) != "0"){
	$szum += $number;
	$product *= $number;
}

echo "A szamok osszege: " . $szum . "\nA szamok szorzata: " . $product;

