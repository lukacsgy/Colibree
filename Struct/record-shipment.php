<?php

$packName = readline("Add Meg A Felrakodas Helyet(Ceg nev):\t ");
$packDate = readline("Add meg Felpakolas Idopontjat(Év Honap Nap Ora:Perc) Szam Formatumban:\t");
$packDuration = readline("Hany Percig Tart Majd A Felpakolas(percben):\t ");

emptyPlace("shipment.txt", $packDate, $packDuration);

$lodgName = readline("Add Meg A Lerakodas Helyet(Ceg nev): \t");
$lodgDate = readline("Add meg Lerakodas Idopontjat(Év-Honap-Nap Ora:Perc) Szam Formatumban:\t");
$lodgDuration = readline("Hany Percig Tart Majd A Lerakodas(percben):\t ");

emptyPlace("shipment.txt", $lodgDate, $lodgDuration);

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




function emptyPlace($file, $packDate, $packDuration) {
	$checkingArray = file("shipment.txt");

	for ($i = 0; $i < count($checkingArray); $i++) {
		$date = $checkingArray[$i];

		if (dateConverter($date) === dateConverter($packDate)) {
			$duration = $checkingArray[$i + 1];

			if (startTime($packDate) >= startTime($date) ||
					endTime($packDate, $packDuration) >= startTime($date) ||
					(startTime($packDate) < startTime($date)) &&
					(endTime($packDate, $packDuration) >= startTime($date))) {
				
				echo "\n\t\tAz napra mar van pakolas! $date";
			}
		}
	}

	return true;
}

function dateConverter($date) {
	return date("Y-m-d", strtotime($date));
}

function startTime($date) {
	return date("H:i", strtotime($date));
}

function endTime($date, $duration) {
	return date("H:i", strtotime($date) + (intval($duration) * 60));
}
