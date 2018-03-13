<?php
		
echo "Test Filehandling12 Output at Console\t\t";

	$out = `php Filehandling12.php test1.txt Text.txt uj.txt`;

	assertEquals($out, "The two files merged into uj.txt file successfully..!!");
	
	unlink("uj.txt");
	
echo "\n";


echo "Test Filehandling12 Lines\t\t\t";
	
	$out = `php Filehandling12.php test1.txt Text.txt uj.txt`;

	$fp = fopen("uj.txt", "r");

	$linePieces = 0;
		while (($line = fgets($fp, 4096)) !== false) {
			$linePieces++;
		}
	
	fclose($fp);
	
	assertEquals($linePieces, 4);	
	
	unlink("uj.txt");
	
echo "\n";


echo "Test Filehandling12 New File Content";
	
	$out = `php Filehandling12.php test1.txt Text.txt uj.txt`;
	
	$fp = fopen("uj.txt", "w");
	
	while (($line = fgets($fp, 4096)) !== false) {
		$text += $line;
	}

function assertEquals($a, $b){
	if ($a == $b){
		echo "OK!";
	}
	else{
		echo "FAIL!";
	}
}