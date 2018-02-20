<?php

    /*$argv[1] = (int) readline("Add meg az Kezdo Ora-t: ");
    $argv[2] = (int) readline("Add meg az Kezdo Perc-et: ");
    $argv[3] = (int) readline("Add meg az Kezdo Masodperc-et: ");
    
    $argv[4] = (int) readline("Add meg az Masodik Ora-t: ");
    $argv[5] = (int) readline("Add meg az Masodik Perc-et: ");
    $argv[6] = (int) readline("Add meg az Masodik Masodperc-et: ");*/
    
    if ($argv[1] > $argv[4]){
        echo "A kezdo ora nagyobb mint a masodik";
    }
    else{
        $osszeg1 = $argv[1] * 3600 + $argv[2] *  60 + $argv[3];
        $osszeg2 = $argv[4] * 3600 + $argv[5] *  60 + $argv[6];
        
        echo "A két időpont közötti különbség(masodpercben): " . ($osszeg2 - $osszeg1);
    }
	