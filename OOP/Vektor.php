<?php

/*
  Az osztály valósítsa meg a összeadás, a skaláris szorzás, 
  és az ellentett vektor műveleteket
*/



$victor = new Vektor();
$victor->letrehozas(0, 1, 0, 5);
$vektor[] = $victor;

$flektor = new Vektor();
$flektor->letrehozas(3, 1, 3, 5);
$vektor[] = $flektor;

$sum = new Vektor();
$sum->osszeadas($victor, $flektor);

$vektor[2] = $sum;

print_r($vektor);



class Vektor {

	private $xStart;
	private $yStart;
	private $xEnd;
	private $yEnd;

	public function letrehozas($x1, $y1, $x2, $y2) {
	
		$this->xStart = $x1;
		$this->yStart = $y1;
		$this->xEnd = $x2;
		$this->yEnd = $y2;
			
	}

	public function osszeadas($vektor1, $vektor2){
		
		$xHely1 = $vektor1[2] - $vektor[0];
		$yHely1 = $vektor1[3] - $vektor[1];
		
		$xHely2 = $vektor2[2] - $vektor[0];
		$yHely2 = $vektor2[3] - $vektor[1];
		
		$this->xStart = 0;
		$this->yStart = 0;
		$this->xEnd = $xHely1 + $xHely2;
		$this->yEnd = $yHely1 + $yHely2;
 		
		
	}

	public function skalarisSzorzas($vektor1, $vektro2) {
		
	}

	public function ellentettVektor() {
		
	}

}
