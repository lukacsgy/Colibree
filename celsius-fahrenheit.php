<?php

    $c = (float) readline("Add meg a hőmérsékletet(Celsiusban): ");
    
    $f = $c * 9 / 5 + 32;
    
    echo ("Hömérséklet Fahrenheit-ben: $f °F\n");
    
    $f = (float) readline("Add meg a hőmérsékletet(Fahrenheit): ");
    
    $c = ($f - 32) * 5 / 9;
    
    echo ("Hőmérséklet Fahrenheit-ben: $c °C\n");
