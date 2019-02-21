//Global variables
var storeMap;

// from http://stackoverflow.com/a/11381730/989439
function mobilecheck() {
	var check = false;
	(function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
	return check;
}

$(document).ready(function(){
	$("#up_arrow, .nav li a[href='#about']").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 1200, function(){
				window.location.hash = hash;
			});
		}
	});

	$('.dropdown-submenu a.test').on("click", function(e){
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
	});

	$('.search-icon').on("click", function(){
		$('.search-bar').toggleClass("hide-search-bar");
		$('.wrapper').toggleClass("blur");
		$('.wrapper').toggleClass("zoom-out");
		$('.search-modal, .search-modal-overlay').toggleClass("hide-element");
	});

	$('.search-field').keyup(function(){
		$('#search-title').text('\"'+$('.search-field').val()+'\"');
		$.ajax({
			type: "POST",
			url: "searchCars.php",
			data: {param: $('.search-field').val()},

			success: function(msg){
				console.log(msg);
				var obj = JSON.parse(msg);
				var modal = document.querySelector(".car-results");
				modal.textContent = "";
				for (var i = 0; i < obj.length; i++){
					var div = document.createElement("div");
					div.className = "car-details col-lg-4 col-md-4 col-sm-4 col-xs-4";
					modal.appendChild(div);
					var car_thumbnail = document.createElement("img");
					car_thumbnail.className = "car_thumbnail transition";
					car_thumbnail.src = "images/cars/"+obj[i]['thumbnails'];
					console.log("images/cars/"+obj[i]['']);
					div.appendChild(car_thumbnail);
					var car_make = document.createElement("h3");
					car_make.textContent = obj[i]['make'];
					div.appendChild(car_make);
					var car_model = document.createElement("p");
					car_model.textContent = obj[i]['model'];
					div.appendChild(car_model);
				}
			}
		});
	});

	var slides = document.querySelectorAll('#img-slider .slide');
	console.log(slides);
	var currentSlide = 0;
	var slideInterval = setInterval(nextSlide,4500);

	function nextSlide(){
		goToSlide(currentSlide+1, 'next');
	}

	function prevSlide(){
		goToSlide(Math.abs(currentSlide-1), 'prev');
	}

	function goToSlide(n, side) {
		$(".header-container").css("background-image", slides[currentSlide].getElementsByTagName('img')[0].src);
	    $("#slidebg").attr('src', slides[currentSlide].getElementsByTagName('img')[0].src);
	    slides[currentSlide].className = 'slide';
	    currentSlide = (n)%slides.length;
	    slides[currentSlide].className = 'slide activeSlide '+((side === "prev") ? 'fadeInRight' : 'fadeInLeft')+' animated';
	}

	$('.header-container').mousemove(function(e){
		setInterval(changePointerDirection(e), 1000);
	});


	function changePointerDirection(e){
		$(".header-container").addClass((getScreenSide(e) === "Left") ? "leftArrow" : "rightArrow");
		$(".header-container").removeClass((getScreenSide(e) === "Left") ? "rightArrow" : "leftArrow");
	}

	$('.header-container').click(function(e){
		pauseSlideshow(slideInterval);
		navbarAnimation();
		upArrowAnimation();
		(getScreenSide(e) === "Right") ? nextSlide() : prevSlide();
	});

	$('#about-image-container li').click(function(e){
		if ($(this).index() == 1) {
			($('#about-image-container li:eq(0)').toggleClass("shift-left hide-element"));
			($('#about-image-container li:eq(2)').toggleClass("shift-right hide-element"));	
		} else if ($(this).index() == 2) {
			($('#about-image-container li:eq(1), #about-image-container li:eq(0)').toggleClass("shift-left hide-element"));
		} else if ($(this).index() == 0) {
			($('#about-image-container li:eq(1), #about-image-container li:eq(2)').toggleClass("shift-right hide-element"));
		}
		$(this).toggleClass("col-lg-4 col-md-4 col-sm-4 col-xs-4");
		$(this).toggleClass("col-lg-12 col-md-12 col-sm-12 col-xs-12");
	});

	// Add a shadow to icons
	$('.sm-icons img').hover(function(e){
		$(this).toggleClass("shadow-content");
	});

	//Contact us 
	$('#contact-us').click(function(){
		$('.wrapper').toggleClass("move-wrapper-left");
		$('.contact-us-modal, .contact-us-modal-overlay').toggleClass("hide-element");
	});

	//Search button for filter side bar
	$('#filter-car-search-button').click(function(){
		filterCars();
	});

	$('input[name=price]').change(function(){
		filterCars();
		var slider = document.querySelector('#price-slider-value');
		slider.textContent = $('input[name=price]').val();
	});

	$('.general-car-container button').click(function(){
		console.log(this.textContent.substring(4));
		var id = this.textContent.substring(4);
		location.replace("http://localhost/lota/carDetails.php?q="+id);
	});


});

$(window).scroll(function(){
	upArrowAnimation();
	navbarAnimation();
	footerAnimation();
});

function initBar() {
	console.log('Map loaded');
	//Set up the listeners
	$('.store0').click(function(e){
		console.log('center');
	});
	$('.store1').click(function(e){
		console.log('change');
	});
}

function upArrowAnimation(){
	if ($(window).scrollTop() > 10) {
		$("#up_arrow").removeClass("animated fadeOutDown");
		document.getElementById("up_arrow").style.display = 'block';
		$('#up_arrow').addClass("animated fadeInUp");
	} else {
		// document.getElementById("up-arrow").style.display = 'none';
		$('#up_arrow').removeClass("animated fadeInUp");
		$('#up_arrow').addClass("animated fadeOutDown");
	}
}

function navbarAnimation(){
	if ($(window).scrollTop() > 5) {
		$("nav").addClass("navbar_after");
		$("nav").removeClass("navbar_default");
		$("#navbar_header_links li a").css("color","black");
		$("#pageLogo").addClass("smallHeaderLogo");
		$("#pageLogo").removeClass("bigHeaderLogo");
		$("#logo-title").css("display", "block");
		$("#logo-title").removeClass("fadeOutRight");
		$("#logo-title").addClass("fadeInRight");
	} else {
		$("nav").removeClass("navbar_after");
		$("nav").addClass("navbar_default");
		$("#pageLogo").removeClass("smallHeaderLogo");
		$("#pageLogo").addClass("bigHeaderLogo");
		$("#logo-title").removeClass("fadeInRight");
		$("#logo-title").addClass("fadeOutRight");
	}
}

function footerAnimation () {
	if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
		$(".footer-content").removeClass("animated fadeOutDown");
		$('.footer-content').addClass("animated fadeInUp");
	} else {
		$('.footer-content').removeClass("animated fadeInUp");
		$('.footer-content').addClass("animated fadeOutDown");
	}
}

upArrowAnimation();
navbarAnimation();
footerAnimation();

function getScreenSide(e){
	var screenWidth = $(this).innerWidth();
	var screenOffset = $(this).offset().left;
	var x = e.pageX - screenOffset;
	// console.log((screenWidth/2 > x) ? "Left" : "Right");
	return ((screenWidth/2 > x) ? "Left" : "Right");
}

function pauseSlideshow(slideInterval){
	clearInterval(slideInterval);
}

//Set up the map
setUpMap("-1.258309,37.7164363");

function setUpMap(pos){
	var long = parseFloat(pos.split(',').pop());
	var lat = parseFloat(pos.split(',', 1));
	console.log(long+', '+lat);
	var markers = []; 
	var storePos = {lat: lat, lng: long};
	storeMap = new google.maps.Map(document.getElementById('storeLocationMap'), {
		zoom: 9,
		center: storePos,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
	});
	$.ajax({
		type: "POST",
		url:"loadStoreDetails.php",

		success: function(msg){
			var obj = JSON.parse(msg);
			console.log(msg);
			var mapDetailsSideBar = document.querySelector('.map-details-bar');
			for (var i = 0; i < obj.length; i++) {
				var storePos = obj[i]["store_location"];
				var store_name = obj[i]["store_name"];
				var store_address = obj[i]["store_address"];
				var store_telephone = obj[i]["store_telephone"];
				var long = parseFloat(storePos.split(',').pop());
				var lat = parseFloat(storePos.split(',', 1));
				console.log(long+', '+lat);
				var storePos = {lat: lat, lng: long};
				var image = 'images/logopin.png';
				markers.push(new google.maps.Marker({
					position: storePos,
					map: storeMap,
					title: store_name,
					icon: image,
					animation: google.maps.Animation.DROP
				}));
				// Make the sidebar
				var div = document.createElement('div');
				div.className = "store"+i+" store-info transition";
				mapDetailsSideBar.appendChild(div);
				var header = document.createElement('h3');
				header.textContent = store_name;
				div.appendChild(header);
				var address = document.createElement('p');
				address.textContent = store_address;
				div.appendChild(address);
				var telephone = document.createElement('p');
				telephone.textContent = store_telephone;
				div.appendChild(telephone);
				var location = document.createElement('p');
				location.textContent = obj[i]["store_location"];
				location.className = "hide-element";
				div.appendChild(location);
				var contactUsDiv = document.createElement('div');
				contactUsDiv.className = "contactUs transition fadeInUp animated";
				div.appendChild(contactUsDiv);
				var contactUs = document.createElement('p');
				contactUs.textContent = "Say hi :)";
				contactUsDiv.appendChild(contactUs);
			}
		}
	});
}

// Delegated listener
$('.map-details-bar').click("div", function(){
	var rows = document.querySelector('.map-details-bar').getElementsByTagName('div');
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function() {
            console.log(this.childNodes[3].textContent);
            setNewCenter(this.childNodes[3].textContent);
        }
    }
});

function setNewCenter(loc) {
	console.log(loc);
	var long = parseFloat(loc.split(',').pop());
	var lat = parseFloat(loc.split(',', 1));
	console.log(long+', '+lat);
	var storePos = {lat: lat, lng: long};
	storeMap.setCenter(storePos);
}

//Comment
$('#submit-comment').click(function(){
	postComment();
});

function postComment(){
	var email = $('#comment-email').val();
	var phone_no = $('#comment-phone-no').val();
	var branch = $('#comment-branch').val();
	var comments = $('#comment-text').val();

	console.log(email+phone_no+branch+comments);

	if (email != "" && phone_no != "" && comments != ""){
		$.ajax({
			url:"postComment.php",
			type: "POST",
			data: {email: email, phone_no: phone_no, branch: branch, comment: comments},

			success:function(msg){
				console.log(msg);
				var obj = JSON.parse(msg);
				console.log((obj["success"] == 1) ? "Your comment has been posted successfully" : "Your comment failed to post :/");
				showMessage((obj["success"] == 1) ? "Your comment has been posted successfully" : "Your comment failed to post :/");
			}
		});
	} else {
		console.log("Please fill out all the details");
	}
}

function showMessage(alertMessage){
	closeAlert();
	var alert = document.querySelector(".alert");
	alert.style.display ="block";
	var comment_alert = document.querySelector("#comment-alert-message");
	comment_alert.textContent = alertMessage;
	$('#alert').delay(3000).fadeOut('slow');
}

function closeAlert() {
	var alert = document.querySelector(".alert");
	alert.style.display ="none";
}

function addDiv(){
	var div = document.createElement("DIV");
	var img = document.createElement("img");
	img.src = "images/cars/"+$row["image1"];
	img.width = 200;
	img.height = 150;

	var liList = document.getElementById("compare").getElementsByTagName("li");
	var largo = liList.length;

	if(largo<=0){
		document.getElementById("compare").innerHTML = "";
		document.getElementById("comparisons").innerHTML = "";
	}
	div.innerHTML = "<h4>"+$row["Make"]+' '+$row["model"]+' '+$row["year"]+'</h4><hr><br><table><tr><td>Price</td><td><b>Ksh. '+$price+'</b></td></tr><tr><td>Year</td><td><b>'+$row["year"]+'</b></td></tr><tr><td>Fuel</td><td><b>'+$row["fuel"]+'</b></td></tr><tr><td>Mileage</td><td><b>'+$row["mileage"]+' miles</b></td></tr><tr><td>Engine Capacity</td><td><b>'+$row["engineCapacity"]+' cc</b></td></tr><tr><td>Top Speed</td><td> <b>'+$row["topSpeed"]+' km/h</b></td></tr><tr><td>Body Type</td><td> <b>'+$row["bodyType"]+'</b></td></tr><tr><td>Drive Type</td><td> <b>'+$row["driveType"]+'</td></tr><tr><td>Extras</td><td> <b>'+$row["extras"]+' Extra 1, Extra 2, Extra 3, Extra 4, Extra 5</b></td></tr></table><button>View</button>';
	document.getElementById("comparisons").appendChild(div);
	   var li = document.createElement("LI");  
    li.innerHTML = "'"+$row["Make"]+' '+$row["model"]+' '+$row["year"];
	document.getElementById("compare").appendChild(li);
	document.getElementById("comparisons").appendChild(img); 
}

function clearComparisons(){
	document.getElementById("comparisons").innerHTML = "<p>No cars selected. Click Compare on an image to add it to your comparison list</p>";
	document.getElementById("compare").innerHTML = "<p>No cars selected</p>";
}

$('ul.dropdown-submenu [data-toggle=dropdown]').on('click', function(event) {
	// Avoid following the href location when clicking
	event.preventDefault();
	// Avoid having the menu to close when clicking
	event.stopPropagation();
	// If a menu is already open we close it
	$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
	// opening the one you clicked on
	$(this).parent().addClass('open');
});

function displayPrice(){
	$('#searchPrice').toggleClass('show-element fadeIn animated');
}
function displayColour(){
	$('#searchColour').toggleClass('show-element fadeIn animated');
}
function displayMileage(){
	$('#searchMileage').toggleClass('show-element fadeIn animated');
}
function displaySpeed(){
	$('#searchSpeed').toggleClass('show-element fadeIn animated');
}
function displayECapacity(){
	$('#searchECapacity').toggleClass('show-element fadeIn animated');
}
function displayBody(){
	$('#searchBody').toggleClass('show-element fadeIn animated');
}
function displayDrive(){
	$('#searchDrive').toggleClass('show-element fadeIn animated');
}
function displayTransmission(){
	$('#searchTransmission').toggleClass('show-element fadeIn animated');
}
function displayFuel(){
	$('#searchFuel').toggleClass('show-element fadeIn animated');
}

function filterCars() {
	var price = $('input[name=price]').val();
	var colour = $('#searchColour').val();
	var mileage = $('input[name=mileage]').val();
	var speed = $('input[name=speed]').val();
	var ecapacity = $('input[name=eCapacity]').val();
	var body = $('input[name=Body]').val();
	var drive = $('input[name=Drive]').val();
	var transmission = $('input[name=transmission]').val();
	var fuel = $('input[name=Fuel]').val();
	var make = $('#car-make-title').text();

	console.log(price+fuel+"make="+make);

	$.ajax({
		type:"POST",
		url: "http://localhost/lota/filterCars.php",
		data: {make:make, price: price, colour: colour, mileage: mileage, mileage: mileage, speed:speed,
			ecapacity: ecapacity, body: body, drive: drive, transmission: transmission,
			fuel: fuel},

		success:function(msg){
			var carsTable = document.querySelector(".carsTable");
			carsTable.innerHTML = "";
			carsTable.innerHTML = msg;
		}
	});
}

$(function() {
	$("#slider-range").slider({
	  range: true,
	  min: 500000,
	  max: 10000000,
	  values: [ 500000, 10000000 ],
	  slide: function( event, ui ) {
	    $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
	  }
	});
	$( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
	  " - " + $( "#slider-range" ).slider( "values", 1 ));
});