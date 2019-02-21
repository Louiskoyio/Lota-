<?php
include_once 'homeDetails.php';
$car = new Car();
$details = $car->getCarDetails($_GET['q']);
$carId = $details[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lota Motors Ltd</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
	<link rel="icon" href="images/web-logo.png">
</head>
<body>
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
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars <span class="caret"></span></a>
            <?php makeMenu();?>
          </li>
          <li><a href="#" id="contact-us">Contact Us</a></li>
          <!-- The Seacrh bar -->
          <li><a><div class="search-bar hide-search-bar transition"><img src="images/icons/search.png" id="search-icon" class="search-icon transition dropdown-toggle" data-toggle="dropdown"><input type="text" name="search" class="fadeInRight animated search-field"></div></a>
            <ul class="dropdown-menu filter-dropdown">
                <li><a href="#">Manufucturer</a></li>
              <li role="separator" class="divider"></li>
                <li><a href="#">Model</a></li>
        </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
	<!-- Up Arrow -->
	<a href="#header" id="up_arrow" aria-disabled=false data-toggle="tooltip" title="Back to top">
		<i class="fa fa-fw fa-chevron-up"></i>
	</a>

	<!-- Car Details Body -->
	<div class="wrapper">
	<div class="content">
		<div class="mainpic col-lg-6 col-md-6 animated slideInLeft">
			<h1><?php if(isset($details[3])) echo $details[3]; ?> <?php if(isset($details[1])) echo $details[1]; ?> <?php if(isset($details[2])) echo $details[2]; ?></h1>
				<img class="img-responsive" src="images/cars/<?php if(isset($details[13])) echo $details[13]; ?>">
		</div>
		<div class="carImages col-lg-6 col-md-6 animated slideInRight">
			<h1>Ksh. <?php if(isset($details[4])) echo number_format($details[4]); ?></h1>
			<?php $car->viewImages1($carId); ?>
		</div>
	</div>
	</div>
	<div class="carDetails animated slideInUp">
	<hr>
		<h1><u>Car Details</u></h1>
		<ul class="col-lg-6 col-md-6 col-sm-12">
			<li><b>Engine Capacity :</b></li><p class="descriptions"><?php if(isset($details[5])) echo number_format($details[5]); ?> cc</p>
			<li><b>Transmission	:</b></b></li><p class="descriptions"><?php if(isset($details[6])) echo $details[6]; ?></p>
			<li><b>Mileage			:</b></li><p class="descriptions"><?php if(isset($details[7])) echo $details[7]; ?> km</p>
			<li><b>Fuel type		:</b></li><p class="descriptions"><?php if(isset($details[8])) echo $details[8]; ?></p>
		</ul>
		<div class="exterior col-lg-6 col-md-6 col-sm-12">	
		<ul>
			<li><b>Drive type		:</b></li><p class="descriptions"><?php if(isset($details[11])) echo $details[11]; ?></p>
			<li><b>Body type		:</b></li><p class="descriptions"><?php if(isset($details[10])) echo $details[10]; ?></p>
			<li><b>Colour			:</b></li><p class="descriptions"><?php if(isset($details[9])) echo $details[9]; ?></p>
		</ul>
		</div>
	</div>
	<div class="extras animated slideInUp">
	<hr>
		<h1><u>Extras</u></h1>
		<p><?php if(isset($details[12])) echo $details[12]; ?><p>
	</div>
	<!-- End of Car Details Body -->

	<!-- Footer -->
  <div class="footer-content transition">
    <!-- Copyright -->
    <div class="copyright-content">
      <p>Copyright &copy; 2017. Lota Motors Ltd. All Rights Reserved.</p>
      <div class="sm-icons" align="center">
        <img src="images/icons/fbico.png" class="transition"><span>|</span>
        <img src="images/icons/igico.png" class="transition"><span>|</span>
        <img src="images/icons/twico.png" class="transition">
      </div>
      <p>Designed and developed by Ken</p>
    </div>
  </div>
	</div>
	<!-- The Search Modal -->
  <div class="search-modal fadeInUp animated hide-element">
    <h1 id="search-title">Search</h1>
    <div class="car-results transition-delay"></div>
  </div>
  <div class="search-modal-overlay fadeIn animated hide-element"></div>
  <!-- The Contact Us Modal -->
  <div class="contact-us-modal fadeInRight animated transition-delay hide-element">
    <div class="alert bounceIn animated" id="comment-alert">
    <div class="closebtn" onclick="closeAlert()"><p>x</p></div> 
      <p id="comment-alert-message">Insert message here...</p>
    </div>
    <h1 id="contact-us-title">Contact Us</h1>
    <form name="comment-form">
      <label for="email" class="transition-delay">Email: </label><br>
      <input type="email" name="email" id="comment-email" class="input-field transition" required><br>
      <label for="phoneno" class="transition-delay">Phone Number: </label><br>
      <input type="number" name="phoneno" id="comment-phone-no" class="input-field transition" required><br>
      <label for="branch" class="transition-delay">Branch: </label><br>
      <select class="input-field transition" id="comment-branch" required>
        <?php
          $stores = loadStoreName();
          foreach ($stores as $store) {
            echo "<option>".$store."</option>";
          }
        ?>
      </select><br>
      <label for="comment" class="transition-delay">Comment: </label><br>
      <textarea name="comment" id="comment-text" class="input-field transition" required></textarea><br><br>
      <p name="post-comment" id="submit-comment" class="submit-button transition">Submit</p>
    </form>
    <div class="car-results transition-delay"></div>
  </div>
  <div class="contact-us-modal-overlay fadeIn animated hide-element"></div>
  	<!--	 SCRIPTS FOR MODAL ANIMATIONS	 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-3.0.0.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script src='js/jquery.min.js'></script>
  <script src='js/velocity.min.js'></script>
  <script src='js/velocity.ui.min.js'></script>
	</body>
</html>