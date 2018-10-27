<!DOCTYPE html>
<html lang="en">
<head>
<title>Centro Atletico - Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href={{asset("styles/bootstrap-4.1.2/bootstrap.min.css")}}>
<link href={{asset("plugins/font-awesome-4.7.0/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.carousel.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.theme.default.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/animate.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/services.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/services_responsive.css")}}>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
			<div class="logo"><a href="{{ url('/') }}">Centro Atletico</a></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-2">
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
								<li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
								<li class="active"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
								<!-- <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li> -->
								<li><a href="{{ url('/schedule') }}" class="nav-link">Schedule</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
				
		</div>
	</header>

	

	<!-- Home -->

	<div class="home">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_image"><img src="images/services.png" alt=""></div>
						<div class="home_title">Services</div>		
					</div>
				</div>
			</div>
		</div>
		
	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center"><h2>Our Best Services</h2></div>
				</div>
			</div>
			<div class="row icon_boxes_row">
				
				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/court.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Badminton Court</div>
						</div>
						<div class="ib_text">
							<p>Total of eight courts that can be used by training for schools and tournaments for companies.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/shoes.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">In-house Apparel</div>
						</div>
						<div class="ib_text">
							<p>In-house apparel includes baadminton shoes and rackets that can be used immediately.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/queue.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Queueing System</div>
						</div>
						<div class="ib_text">
							<p>Centro Atletico offers a queueing system for walk-in clients. </p>
						</div>
					</div>
				</div>

				

			</div>
			
		</div>
	</div>

	<!-- Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">

				<!-- Boxes Image -->
				<div class="col-lg-6">
					<div class="boxes_image">
						<div class="background_image box_image" style="background-image:url(images/box.jpg)"></div>
					</div>
				</div>

	
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
			<div>Need Help? Call Us</div>
			<div class="d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>0905-746-9567</div>
			</div>
		</div>
		<div class="footer_content">
			<div class="container">
				<div class="row footer_row">

					<!-- Footer Column -->
						 
				<!--<div class="row">
					<div class="col-lg-6"></div>
					<div class="col-lg-1">
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
								<li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
								<li class="active"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
								<li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
								<li><a href="{{ url('/schedule') }}" class="nav-link">Schedule</a></li>
							</ul>
						</nav> 
					</div>
					<div class="col-lg-5"></div>
				</div>-->
		<div class="copyright_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <p>Culaniban | Gabat </p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/services.js"></script>
</body>
</html>