<?php

    $o1 = (int) readline("Add meg az Kezdo Orat: ");
    $p1 = (int) readline("Add meg az Kezdo Perct: ");
    $m1 = (int) readline("Add meg az Kezdo Masodperc: ");
    
    $o2 = (int) readline("Add meg az Masodik Orat: ");
    $p2 = (int) readline("Add meg az Masodik Perct: ");
    $m2 = (int) readline("Add meg az Masodik Masodperc: ");
    
    if ($o1 > $o2){
        echo "A kezd ora nagyobb mint a masodik";
    }
    else{
        $osszeg1 = $o1 * 3600 + $p1 *  60 + $m1;
        $osszeg2 = $o2 * 3600 + $p2 *  60 + $m2;
        $kulombseg = $osszeg2 - $osszeg1;
        echo "A két időpont közötti külömbésg(masodpercben): . $kulombseg";
    }