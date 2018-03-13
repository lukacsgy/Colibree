<?php

/*
  Valósítsd meg a Stack (verem) adatszerkezetet objektum orientáltan,
  osztályként!
 */

class Stack {

	private $array = [];

	public function push($data) {
		$this->array[] = $data;
	}

	public function pop() {
		return array_pop($this->array);
	}

}

$teszt = new Stack();

$teszt->push(10);
$teszt->push(20);
$teszt->push(30);

echo $teszt->pop();
echo $teszt->pop();
echo $teszt->pop();

