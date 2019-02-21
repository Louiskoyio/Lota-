<?php
include_once 'car.php';

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


<div class="adminheader3">
<?php //var_dump($_POST); ?>
      <div class="container">
      <?php 
      	
			if(isset($_POST['addcar'])){
				if(isset($_POST['make'] , $_POST['model'] , $_POST['year'] , $_POST['price'] , $_POST['engineCapacity'] , $_POST['transmission'] , $_POST['mileage'] , $_POST['fuelType'] , $_POST['colour'] , $_POST['bodyType'] , $_POST['driveType'] , $_POST['extras'] , $_POST['thumbnail'])){
					
					//INTENTIONAL ERROR HERE
					$car = new Car($_POST['make'] , $_POST['model'] , $_POST['year'] , $_POST['price'] , $_POST['engineCapacity'] , $_POST['transmission'] , $_POST['mileage'] , $_POST['fuelType'] , $_POST['colour'] , $_POST['bodyType'] , $_POST['driveType'] , $_POST['extras'] , $_POST['thumbnail']);

					$car->addCar();
				}else{
	                echo "<p style='padding: 20px; color: red;'><b>[-] ERROR !!</b> You must input all fields appropriately.</p>";
	            }

			}
	
          ?>
        <div class="row">
            <form  class="form-horizontal" method="post">
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <b>MAKE</b><input type="text" class="form-control" id="make" name="make" placeholder="Enter Make" required=""><br>
                <b>MODEL</b><input type="text" class="form-control" id="model" name="model" placeholder="Enter Model" required=""><br>
                <b>YEAR</b><input type="text" class="form-control" id="year" name="year" placeholder="Enter Year of Manufacture" required=""><br>
                <b>PRICE</b><input type="text" class="form-control" id="price" name="price" placeholder="Enter Price of the car" required=""><br>
                <b>ENGINE CAPACITY</b><input type="text" class="form-control" name="engineCapacity" id="engine" placeholder="Enter engine capacity" required=""><br>
                <b>TRANSMISSION</b><select id="transmission" name="transmission" class="form-control">
                  <option>Automatic</option>
                  <option>Manual</option>
                  <option>Semi Automatic</option>
                  <option>Dual Clutch Transmission</option>
                </select><br>
                <b>MILEAGE</b><input type="text" class="form-control" name="mileage" id="mileage" placeholder="Enter Mileage" required=""><br>
                <b>FUEL TYPE</b><select id="fuel" name="fuelType" class="form-control">
                  <option>Petrol</option>
                  <option>Diesel</option>
                  <option>Hybrid</option>
                  <option>Electric</option>
                </select><br>
                <label for="exampleInputFile">Car Profile Picture</label>
                <input type="file" id="thumbnail" name="thumbnail">
              </div>
              <div id="side" class="form-group col-lg-6 col-md-6 col-sm-12">
                <b>COLOUR</b><input type="text" class="form-control" name="colour" id="color" placeholder="Enter Colour" required=""><br>
                <b>BODY TYPE</b><select id="bodytype" name="bodyType" class="form-control">
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
                  <option>2WD</option>
                  <option>4WD</option>
                  <option>AWD</option>
                </select><br>
                <b>EXTRAS</b><textarea class="form-control" rows="5" id="extras" name="extras" placeholder="Extras"></textarea><br><br>
                <button type="submit" name="addcar" class="btn btn-trans btn-lg">ADD CAR</button>
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

