<?php

$szazas = (int) readline("Hány db 100-Ft.-os van: ");
$ketszaz = (int) readline("Hány db 200-Ft.-os van: ");
$otszaz = (int) readline("Hány db 500-Ft.-os van:");

$osszeg =$szazas * 100 + $ketszaz * 200 + $otszaz * 500;

echo "A Kasszabán összesen: $osszeg";
