<?php

$sentence = readline("Irj be egy mondatott: \n");

echo "\t" . substr_count($sentence, " ") . " db szokoz van a mondatban!\n"
 . "\tA mondat szokozok nelkul: \t" . str_replace(" ", "", $sentence);


