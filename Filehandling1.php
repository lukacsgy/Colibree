<?php

$target = fopen("Text.txt", "w");
$txt = "This is the content of the file test.txt.";

fwrite($target, $txt);
echo $txt;
fclose($target);