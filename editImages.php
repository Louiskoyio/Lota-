<?php
include_once 'car.php';
$car_Id = 1;
$car = new Car($car_Id);

$details = $car->getCarDetails($car_Id);
$carId = $details[0];
$car->addImage($carId);


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

	<!-- Add Images container -->
	<div class="container-fluid" id="images">
		<div class="addImages">
			<h1><?php echo $details[1];?> <?php echo $details[2];?> images</h1>
			<form method="post" enctype="multipart/form-data" >
				<label>Browse files to select image to upload</label>
				<input type="file" name="image" class="form-control" accept="/image" required="">
				<button type="submit" class="btn btn-trans btn-lg" name="addImage">ADD IMAGE</button>
			</form>
		</div>		
	</div>

	<!-- View images form -->
	<div class="container-fluid" id="viewImages">
		<div class="viewImages">
			<div class="Images">
				<ul>
					<?php $car->viewImages($carId); ?>
				</ul>
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

