<?php

$textString = readline("Adj meg egy mondatott: ");

$individulCharts = true;
for ($i = 0; $i < strlen($textString); $i++) {
	if (!charAsChar($textString, $i)) {
		echo " $textString[$i],";
	} else {
		$individulCharts = false;
	}
}

if ($individulCharts) {
	echo "\n\tNincs Benne Ismetloddo Karakter!";
}

function charAsChar($textString, $i) {
	$sameChart = false;
	$j = 0;
	while ($j < strlen($textString) && $sameChart != true) {
		if ($j != $i) {
			if ($textString[$i] === $textString[$j]) {
				$sameChart = true;
			}
		}
		$j++;
	}
	return $sameChart;
}
