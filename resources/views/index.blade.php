<!DOCTYPE html>
<html lang="en">
<head>
<title>Centro Atletico - Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href={{asset("styles/bootstrap-4.1.2/bootstrap.min.css")}}>
<link href={{asset("plugins/font-awesome-4.7.0/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.carousel.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.theme.default.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/animate.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/main_styles.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/responsive.css")}}>
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
								<li class="active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
								<li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
								<li><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/index.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_icon ml-auto mr-auto d-flex flex-column align-items-center justify-content-center"><div><img src="images/shuttlecock.svg" alt="https://www.flaticon.com/authors/srip"></div></div>
							<div class="home_title">Play like a Champion</div>
								<center>
									<div class="button c_right_button"><a href="{{ url('/reserve/now') }}">Reserve Now</a></div>
								</center>
								
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="why">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h2>Why Choose us?</h2></div>
						
					</div>
				</div>
			</div>
			<div class="row why_row">
				
				<!-- Why Item -->
				<div class="col-lg-4">
					<div class="icon_box_1 text-center">
						<div class="icon_box_1_image ml-auto mr-auto"><img src="images/court.svg" alt="https://www.flaticon.com/authors/srip"></div>
						<div class="icon_box_1_title">Several Courts</div>
						<div class="icon_box_1_text">
							<p>Total of Eight courts can be used for trainings and tournaments.</p>
						</div>
					</div>
				</div>

				<!-- Why Item -->
				<div class="col-lg-4">
					<div class="icon_box_1 text-center">
						<div class="icon_box_1_image ml-auto mr-auto"><img src="images/shoes.svg" alt="https://www.flaticon.com/authors/srip"></div>
						<div class="icon_box_1_title">In-house Apparel</div>
						<div class="icon_box_1_text">
							<p>In-house apparels are avaible 24/7.</p>
						</div>
					</div>
				</div>

				<!-- Why Item -->
				<div class="col-lg-4">
					<div class="icon_box_1 text-center">
						<div class="icon_box_1_image ml-auto mr-auto"><img src="images/location.svg" alt="https://www.flaticon.com/authors/srip"></div>
						<div class="icon_box_1_title">Location</div>
						<div class="icon_box_1_text">
							<p>Easy to find place. Comfortable environment. </p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>



	<!-- Content Right -->

	<div class="pricing">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Content Right Image -->
				<div class="col-lg-6 c_right_col order-lg-1 order-2">
					<div class="c_right_image d-flex flex-column align-items-center justify-content-center">
						<img src="images/racket.svg" alt="" style="height: 150px; width: auto">
					</div>
				</div>

				<!-- Content Right Content -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="c_right_content">
						<div class="section_title_container">
							<div class="section_title"><h2></h2></div>
						</div>
						<div class="c_right_text">
							<p style="font-size: 20px; text-align: justify;">“There may be people that have more talent than you, but there’s no excuse for anyone to work harder than you do.” </p>
							<p style="font-size: 15px; text-align: right;">– Derek Jeter</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Left -->

	<div class="c_left">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Content Left Content -->
				<div class="col-lg-6">
					<div class="c_left_content">

						<div class="content_list_2 c_left_list">
							<p style="font-size: 20px; text-align: justify;">“Ability is what your capable of doing. Motivation determines what you do. Attitude determines how well you do it” </p>
						</div>

					</div>
				</div>

				<!-- Content Left Image -->
				<div class="col-lg-6 c_left_col">
					<div class="c_left_image d-flex flex-column align-items-center justify-content-center">
						<img src="images/shuttle.svg" alt="" style="height: 150px; width: auto">
					</div>
				</div>
			</div>
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

					
		<div class="copyright_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p>Culaniban | Gabat </p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
	</footer>
</div>

<script src={{asset("js/jquery-3.2.1.min.js")}}></script>
<script src={{asset("styles/bootstrap-4.1.2/popper.js")}}></script>
<script src={{asset("styles/bootstrap-4.1.2/bootstrap.min.js")}}></script>
<script src={{asset("plugins/greensock/TweenMax.min.js")}}></script>
<script src={{asset("plugins/greensock/TimelineMax.min.js")}}></script>
<script src={{asset("plugins/scrollmagic/ScrollMagic.min.js")}}></script>
<script src={{asset("plugins/greensock/animation.gsap.min.js")}}></script>
<script src={{asset("plugins/greensock/ScrollToPlugin.min.js")}}></script>
<script src={{asset("plugins/OwlCarousel2-2.2.1/owl.carousel.js")}}></script>
<script src={{asset("plugins/easing/easing.js")}}></script>
<script src={{asset("plugins/progressbar/progressbar.min.js")}}></script>
<script src={{asset("plugins/parallax-js-master/parallax.min.js")}}></script>
<script src={{asset("js/custom.js")}}></script>
</body>
</html>