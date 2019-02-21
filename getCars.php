<?php 

function getCars($param) {
  global $db;
  $sql = "SELECT * FROM `cars` WHERE `make` = '{$param}'";
  $result = mysqli_query($db, $sql);
  $cols = 0;

  if ($result->num_rows > 0) {
      echo '<tr class="transition-delay">';
      // output data of each row
      foreach ($result as $row) {
  			$cols++;
      	if ($cols > 3) {
           echo '</tr><tr class="transition-delay">';
           $cols = 1;
        }
        $car_id = $row["CarId"];
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
            <button class="buttonView" id="general-car-view" data-toggle="modal" data-target="#myModal'.$row["CarId"].'">View<p id="general-car-id" hidden>'.$car_id.'</p></button><br>';
        	
        	echo "<button class='buttonView' onclick='addDiv".$row["CarId"]."()'>Compare</button>";
        	echo '</div></div></td>';
          
        	// echo '<div data-easein="flipXIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="myModal'.$row["CarId"].'" class="modal fadeInLeft" role="dialog">
        	//   <div class="modal-dialog">           
         //    <div class="modal-content">
         //      <div class="modal-header">
         //        <button type="button" class="close" data-dismiss="modal">&times;</button>
         //        <h4 class="modal-title">'.$row["make"].' '.$row["model"].' '.$row["year"].'</h4>
         //      </div>
         //      <div class="modal-body" style="height:350px;" >
         //       <div style="float:left;"><img src="images/cars/'.$row["thumbnail"].'" class="image"></div>
        	//    <div>
        	//    <p style="width:auto; margin-left:20px;">
        	//     Price <b style="padding-left:90px;">Ksh. '.$price.'</b><br>
        	// 	Year <b style="padding-left:95px;">'.$row["year"].'</b><br>
        	// 	Fuel <b style="padding-left:95px;">'.$row["fuel"].'</b><br>
        	// 	Mileage <b style="padding-left:71px;">'.$row["mileage"].' miles</b><br>
        	// 	Engine Capacity <b style="padding-left:13px;">'.$row["engineCapacity"].' cc</b><br>
        	// 	Top Speed <b style="padding-left:52px;">'.$row["topSpeed"].' km/h</b><br>
        	// </p>
        	// </div>
         // </div>
         // <div class="modal-footer">
         // <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         //      </div>
         //    </div>';
    }
  } else{
    echo "<h3 style='color:#ddd;'><b>no results</b></h3>";
  }
}
?>