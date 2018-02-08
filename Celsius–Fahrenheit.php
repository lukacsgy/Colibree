<?php

    $c = (float) readline("Add meg a hőmérsékletett(Celsiusban): ");
    
    $f = $c * 9 / 5 + 32;
    
    readline("Hömérséklet Fahrenheit-ben: $f °F");
    
    $f = (float) readline("Add meg a hőmérsékletett(Fahrenheit): ");
    
    $c = ($f - 32) * 5 / 9;
    
    readline("Hömérséklet Fahrenheit-ben: $c °C");
