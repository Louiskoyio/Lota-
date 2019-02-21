<?php
include '../homeDetails.php';
include '../getCars.php';
$car = "Mercedes-Benz";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lota Motors Ltd</title> 
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet"> 
  <link rel="icon" href="../images/web-logo.png">
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
        <a class="navbar-brand" href="#" id="logo-header"><div><img src="../images/web-logo.png" id="pageLogo" class="bigHeaderLogo"><p id="logo-title" class="animated">Lota Motors</p></div></a>
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
          <li><a><div class="search-bar hide-search-bar transition"><img src="../images/icons/search.png" id="search-icon" class="search-icon transition dropdown-toggle" data-toggle="dropdown"><input type="text" name="search" class="fadeInRight animated search-field"></div></a>
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

<!--COMPARINATOR SECTION-->
<div class="comparison-box">
   <h2><span class="glyphicon glyphicon-list-alt"></span> Compare</h2>
        <ul id="compare" style="text-decoration: none; display: block; width:100%; padding-left: 0;">
          <p>No cars selected</p>
        </ul>
        <button class="buttonView"  data-easein="perspectiveRightIn" tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true" data-toggle="modal" data-target="#modal-fullscreen">Compare</button>
        <button class="buttonView" onclick="clearComparisons()">Clear</button>
        </p>
    </div>
<div data-easein="flipXIn" class="modal modal-fullscreen modal-transparent fadeInLeft" id="modal-fullscreen" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header"><h4 style="text-align: center; color: #fc3; font-family: 'Quicksand', sans-serif;">Compare<button type="button" class="close" data-dismiss="modal" style="color:white; font-family: 'Quicksand', sans-serif; color: #fc3;">X</button></h4></div>
     
  <div class="modal-body" style="overflow-x:auto; border-top: hidden;" class="wrapper" id="comparisons">
    <p>No cars selected. Click Compare on an image to add it to your comparison list</p>
  </div>
      </div>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper transition">
<div class="general-car-header fadeIn animated">
  <h2 id="car-make-title"><?php echo $car;?></h2>
</div>
<!-- Search Side Bar -->
<div id="search-side-bar" class="fadeInDown animated search-side-bar col-lg-3 col-md-3 col-sm-3 col-xs-3"><br>
<h3>Filter</h3>
 <form>  
   <ul class="settings">   
      <li><a  onclick="displayPrice()">Price</a> <p id="searchPrice">
  <br>
  Ksh. 500,000 <input name="price" id="price-slider" type="range" class="span2"  value="10000000" max="10000000" min="500000"  data-slider-value="[500000,20000000]"/>Ksh. 20,000,000<br></p>
 </li>
  <li><a onclick="displayColour()">Colour</a>
  <table id="searchColour">
  <tr><td style="background-color:#00C; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#000; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#555; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#EEE; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#F90; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#FF3; width:20px;">&nbsp;&nbsp;</td></tr>
  </table> </li>
  <li><a onclick="displayMileage()">Mileage</a>
  
  <p id="searchMileage">

   <span>2,000 miles <input name="mileage" id="mileage-slider" type="range" class="span2" value="50000" min="2000" max="50000"/>50,000 miles</span><br> </p>
  </li>
   <li><a onclick="displaySpeed()">Top Speed</a>
   <p id="searchSpeed">

   <span>180km/h <input name="speed" id="speed-slider" type="range" class="span2" value="50000" min="180" max="300"/>300km/h</span><br> </p>
   </li>
  <li><a onclick="displayECapacity()">Engine Capacity</a>
  <p id="searchECapacity">

   <span>1,800cc <input name="eCapacity" id="ecapacity-slider" type="range" class="span2" value="50000" min="2000" max="5000" data-slider-step="5" data-slider-value="[500000,20000000]"/>5,000cc</span><br> </p>
   </li>
  <li><a onclick="displayTransmission()">Transmission</a>
  <p id="searchTransmission">
    <input type="radio" name="transmission" value="manual"> Manual
    <input type="radio" name="transmission" value="automatic"> Automatic
  </p></li>
  
  
  <li><a onclick="displayFuel()">Fuel</a>
  <p id="searchFuel">
  <input type="radio" name="Fuel" value="diesel"> Diesel<br>
  <input type="radio" name="Fuel" value="petrol"> Petrol<br>
  <input type="radio" name="Fuel" value="Hybrid"> Hybrid<br>
  </p></li>
  

  <li><a onclick="displayBody()">Body Type</a>
  <p id="searchDrive">
  <input type="radio" name="Body" value="hatchback"> Hatchback<br>
  <input type="radio" name="Body" value="SUV"> SUV<br>
  <input type="radio" name="Body" value="wagon"> Wagon<br>
  </p></li>
  

  <li><a onclick="displayDrive()">Drive Type</a>
  <p id="searchDrive">
  <input type="radio" name="Drive" value="2WD"> 2 Wheel Drive<br>
  <input type="radio" name="Drive" value="4WD"> 4 Wheel Drive<br>
  <input type="radio" name="Drive" value="AWD"> All Wheel Drivebr>
  </p></li>


  <li><p class="buttonView" id="filter-car-search-button">Submit</p></li>
</ul></div>
</form>
<!--CARS TABLE GOES HERE-->
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 table-wrapper">
  <table class="carsTable">
    <?php
      getCars($car);
    ?>
  </table>
</div>
</div>
<!-- Footer -->
  <div class="footer-content transition">
    <!-- Copyright -->
    <div class="copyright-content">
      <p>Copyright &copy; 2017. Lota Motors Ltd. All Rights Reserved.</p>
      <div class="sm-icons" align="center">
        <img src="../images/icons/fbico.png" class="transition"><span>|</span>
        <img src="../images/icons/igico.png" class="transition"><span>|</span>
        <img src="../images/icons/twico.png" class="transition">
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
  <!--   SCRIPTS FOR MODAL ANIMATIONS  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-3.0.0.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/scripts.js"></script>
  <script src='../js/jquery.min.js'></script>
  <script src='../js/velocity.min.js'></script>
  <script src='../js/velocity.ui.min.js'></script>
  </body>
</html>