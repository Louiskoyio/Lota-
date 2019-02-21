<?php
	//Connect to the database
	require 'conn.php';
	//The store class
	include 'stores.php';

	loadStoreInfo();

	function loadStoreInfo() {
		//The connection to the database
		global $db, $pdo;
		//The SQL statement that will get all the car manufucter's for the menu
		$sql = ("SELECT * FROM `lota_stores`;");
		//Run the SQL
		$result = $pdo->query($sql);
		$response = array();
		foreach ($result as $store) {
			$store = new Store($store['store_id'], $store['store_name'], $store['store_location'], $store['store_address'], $store['store_telephone']);
			array_push($response, $store->toArray());
		}
		echo json_encode($response);
		return json_encode($response);
	}
?>