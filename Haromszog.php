<?php

	$Ax = "0";
	$Ay = "0";
	$Bx = "10";
	$By = "0";
	$Cx = "0";
	$Cy = "10";

	/* Oldalak kiszámitása */

	$abX = (int) $Ax - $Bx;
	$abY = (int) $Ay - $By;
	$bcX = (int) $Bx - $Cx;
	$bcY = (int) $By - $Cy;
	$caX = (int) $Cx - $Ax;
	$caY = (int) $Cy - $Ay;

	$sidaA = (float) sqrt(pow($abX, 2) + pow($abY, 2));
	$sideB = (float) sqrt(pow($bcX, 2) + pow($bcY, 2));
	$sideC = (float) sqrt(pow($caX, 2) + pow($caY, 2));

	$K = $sideA + $sideB + $sideC;

