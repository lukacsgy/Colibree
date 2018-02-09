<?php

    $o1 = (int) readline("Add meg az Kezdo Ora-t: ");
    $p1 = (int) readline("Add meg az Kezdo Perc-et: ");
    $m1 = (int) readline("Add meg az Kezdo Masodperc-et: ");
    
    $o2 = (int) readline("Add meg az Masodik Ora-t: ");
    $p2 = (int) readline("Add meg az Masodik Perc-et: ");
    $m2 = (int) readline("Add meg az Masodik Masodperc-et: ");
    
    if ($o1 > $o2){
        echo "A kezdo ora nagyobb mint a masodik";
    }
    else{
        $osszeg1 = $o1 * 3600 + $p1 *  60 + $m1;
        $osszeg2 = $o2 * 3600 + $p2 *  60 + $m2;
        
        echo "A két időpont közötti különbség(masodpercben): " . ($osszeg2 - $osszeg1);
    }