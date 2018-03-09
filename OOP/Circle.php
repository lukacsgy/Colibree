<?php

$theRing = new Circle(10);
$sonic = new Circle(10);

echo $theRing->getRadius() . "\n";
echo $theRing->getCircumference() . "\n";
echo $theRing->getArea() . "\n";
echo $theRing->toString(). "\n";
echo $theRing->add($sonic)->getArea();
 

class Circle {

	/**
	 * @var float
	 */
	private $radius;

	public function __construct($r) {
		$this->radius = $r;
	}

	/**
	 * @return float
	 */
	public function getRadius() {
		return $this->radius;
	}

	/**
	 * @return float
	 */
	public function getCircumference() {
		$diameter = $this->radius * 2;
		return $diameter * pi();
	}

	/**
	 * @return float
	 */
	public function getArea() {
		return pow($this->radius, 2) * pi();
	}

	/**
	 * @return string
	 */
	public function toString() {
		return "A kor sugara: " . $this->radius;
	}

	/**
	 * @return Circle
	 */
	public function add(Circle $circle) {

		return new Circle(sqrt(pow($this->getRadius(),2) +
						pow($circle->getRadius(),2)));
	}

}
