<?php

$max = 1;

while (($current = (int) readline("Adjon meg egy pozitív egész számot: ")) > 0) {
	if ($current > $max) {
		$possiblePrim = true;
		$div = 2;

		while ($possiblePrim && $div < $current) {
			if ($current % $div == 0) {
				$possiblePrim = false;
			}
			$div++;
		}

		if ($possiblePrim) {
			$max = $current;
		}
	}
}

echo "\nA Legnagyobb prim szam :" . $max;

//
//{
//
//	if ($current >= 0) {
//		if ($current > $max) {
//
//			$prim = false;
//			$div = 2;
//			while (($div < $current) && $prim != true) {
//				if ($current % $div == 0) {
//					$prim = true;
//				}
//				$div++;
//			}
//
//			if (!$prim) {
//				$max = $current;
//			}
//		}
//	} else {
//		echo "Kileptel";
//		break;
//	}
//}
//
//echo "\nA Legnagyobb prim szam :" . $max;
