<?php

/*
  Az osztály valósítsa meg a összeadás, a skaláris szorzás, és az ellentett vektor műveleteket
 */



$victor = new Vektor();
$victor->letrehozas(0, 1, 0, 5);
$vektor[] = $victor;
$victor->letrehozas(3, 1, 3, 5);
$vektor[] = $victor;
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

	public function osszeadas($vektor1, $vektor2) {
		
	}

	public function skalarisSzorzas($vektor1, $vektro2) {
		
	}

	public function ellentettVektor() {
		
	}

}
