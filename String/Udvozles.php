<?php

$name = null;

for ($i = 1; $i < count($argv); $i++) {
	$name .= $argv[$i] . " ";
}

echo "Udvozlegy " . ucwords($name);
