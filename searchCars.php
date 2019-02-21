<?php
	//Connect to the database
	require 'conn.php';
	//The car class
	include 'car.php';

	//The search param
	$param = $_POST['param'];

	echo ($param != "") ? searchCar($param) : json_encode("No results");

	function searchCar($criteria) {
		//The connection to the database
		global $db;
		//The SQL statement that will get all the car manufucter's for the menu
		$sql = ("SELECT * FROM `cars` WHERE `make` LIKE '%$criteria%' OR `model` LIKE '%$criteria%' OR `year` = '$criteria';");
		//Run the SQL
		$result = $pdo->query($db, $sql);
		$response = array();
		foreach ($result as $car) {
			$cars = new Car($car["make"], $car["model"], $car["year"], "", "", "", "", "", "", "", "", "", $car["thumbnail"]);
			array_push($response, $cars->toArray());
		}
		// echo json_encode($response);
		return json_encode($response);
	}
?>