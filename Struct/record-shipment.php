<?php

$packName = readline("Add Meg A Felrakodas Helyet(Ceg nev):\t ");
$packDate = readline("Add meg Felpakolas Idopontjat(Év Honap Nap Ora:Perc) Szam Formatumban:\t");

if (!emptyPlace("shipment.txt", $packName, $packDate)) {
	echo "Az Idopont foglalt. Kerjuk Adjon Meg Új Idopontott";
} else {

	$packDuration = readline("Hany Percig Tart Majd A Felpakolas(percben):\t ");

	$lodgName = readline("Add Meg A Lerakodas Helyet(Ceg nev): \t");
	$lodgDate = readline("Add meg Lerakodas Idopontjat(Év-Honap-Nap Ora:Perc) Szam Formatumban:\t");

	if (!emptyPlace("shipment.txt", $lodgName, $lodgDate)) {
		echo "Az Idopont foglalt. Kerjuk Adjon Meg Új Idopontott";
	} else {

		$lodgDuration = readline("Hany Percig Tart Majd A Lerakodas(percben):\t ");

		$licensePlateNumber = readline("Add Meg A Kamion Rendszamat: \t");

		$fp = fopen("shipment.txt", "a+");

		file_put_contents("shipment.txt", $packName . "\n", FILE_APPEND);
		file_put_contents("shipment.txt", $packDate . "\n", FILE_APPEND);
		file_put_contents("shipment.txt", $packDuration . "\n", FILE_APPEND);

		file_put_contents("shipment.txt", $lodgName . "\n", FILE_APPEND);
		file_put_contents("shipment.txt", $lodgDate . "\n", FILE_APPEND);
		file_put_contents("shipment.txt", $lodgDuration . "\n", FILE_APPEND);

		file_put_contents("shipment.txt", $licensePlateNumber . "\n", FILE_APPEND);

		fclose($fp);
	}
}

function emptyPlace($file, $placeName, $packDate) {
	$checkingArray = file("shipment.txt");

	for ($i = 0; $i < count($checkingArray); $i++) {
		if (trim($checkingArray[$i]) === $placeName) {
				if(trim($checkingArray[$i + 1]) === $packDate) {
				return false;
			}
		}
	}
	return true;
}

function filehandling($array){
	
}