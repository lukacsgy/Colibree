<?php

$text = readline("Add meg a szöveget: ");
$deletingcharts = readline("Torolni kivant parameterek: ");

echo "A modositott szoveg\t" . deleteStrings($text, $deletingcharts);


function deleteStrings($text, $deletingcharts) {
	for ($i = 0; $i < strlen($text); $i++) {
		for ($j = 0; $j < strlen($deletingcharts); $j++) {
			if ($text[$i] == $deletingcharts[$j]) {
				$text = str_replace($text[$i], "", $text);
			}
		}
	}
	return $text;
}
