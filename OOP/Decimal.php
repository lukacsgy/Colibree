<?php

$number1 = new Rational(4, 6);
$number2 = new Rational(2, 3);

echo $number1->add($number2)->toFloat() . "\n";
echo $number1->sub($number2)->toFloat() . "\n";

if($number1->isEquals($number2)){
	echo "Megyegyeznek";
}
else{
	echo "Nem Egyeznek Meg";
}

class Rational {

	/**
	 * @var int
	 */
	private $num;

	/**
	 * @var int
	 */
	private $den;


	public function __construct($szamlalo, $nevezo) {
		$this->num = $szamlalo;
		$this->den = $nevezo;
	}

	/**
     * @return Rational
     */
	public function add(Rational $rational) {
		return new Rational(($this->num * $rational->den) +
				($rational->num * $this->den)
				, $this->den * $rational->den);
	}

	/**
     * @return Rational
     */
	public function sub(Rational $rational) {
		return new Rational(($this->num * $rational->den) -
				($rational->num * $this->den)
				, $this->den * $rational->den);
	}

	/**
     * @return Rational
     */
	public function multiplying(Rational $rational) {
		return new Rational($this->num * $rational->num
				, $this->den * $rational->den);
	}
	
	/**
     * @return Rational
     */
	public function division(Rational $rational) {
		return new Rational($this->num * $rational->den
				, $this->den * $rational->num);
	}

	public function toFloat() {

		return $this->num / $this->den;
	}

	public function toStirng() {
		return $this->num . "/" . $this->den;
	}
	
	/**
     * @return bool
     */
	public function isEquals(Rational $rational) {
		if ($this->toFloat() == $rational->toFloat()) {
			return true;
		} else {
			return false;
		}
	}

//function sameNumerator(Rational $rational) {
//	if ($this->numerator >= $$rational->numerator) {
//		$big = $this->numerator;
//			$small = $rational->numerator;
//			if ($big % $small == 0) {
//			return $big / $small;
//			} else {
//				return $big * $small;
//			}
//		}
//		else{
//			$small = $this->numerator;
//			$big = $rational->numerator;
//			if ($big % $small == 0) {
//				return $big / $small;
//			} else {
//				return $big * $small;
//			}
//		}
//	}
}
