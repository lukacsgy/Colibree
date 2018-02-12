<?php

$fg = fopen("Text.txt", "r");

echo fgets($fg);
fclose($fg);
