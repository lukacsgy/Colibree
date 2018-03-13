<?php

$array = [3, 2, 1, 4, 2, 1, 1, 5];
$array2 = [3, 2, 1, 4, 5];

$proba = new Set($array);
$halmaz = new Set($array2);

print_r($halmaz->add(10));

print_r($proba);
print_r($halmaz);

print_r($proba->union($halmaz));
print_r($proba->intersection($halmaz));
print_r($proba->substract($halmaz));

if ($proba->isEquals($halmaz)) {
	echo "2 halmaz ugyanaz!";
} else {
	echo "A 2 halmaz kulonbozo!";
}

$set1 = new Set([]);
$set1->add(3);
$set1->add(3);
$set1->add(3);
$set1->add(3);

print_r($set1);

class Set {

	/**
	 * @var array
	 */
	private $elements = [];

	public function __construct($elements) {
		foreach ($elements as $element) {
			$this->add($element);
		}
	}

		/**
     * @return Set
     */
	public function union(Set $s) {
		$new = [];
		foreach ($this->elements as $values) {
			$new[] = $values;
		}
		foreach ($s->elements as $values) {
			$new[] = $values;
		}
		return new Set($new);
	}

	/**
     * @return Set
     */
	public function intersection(Set $s) {
		$new = [];
		for ($i = 0; $i < count($this->elements); $i++) {
			if ($s->isElement($this->elements[$i])) {
				$new[] = $this->elements[$i];
			}
		}
		return new Set($new);
	}

	/**
     * @return Set
     */
	public function substract(Set $s) {
		$new = [];
		foreach ($this->elements as $element) {
			if (!$s->isElement($element)) {
				$new[] = $element;
			}
		}
		return new Set($new);
	}

	/**
     * @return bool
     */
	public function isElement($element) {
		foreach ($this->elements as $value) {
			if ($value === $element) {
				return true;
			}
		}
		return false;
	}

	/**
     * @return bool
     */
	public function isEquals(Set $s) {
		if (count($this->elements) != count($s->elements)) {
			return false;
		}

		foreach ($this->elements as $value) {
			if (!$s->isElement($value)) {
				return false;
			}
		}

		return true;
	}

	
	public function add($elements) {
		if (!$this->isElement($elements)) {
			$this->elements[] = $elements;
		}
	}

}
