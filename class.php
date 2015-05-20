
<?php

//
//  class.php
//
//  Created by Miyake Atsushi on 2015-05-20.
//  Copyright (c) 2015 PHP Lecture. All rights reserved.
//

class Student {

	private $name;
	private $number;

	public function __construct($name, $number) {
		$this->name = $name;
		$this->number = $number;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setNumber($number) {
		$this->number = $number;
	}

	public function GetNumber() {
		return $this->number;
	}

	public function display() {
		echo "[名前 ".$this->name."][番号 ".$this->number."]</br>";
	}

	//実際にgetterやsetterを用意する時、
	//他クラスがその値を使って行うことは、自クラスの責務ではないかを考えて設計する
}

?>