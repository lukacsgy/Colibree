<?php

  echo "Test name argument required:\t\t";

    $out = exec("php greeting.php", $out, $statusCode);
 
    if ($statusCode == 1 && $out == "Please specify name(s)!") {
      echo "OK";
    }
    else {
      echo "FAIL";
    }

  echo "\n";

  echo "Test greeting to one from arg1:\t\t";

    if (`php greeting.php X` == "Hello Mr X.\n") {
      echo "OK";
    }
    else {
      echo "FAIL";
    }

  echo "\n";

  echo "Test greeting to all from args:\t\t";

    if (`php greeting.php X Y Z` == "Hello Mr X.\nHello Mr Y.\nHello Mr Z.\n") {
      echo "OK";
    }
    else {
      echo "FAIL";
    }

  echo "\n";  

  echo "Test greeting to all names from STDIN:\t";
  
    $fp = fopen("everybody", "w");
    fwrite($fp, "test line1\n");
    fwrite($fp, "test line2\n");
    fwrite($fp, " Mi a fasz?\n");
	fwrite($fp, "test line4\n");
	fwrite($fp,"");
    fclose($fp);

    $out = `php greeting.php -- < everybody`;

    if ($out == "Hello Mr Doe.\nHello Mr Smith.\nHello Mr Anderson.\n") {
      echo "OK";
    }
    else {
      echo "FAIL" .$out;
    }

    unlink("everybody");

  echo "\n";

