<?php 

include_once 'car.php';
include_once 'conn.php';

$make = $_POST["make"];
$price = $_POST["price"];
$colour = $_POST["colour"];
$mileage = $_POST["mileage"];
$speed = $_POST["speed"];
$ecapacity = $_POST["ecapacity"];
$body = $_POST["body"];
$drive = $_POST["drive"];
$transmission = $_POST["transmission"];
$fuel = $_POST["fuel"];

$car = new Car($make,"","",$price, $ecapacity, $transmission, $mileage, $fuel, $colour, $body, $drive, "", "");

filterCars($car);


function filterCars($car) {
  global $db, $pdo;
  $sql = "SELECT * FROM `cars` WHERE `make` = '{$car->getMake()}' AND `price` < '{$car->getPrice()}' AND `engineCapacity` < '{$car->getEngineCapacity()}';";
  $result = $pdo->query($sql);
  $cols = 0;

  if ($result->rowCount() > 0) {
      echo '<tr class="transition-delay">';
      // output data of each row
      foreach ($result as $row) {
  			$cols++;
      	if ($cols > 3) {
           echo '</tr><tr class="transition-delay">';
           $cols = 1;
        }
    		$make = $row["make"];
    		$model = $row["model"];
    		$year = $row["year"];	
    		$descr = $row["description"];
    		$cost = $row["price"];  		
    		$price = number_format($cost);
    		
    		  echo '<td class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="general-car-container transition fadeIn animated">
          <img src="http://localhost/lota/images/cars/'.$row["thumbnail"].'" class="general-car-image transition">
          <div class="general-car-info fadeInLeft animated transition">
            <div class="general-car-info-text"><h2>'.$row["make"].' '.$row["model"].' '.$row["year"].'</h2>
            <p>PRICE<br><b>Ksh. '.$price.'</b><br></p>
            <button class="buttonView" data-toggle="modal" data-target="#myModal'.$row["CarId"].'">View</button><br>';
        	
        	echo "<button class='buttonView' onclick='addDiv".$row["CarId"]."()'>Compare</button>";
        	echo '</div></div></td>';
        }
  } else{
    echo "<h3 align='center' style='color:#ddd;'><b>No Results</b></h3>";
  }
}
?>