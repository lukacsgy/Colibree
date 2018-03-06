<?php

$fp = fopen("shipment.txt", "r");

$shipments = [];


while(($shipment = readShipment($fp)) != false){
	$shipments[] = $shipment;
}

for($i = 0; $i < count($shipments); $i++){
	
	echo trim($shipments[$i]["packName"]) . " -> " . trim($shipments[$i]["lognName"]) . ' w\ ' . trim($shipments[$i]["plateNumber"]) . "\n"
	. "@" . trim($shipments[$i]["packName"]) . date(" Y.m.d H:i", strtotime($shipments[$i]["packDate"])) . " - "
    . date("Y.m.d H:i", strtotime($shipments[$i]["packDate"]) + $shipments[$i]["packDuration"]) . "\n"
	. "@" . trim($shipments[$i]["lognName"]) . date(" Y.m.d H:i", strtotime($shipments[$i]["lognDate"])) . " - "
	. date("Y.m.d H:i", strtotime($shipments[$i]["lognDate"]) + $shipments[$i]["lognDuration"]) . "\n\n";
}


function readShipment($fp) {
	$packname = fgets($fp);
	if($packname === false){
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

//function transportOut($index) {
//	$shipments = [
//		"packName" => $index[0],
//		"packDate" => $index[3],
//		"packTime" => (int) $index[1] * 60,
//		"lognName" => $index[2],
//		"lognDate" => $index[4],
//		"lognTime" => (int) $index[5] * 60,
//		"plateNumber" => $index[6]
//	];
//
//	echo trim($shipments["packName"]) . " -> " . trim($shipments["lognName"]) . " w\\ " . trim($shipments["plateNumber"]) . "\n"
//	. "@" . trim($shipments["packName"]) . date(" Y.m.d H:i", strtotime($shipments["packDate"])) . " - "
//	. date("Y.m.d H:i", strtotime($shipments["packDate"]) + $shipments["packTime"]) . "\n"
//	. "@" . trim($shipments["lognName"]) . date(" Y.m.d H:i", strtotime($shipments["lognDate"])) . " - "
//	. date("Y.m.d H:i", strtotime($shipments["lognDate"]) + $shipments["lognTime"]) . "\n\n";
//}
