<?php

echo "Egy Szallitast Rogzitunk!. Add Meg A Kert Adatokat\n\n";

$packName = readline("Add Meg A Felrakodas Helyet(Ceg nev):\t ");
$lodgName = readline("Add Meg A Lerakodas Helyet(Ceg nev): \t");

$packDate = readline("Add meg Felpakolas Idopontjat(Év Honap Nap Ora:Perc) Szam Formatumban:\t");
$packTime = readline("Hany Percig Tart Majd A Felpakolas(percben):\t ");

$lodgDate = readline("Add meg Lerakodas Idopontjat(Év-Honap-Nap Ora:Perc) Szam Formatumban:\t");
$lodgTime = readline("Hany Percig Tart Majd A Lerakodas(percben):\t ");

$licensePlateNumber = readline("Add Meg A Kamion Rendszamat: \t");

$fp = fopen("shipment.txt", "a+");

fwrite($fp, $packName . "\n");
fwrite($fp, $lodgName . "\n");

fwrite($fp, $packDate . "\n");
fwrite($fp, $packTime . "\n");

fwrite($fp, $lodgDate . "\n");
fwrite($fp, $lodgTime . "\n");

fwrite($fp, $licensePlateNumber. "\n");

fclose($fp);


