<?php

require("includes/Vehicle.php");
require("includes/Boat.php");
require("includes/Car.php");

$vehicles = [];

$car = new Car("Nissan", "Qashqai");
$boat = new Boat("Formula", "430");

array_push($vehicles, $car, $boat);

foreach ($vehicles as $vehicle) {
	echo "<p>";
	echo "Hello, I am a {$vehicle->type}!<br>";
	echo "Manufacturer: {$vehicle->manufacturer}<br>";
	echo "Model: {$vehicle->model}<br>";
	if ($vehicle->wheels) {
		echo "I have {$vehicle->wheels} wheels.<br>";
	} else {
		echo "I don't have any wheels.<br>";
	}
	if ($vehicle->floats) {
		echo "I can float.<br>";
	} else {
		echo "I can't float, so don't use me in water.<br>";
	}
	echo "</p>";
}
