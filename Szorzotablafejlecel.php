<?php

$tablesize= readline("Add meg az N szamot(max 16-ig): ");

echo "   |";	

/*fejléc*/
for($i = 1; $i <= $tablesize; $i++){
	echo sprintf("%3s ", $i);
}
echo "\n";

/*vezér csik*/
echo "---+";
for($i = 1; $i < $tablesize; $i++){
	echo ("----");
}

echo "---\n";

/*szorzo tabla*/
for($i = 1; $i <= $tablesize; $i++){
	echo sprintf("%3s|", $i);
	for($j = 1; $j <= $tablesize; $j++){
		echo sprintf("%3s ", $j * $i);
	}
	echo ("\n");
}

