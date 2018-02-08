<?php

    $Ax = "-2";
    $Ay = "-1";
    $Bx = "9";
    $By = "3";
    $Cx = "-3";
    $Cy = "6";
 
   $bcX = (int) $Bx - $Cx;
   $bcY = (int) $By - $Cy;
   
   $BC = (float)sqrt(pow($bcX, 2) + pow($bcY, 2));
    echo $BC;
    