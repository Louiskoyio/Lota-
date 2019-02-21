<!DOCTYPE html>
<html>
<head>

<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

<link rel="stylesheet" type="text/css" href="css/gencarview.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis|Noto+Sans|Open+Sans+Condensed:300|Quicksand" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Lota Motors Ltd</title> 
    <script src="js/ion.rangeSlider.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
       <script src="js/rangeslider.js"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/jquery-1.12.3.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="component.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/rangeslider.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
<script src="js/sort.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7243260-2']);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-3.0.0.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet"> 
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="modals/modernizr.custom.js"></script>
  <link rel="icon" href="images/web-logo.png">
 
</head>
<body>
  <!-- The Static Navigation Bar -->
  <nav class="navbar navbar-default navbar_default navbar-fixed-top" style=" opacity:.9;">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar_header_links" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar_header_links">
        <ul class="nav navbar-nav navbar-right">
      
          <li><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="gencarview2.html">Subaru</a></li>
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

<!--



COMPARINATOR SECTION



-->
    
   
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
 



<!--



SEARCH OPTIONS SECTION



-->

<link rel="stylesheet" type="text/css" href="css/gencarview.css">

   <div id="header-text" class="fadeInDown animated" style=" overflow: scroll; top:0; background-color:#21262c; margin-left: 0; color:white; width: 270px; height: 100%;  padding:0px; font:Arial, Helvetica, sans-serif;margin-right: 0;"><br>
   
         <form method="get" action="search.php">  
      
         <ul class="settings" style="padding-left:0; padding-right:0; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
     
         
           
  <li><a  onclick="displayPrice()">Price</a> <p id="searchPrice">
  <br>
  Ksh. 500,000 <input name="price" id="ex2" type="range" class="span2"  value="10000000" max="10000000" min="500000"  data-slider-value="[500000,20000000]"/>Ksh. 20,000,000<br>  </p>
 

</li>
  <li><a onclick="displayColour()">Colour</a>
  <table id="searchColour">
  <tr><td style="background-color:#00C; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#000; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#555; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#EEE; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#F90; width:20px;">&nbsp;&nbsp;</td><td style="background-color:#FF3; width:20px;">&nbsp;&nbsp;</td></tr>
  </table> </li>
  <li><a onclick="displayMileage()">Mileage</a>
  
  <p id="searchMileage">

   <span>2,000 miles <input name="mileage" id="ex2" type="range" class="span2" value="50000" min="2000" max="50000"/>50,000 miles</span><br> </p>
  </li>
   <li><a onclick="displaySpeed()">Top Speed</a>
   <p id="searchSpeed">

   <span>180km/h <input name="speed" id="ex2" type="range" class="span2" value="50000" min="180" max="300"/>300km/h</span><br> </p>
   </li>
  <li><a onclick="displayECapacity()">Engine Capacity</a>
  <p id="searchECapacity">

   <span>1,800cc <input name="eCapacity" id="ex2" type="range" class="span2" value="50000" min="2000" max="5000" data-slider-step="5" data-slider-value="[500000,20000000]"/>5,000cc</span><br> </p>
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


  <li><input class="buttonView" type="submit" value="Search" /></li>
</ul></div>
</form>
<script>
  function displayPrice(){
    document.getElementById('searchPrice').style.display = 'block';
}
  function displayColour(){
    document.getElementById('searchColour').style.display = 'block';
  }
  function displayMileage(){
    document.getElementById('searchMileage').style.display = 'block';
  }
  function displaySpeed(){
    document.getElementById('searchSpeed').style.display = 'block';
  }
  function displayECapacity(){
    document.getElementById('searchECapacity').style.display = 'block';
  }
  function displayBody(){
    document.getElementById('searchBody').style.display = 'block';
  }
  function displayDrive(){
    document.getElementById('searchDrive').style.display = 'block';
  }
  function displayTransmission(){
    document.getElementById('searchTransmission').style.display = 'block';
  }
  function displayFuel(){
    document.getElementById('searchFuel').style.display = 'block';
  }
</script>
 </div></div>
   
    <div style="margin:0; left:0;">
   






<!--



CARS TABLE GOES HERE



-->






<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lota";

$conn2 = new mysqli($servername, $username, $password, $dbname);

if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
} 
$maxPrice= $_GET['price'];
$maxMileage= $_GET['mileage']; 
$transmission= $_GET['transmission'];

$search="SELECT * FROM cars WHERE (`price` < $maxPrice) and (`mileage` < $maxMileage)";

$cols = -0;
     
     
    if(strlen($maxPrice) >= 0){
         
        $raw_results = $conn2->query($search);
if ($raw_results->num_rows > 0) {
    echo '<div style="position:relative;"><table class="carsTable" style="margin-left:270px;height:100%; width:1090px;" ><tr>';//cars search results will be put in a table
    while($row = $raw_results->fetch_assoc()) {
      $cols++;
  if ($cols > 4) //maximum cars to appear in a row is 4 
  {
     echo '</tr><tr>';
     $cols = 1;
  }
    $make = $row["make"];
    $model = $row["model"];
    $year = $row["year"]; 
    $descr = $row["description"];
    $price = $row["price"];
    $cost = $row["price"];
    $descr = $row["description"];
    $price = number_format($cost);
    
      echo '<td style=" width=250px;"><div class="contains"><img src="images/cars/'.$row["image1"].'" class="image">
  
  <div class="overlay">
    <div class="text"><h2>'.$row["make"].' '.$row["model"].' '.$row["year"].'</h2><br>
    <p>PRICE<br>
    <b>Ksh. '.$price.'</b><br>
  </p>
    <button class="buttonView" data-toggle="modal" data-target="#myModal'.$row["CarId"].'">View</button>';
  
  echo"<button class='buttonView' onclick='addDiv".$row["CarId"]."()'>Compare</button>";
  
  echo'

  </p></div></div></td>
  <div data-easein="flipXIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="myModal'.$row["CarId"].'" class="modal fadeInLeft" role="dialog">
    <div class="modal-dialog">

   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$row["Make"].' '.$row["model"].' '.$row["year"].'</h4>
      </div>
      <div class="modal-body" style="height:350px;" >
       <div style="float:left;"><img src="images/cars/'.$row["image1"].'" class="image"></div>
     <div>
     <p style="width:auto; margin-left:20px;">

  
      Price <b style="padding-left:90px;">Ksh. '.$price.'</b><br>
    Year <b style="padding-left:95px;">'.$row["year"].'</b><br>
    Fuel <b style="padding-left:95px;">'.$row["fuel"].'</b><br>
    Mileage <b style="padding-left:71px;">'.$row["mileage"].' miles</b><br>
    Engine Capacity <b style="padding-left:13px;">'.$row["engineCapacity"].' cc</b><br>
    Top Speed <b style="padding-left:52px;">'.$row["topSpeed"].' km/h</b><br>
    
  </p>
    
    
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  <script>
  function addDiv'.$row["CarId"].'(){
    var div = document.createElement("DIV");
    var img = document.createElement("img");
    img.src = "images/cars/'.$row["image1"].'";
    img.width = 200;
    img.height = 150;
  
    var liList = document.getElementById("compare").getElementsByTagName("li");
    var largo = liList.length;

    if(largo<=0){
    document.getElementById("compare").innerHTML = "";
    document.getElementById("comparisons").innerHTML = "";
  }

    div.innerHTML = "<h4>'.$row["make"].' '.$row["model"].' '.$row["year"].'</h4><hr><br><table><tr><td>Price</td><td><b>Ksh. '.$price.'</b></td></tr><tr><td>Year</td><td><b>'.$row["year"].'</b></td></tr><tr><td>Fuel</td><td><b>'.$row["fuel"].'</b></td></tr><tr><td>Mileage</td><td><b>'.$row["mileage"].' miles</b></td></tr><tr><td>Engine Capacity</td><td><b>'.$row["engineCapacity"].' cc</b></td></tr><tr><td>Top Speed</td><td> <b>'.$row["topSpeed"].' km/h</b></td></tr><tr><td>Body Type</td><td> <b>'.$row["bodyType"].'</b></td></tr><tr><td>Drive Type</td><td> <b>'.$row["driveType"].'</td></tr><tr><td>Extras</td><td> <b>'.$row["extras"].' Extra 1, Extra 2, Extra 3, Extra 4, Extra 5</b></td></tr></table><button>View</button>";
    document.getElementById("comparisons").appendChild(div);
       var li = document.createElement("LI");  
        li.innerHTML = "'.$row["Make"].' '.$row["model"].' '.$row["year"].'";
 
    document.getElementById("compare").appendChild(li);

    document.getElementById("comparisons").appendChild(img); 
  }
  function clearComparisons(){
    document.getElementById("comparisons").innerHTML = "<p>No cars selected. Click Compare on an image to add it to your comparison list</p>";
    document.getElementById("compare").innerHTML = "<p>No cars selected</p>";
  }
</script>';
//this appears for each result, each result comes with the modal, the modal is supposed to show a bit more about the car and a link to its specifi view
    }
    echo '</table></div></div>';
} else{
    echo "<h3 style='color:#ddd;'><b>no results</b></h3>";
  echo "";
}
  }
$conn2->close();
?>
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
    
    </div>
  </div>
  </div>

  <!--


   SCRIPTS FOR MODAL ANIMATIONS


   -->

   <script src='animations/jquery.min.js'></script>
<script src='animations/bootstrap.min.js'></script>
<script src='animations/velocity.min.js'></script>
<script src='animations/velocity.ui.min.js'></script>
<script src="index.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 500000,
      max: 10000000,
      values: [ 500000, 10000000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
  </body>
</html>