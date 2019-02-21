<?php
include_once 'conn.php';
include_once 'car.php';
$car_Id = 2;
$car = new Car($car_Id);

$details = $car->getCarDetails($car_Id);
$carId = $details[0];
if(isset($_POST['editCar'])){
	$Car = new Car($_POST['make'] , $_POST['model'] , $_POST['year'] , $_POST['price'] , $_POST['engineCapacity'] , $_POST['transmission'] , $_POST['mileage'] , $_POST['fuelType'] , $_POST['colour'] , $_POST['bodyType'] , $_POST['driveType'] , $_POST['extras'] , $_POST['thumbnail']);

	$Car->editCar($details[0]);
}

if(isset($_POST['deleteCar'])){
	$car->deleteCar($carId);
} 

if(isset($_POST['deleteImg'])){
	$car->deleteImage($image);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lota Motors Ltd</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-3.0.0.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet"> 
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<link rel="icon" href="images/web-logo.png">
</head>
<body>
	<!-- The Static Navigation Bar -->
	<nav class="navbar navbar-default navbar_default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar_header_links" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#" id="logo-header"><div><img src="images/web-logo.png" id="pageLogo" class="bigHeaderLogo"><p id="logo-title" class="animated">Lota Motors</p></div></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="navbar_header_links">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.html">Home</a></li>
	        <li><a href="#about">About</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars <span class="caret"></span></a>
	          <ul class="dropdown-menu">
		            <li><a href="#">Subaru</a></li>
	            <li role="separator" class="divider"></li>
		            <li><a href="#">Toyota</a></li>
	          </ul>
	        </li>
	        <li><a href="#">Contact Us</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- Up Arrow -->
	<a href="#header" id="up_arrow" aria-disabled=false data-toggle="tooltip" title="Back to top">
		<i class="fa fa-fw fa-chevron-up"></i>
	</a>

	<!-- Car Details Body -->
	<div class="header-container">
	<div class="content2">
		<div class="mainpic col-lg-6 col-md-6 animated slideInLeft">
				<img class="img-responsive" src="images/<?php if(isset($details[13])) echo $details[13]; ?>">
		</div>
		<div class="carImages col-lg-6 col-md-6 animated slideInRight">
			<?php $car->viewImages1($carId); ?>
			<a href="editImages.php"><img class="img-responsive" src="images/add.png" alt="Add car images"></a>
		</div>
	</div>
	</div>




<div class="adminheader3">
<?php //var_dump($_POST); ?>
      <div class="container-fluid">
     
        <div class="row">
            <form  class="form-horizontal" method="post">
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <b>MAKE</b><input type="text" class="form-control" id="make" name="make" placeholder="Enter Make" value="<?php if(isset($details[1])) echo $details[1]; ?>"><br>
                <b>MODEL</b><input type="text" class="form-control" id="model" name="model" placeholder="Enter Model" value="<?php if(isset($details[2])) echo $details[2]; ?>"><br>
                <b>YEAR</b><input type="text" class="form-control" id="year" name="year" placeholder="Enter Year of Manufacture" value="<?php if(isset($details[3])) echo $details[3]; ?>"><br>
                <b>PRICE</b><input type="text" class="form-control" id="price" name="price" placeholder="Enter Price of the car" value="<?php if(isset($details[4])) echo $details[4]; ?>"><br>
                <b>ENGINE CAPACITY</b><input type="text" class="form-control" name="engineCapacity" id="engine" placeholder="Enter engine capacity" value="<?php if(isset($details[5])) echo $details[5]; ?>"><br>
                <b>TRANSMISSION</b><select id="transmission" name="transmission" class="form-control">
                	<option><?php if(isset($details[6])) echo $details[6]; ?></option>
                  <option>Automatic</option>
                  <option>Manual</option>
                  <option>Semi Automatic</option>
                  <option>Dual Clutch Transmission</option>
                </select><br>
                <b>MILEAGE</b><input type="text" class="form-control" name="mileage" id="mileage" placeholder="Enter Mileage" value="<?php if(isset($details[7])) echo $details[7]; ?>"><br>
                <b>FUEL TYPE</b><select id="fuel" name="fuelType" class="form-control">
                	<option><?php if(isset($details[8])) echo $details[8]; ?></option>
                  <option>Petrol</option>
                  <option>Diesel</option>
                  <option>Hybrid</option>
                  <option>Electric</option>
                </select><br>
                <label for="exampleInputFile">Car Profile Picture</label>
                <input type="file" id="thumbnail" name="thumbnail"/><?php if(isset($details[13])) echo "Current : ".$details[13]; ?>
              </div>
              <div id="side" class="form-group col-lg-6 col-md-6 col-sm-12">
                <b>COLOUR</b><input type="text" class="form-control" name="colour" id="color" placeholder="Enter Colour" value="<?php if(isset($details[9])) echo $details[9]; ?>"><br>
                <b>BODY TYPE</b><select id="bodytype" name="bodyType" class="form-control">
                 	<option><?php if(isset($details[10])) echo $details[10]; ?></option>
                  <option>Sedan</option>
                  <option>Coupe</option>
                  <option>Station Wagon</option>
                  <option>Hatchback</option>
                  <option>Crossover</option>
                  <option>Convertible</option>
                  <option>SUV</option>
                  <option>Single Cabin Pickup</option>
                  <option>Double Cabin pickup</option>
                </select><br>
                <b>DRIVE TYPE</b><select id="drivetype" name="driveType" class="form-control">
                	<option><?php if(isset($details[11])) echo $details[11]; ?></option>
                  <option>2WD</option>
                  <option>4WD</option>
                  <option>AWD</option>
                </select><br>
                <b>EXTRAS</b><textarea class="form-control" rows="5" id="extras" name="extras" placeholder="Extras"><?php if(isset($details[12])) echo $details[12]; ?></textarea><br><br>
                <button type="submit" name="editCar" id="editCar" class="btn btn-trans btn-lg">UPDATE CAR DETAILS</button><br><br><br><br><br><br>
                <button type="submit" name="deleteCar" id="deleteCar" class="btn btn-trans btn-lg" onclick="return confirm('Are you sure you want to delete this record?')">DELETE CAR RECORD</button>
              </div>
            </form>
        </div>
      </div>
    </div>


		<!-- Footer -->
	<div class="footer-content transition">
		<div class="sitemap">
			<ul>
				<li><h3>SiteMap</h3></li>
				<li><a>Home</a></li>
				<li><a>About</a></li>
			</ul>
		</div>
		<div class="sm-icons" align="center">
			<p>Check out our social media</p>
			<img src="images/icons/fbico.png" class="transition">
			<img src="images/icons/igico.png" class="transition">
			<img src="images/icons/twico.png" class="transition">
		</div>
		<!-- Copyright -->
		<div class="copyright-content">
			<p>Copyright &copy; 2017. Lota Motors Ltd. All Rights Reserved.</p><p>Designed and developed by Ken</p>
		</div>
	</div>
	</body>
</html>






