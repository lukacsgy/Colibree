<?php

    $c = (float) readline("Add meg a hőmérsékletett(Celsiusban): ");
    
    $f = $c * 9 / 5 + 32;
    
    echo ("Hömérséklet Fahrenheit-ben: $f °F\n");
    
    $f = (float) readline("Add meg a hőmérsékletett(Fahrenheit): ");
    
    $c = ($f - 32) * 5 / 9;
    
    echo ("Hömérséklet Fahrenheit-ben: $c °C\n");
