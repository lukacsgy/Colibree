<?php

/*
  Lehessen listázni azokat szállításokat,
  amiknek az egyik végpontja egy felhasználó által nevesített végpont.
  A lista csak a végponton szükséges információkat tartalmazza.
  Továbbiak a csatolt tesztben.
 */

$search = trim($argv[1]);

$fp = fopen("shipment.txt", "r");

$shipments = [];

while (($shipment = readShipment($fp)) != false) {
	$shipments[] = $shipment;
}

for ($i = 0; $i < count($shipments); $i++) {
	if ($search == trim($shipments[$i]["packName"])) {
		echo "OUT > " . trim($shipments[$i]["lognName"]) . " @"
		. date("Y.m.d H:i", strtotime($shipments[$i]["packDate"])) . " - "
		. date("Y.m.d H:i", strtotime($shipments[$i]["packDate"]) + $shipments[$i]["packDuration"])
		. ' w\ ' . trim($shipments[$i]["plateNumber"]) . "\n";
	}
	
	if ($search == trim($shipments[$i]["lognName"])) {
		echo "IN < " . trim($shipments[$i]["packName"]) . " @"
		. date("Y.m.d H:i", strtotime($shipments[$i]["lognDate"])) . " - "
		. date("Y.m.d H:i", strtotime($shipments[$i]["lognDate"]) + $shipments[$i]["lognDuration"])
		. ' w\ ' . trim($shipments[$i]["plateNumber"]) . "\n";
	}
	
}

function readShipment($fp) {
	$packname = fgets($fp);
	if ($packname === false) {
		return false;
	}

	return [
		"packName" => $packname,
		"packDate" => fgets($fp),
		"packDuration" => (int) fgets($fp) * 60,
		"lognName" => fgets($fp),
		"lognDate" => fgets($fp),
		"lognDuration" => (int) fgets($fp) * 60,
		"plateNumber" => fgets($fp)
	];
}
