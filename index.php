<?php
include 'homeDetails.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lota Motors Ltd</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet"> 
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
	<!-- DOM body -->
	<div class="wrapper transition">
	<!-- Slideshow -->
	<div class="header-container">
			<ul id="img-slider">
				<li class="slidebg"><div class="header_bg"><img src="" id="slidebg"></div></li>
				<li class="slide activeSlide"><div class="header_bg"><img src="images/1.jpg"><div id="header-text" class="fadeInUp animated"><h1>Lota Motors</h1><p>The pursuit of excellence</p></div></div></li>
				<li class="slide"><div class="header_bg"><img src="images/4.png"><div id="header-text" class="fadeInUp animated"><img src="images/subaru.png"><br><br><h4>Leading Subaru Dealer in Africa</h4></div></div></li>
				<li class="slide"><div class="header_bg"><img src="images/3.jpg"><div id="header-text" class="fadeInLeft animated"><h1>The award winning<br> car dealer</h1><img src="images/award1.png"><br><img src="images/award3.png"><br><img src="images/award3.png"><br><img src="images/award4.png"></div><div></li>
			</ul>
	</div>
	<!-- About -->
	<div class="about-content" id="about">
		<!-- <a id="about"><h2>About Us</h2></a> -->
		<ul id="about-image-container">
			<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 transition"><div class="about-bg"><img src="images/1.jpg"><p id="about-text" class="fadeInUp animated">Introducing none other than "Lota Automobiles Ltd", one of the Leading SUBARU and JAPANESE Car Dealers in Kenya.<br><b class="read-more-about fadeInUp animated">Read More</b></p></div></li>
			<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 transition"><div class="about-bg"><img src="images/2.jpg"><p id="about-text" class="fadeInUp animated">LOTA is manned by a very Professional  and  Service Conscious Staff who provide a Personalized Service that ensures Customer Satisfaction to its Clients.<br><br><b class="read-more-about fadeInUp animated">Read More</b></p></div></li>
			<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 transition"><div class="about-bg"><img src="images/3.jpg"><p id="about-text" class="fadeInUp animated">Lota Automobiles also has a Wide Sales Network throughout Kenya, including Nairobi, Mombasa and Upcountry.<br><br><b class="read-more-about fadeInUp animated">Read More</b></p></div></li>
		</ul>
	</div>
	<!-- Maps -->
	<div class="map-container">
	<div class="map-details-bar col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-8 col-xs-4 col-xs-offset-8">
		<h2>Where can you find us?</h2>
	</div>
	<div class="map-content" id="storeLocationMap">
	</div>
	</div>
	<!-- Footer -->
	<div class="footer-content transition">
		<!-- <div class="sitemap">
			<ul>
			<br>
				<li class="transition"><h5>SiteMap</h5></li>
				<li class="transition"><a>Home</a></li>
				<li class="transition"><a href="#about">About</a></li>
				<li class="transition"><a>Contact Us</a></li>
			</ul>
		</div>
		<div class="sm-icons" align="center">
			<p>Check out our social media</p>
			<img src="images/icons/fbico.png" class="transition">
			<img src="images/icons/igico.png" class="transition">
			<img src="images/icons/twico.png" class="transition">
		</div> -->
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
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEJlvnfS88oJo1ziyp7otJ839JRV_T9T8"></script>
	<script src="http://code.jquery.com/jquery-migrate-3.0.0.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>