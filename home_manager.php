<?php
 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Intrend Interior Category Flat Bootstrap Responsive Website Template | Index : W3layouts</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
	<div class="banner" id="home">
		<div class="cd-radial-slider-wrapper">

<!--Header-->
<header>
	<div class="container agile-banner_nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<h1><a class="navbar-brand" href="home_manager.php">NITC <span class="display"></span></a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="allocate_room.php">Allocate Rooms</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Rooms
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="allocated_rooms.php">Allocated Rooms</a>
							</li>
							<li>
								<a href="empty_rooms.php">Empty Rooms</a>
							</li>
							<li>
								<a href="vacate_rooms.php">Vacate Rooms</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact_manager.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin/manager_profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

		</nav>
	</div>
</header>
<!--Header-->

			<ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
				<li class="visible">
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title>Animated SVG</title>
							<defs>
								<clipPath id="cd-image-1">
									<circle id="cd-circle-1" cx="110" cy="400" r="1364"/>
								</clipPath>
							</defs>
							<image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="web_home/images/1.png"></image>
						</svg>
					</div> <!-- .svg-wrapper -->
					<div class="cd-radial-slider-content">
						<div class="wrapper">
							<div class="text-center">
								<h2>Hostel Management</h2>
								<h2>System<h2>
								
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li>
				<li class="next-slide">
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title>Animated SVG</title>
							<defs>
								<clipPath id="cd-image-2">
									<circle id="cd-circle-2" cx="1290" cy="400" r="60"/>
								</clipPath>
							</defs>
							<image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="web_home/images/2.png"></image>
						</svg>
					</div> <!-- .svg-wrapper -->
					<div class="cd-radial-slider-content text-center">
						<div class="wrapper">
							<div class="text-center">
								<h3>Rooms </h3>
							
								

							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li>
				<li>
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title>Animated SVG</title>
							<defs>
								<clipPath id="cd-image-3">
									<circle id="cd-circle-3" cx="110" cy="400" r="60"/>
								</clipPath>
							</defs>
							<image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="web_home/images/3.png"></image>
						</svg>
					</div> <!-- .svg-wrapper -->
					<div class="cd-radial-slider-content text-center">
						<div class="wrapper">
							<div class="text-center">
								<h3>Hostels </h3>
								
								
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li>
				
			</ul> <!-- .cd-radial-slider -->
			<ul class="cd-radial-slider-navigation">
				<li><a href="#0" class="next"><i class="fas fa-chevron-right"></i></a></li>
				<li><a href="#0" class="prev"><i class="fas fa-chevron-left"></i></a></li>
			</ul> <!-- .cd-radial-slider-navigation -->
		</div> <!-- .cd-radial-slider-wrapper -->
	</div>
<!-- //banner -->

<!-- about -->

<!-- //about -->

<!-- why choose us -->

<!-- //why choose us -->

<!-- team -->

<!-- //team -->

<!-- Clients -->

<!--// Clients -->

<!-- latest news -->

<!-- //latest news -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand"  href="http://www.nitc.ac.in/" target="_blank">NIT<span class="display"> CALICUT</span></a>
		</div>
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home_manager.php">Home</a>
					</li>
					<li>
						<a href="allocate_room.php">Allocate</a>
					</li>
					<li>
						<a href="contact_manager.php">Contact</a>
					</li>
					<li>
						<a href="manager_profile.php">Profile</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>
