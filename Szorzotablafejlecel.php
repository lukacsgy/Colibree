<?php

$tablesize= readline("Add meg az N szamot(max 16-ig): ");

echo "  |";	

/*fejléc*/
for($i = 1; $i <= $tablesize; $i++){
	echo "  ".$i;
}
echo "\n";

/*vezér csik*/
echo "--+";
for($i = 1; $i <= $tablesize; $i++){
	echo "---";
}

/*szorzo tabla*/

for($j = 1; $j < $tablesize; $j++ ){
	
}