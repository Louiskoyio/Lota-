<?php
	//Connect to the database
	require 'conn.php';
	//The car class
	include 'car.php';

	/*This function returns a menu
	* @return mixed
	*/
	function makeMenu () {
		//The connection to the database
		global $db, $pdo;
		//The SQL statement that will get all the car manufucter's for the menu
		$sql = ("SELECT `car_model` FROM `car_model`;");
		//Run the SQL
		$result = $pdo->query($sql);
		//Make the menu
		echo '<ul class="dropdown-menu">';
		foreach ($result as $car_manufucturer) {
			$car = new Car();
			$car->setMake($car_manufucturer['car_model']);
			//Make a menu item
			echo '<li><a href="http://localhost/lota/'.str_replace("\\s", "-", strtolower($car->getMake()).'">'.$car->getMake()).'</a></li><li role="separator" class="divider"></li>';
		}
		echo '</ul>';
	}

	function loadStoreName () {
		//The connection to the database
		global $db, $pdo;
		//The SQL to get the names of the stores
		$sql = ("SELECT `store_name` FROM `lota_stores`;");
		//Run the SQL
		$result = $pdo->query($sql);
		//The array to store the store_names
		$stores = array();
		//Get the store names
		foreach ($result as $store) {
			array_push($stores, $store["store_name"]);
		}
		return $stores;
	}
?>