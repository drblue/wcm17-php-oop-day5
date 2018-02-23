<?php

class Vehicle {
	public $type;
	public $manufacturer;
	public $model;
	public $wheels;
	public $floats = false;

	function __construct($manufacturer, $model) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
	}
}
