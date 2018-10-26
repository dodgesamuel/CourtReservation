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
								<li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
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
		<div class="domain_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="domain_search">
							<div class="domain_search_background"></div>
							<div class="domain_search_overlay"></div>
							<form action="#" class="domain_search_form" id="domain_search_form">
								<input type="text" class="domain_search_input" placeholder="Your domain name" required="required">
								<div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-center">
									<div class="domain_search_selected">.com</div>
									<ul>
										<li>.com</li>
										<li>.io</li>
										<li>.net</li>
									</ul>
								</div>
								<button class="domain_search_button">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Domain Pricing -->

	<div class="domain_pricing">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="domain_pricing_content">
						<ul class="d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center">
							<li><a href="#"><span>.</span>com<span>$3.99</span></a></li>
							<li><a href="#"><span>.</span>net<span>$1.99</span></a></li>
							<li><a href="#"><span>.</span>org<span>$2.99</span></a></li>
							<li><a href="#"><span>.</span>io<span>$3.99</span></a></li>
							<li><a href="#"><span>.</span>info<span>$13.99</span></a></li>
						</ul>
					</div>
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
							<div class="ib_icon"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Cloud Hosting</div>
						</div>
						<div class="ib_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/icon_9.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Cloud Hosting</div>
						</div>
						<div class="ib_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/icon_10.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Cloud Hosting</div>
						</div>
						<div class="ib_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/icon_11.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Cloud Hosting</div>
						</div>
						<div class="ib_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/icon_12.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Cloud Hosting</div>
						</div>
						<div class="ib_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-md-6">
					<div class="icon_box">
						<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="ib_icon"><img src="images/icon_13.svg" alt="https://www.flaticon.com/authors/srip"></div>
							<div class="ib_title">Cloud Hosting</div>
						</div>
						<div class="ib_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="button services_button ml-auto mr-auto"><a href="#">see all</a></div>
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

				<!-- Boxes Content -->
				<div class="col-lg-6">
					<div class="boxes_content">
						<div class="section_title"><h2>How to choose a good plan</h2></div>
						<div class="boxes_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet. Donec mi neque, pretium eu quam at, facilisis venenatis tortor. Suspendisse potenti.</p>
						</div>
						<!-- Accordions -->
						<div class="accordions">

							<!-- Accordion -->
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div></div>
								<div class="accordion_panel">
									<div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.. Cconsectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
									</div>
								</div>
							</div>
							
							<!-- Accordion -->
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Maecenas ornare, arcu at lobortis ultrices</div></div>
								<div class="accordion_panel">
									<div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.. Cconsectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
									</div>
								</div>
							</div>

							<!-- Accordion -->
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Arcu at lobortis ultrices, neque erat euismod erat</div></div>
								<div class="accordion_panel">
									<div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.. Cconsectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Features Content -->
				<div class="col-lg-7">
					<div class="features_content">
						
						<!-- Feature -->
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div><div class="feature_icon"><img src="images/icon_6.svg" alt=""></div></div>
							<div class="feature_content">
								<div class="feature_title">Arcu at lobortis ultrices, nequt erat</div>
								<div class="feature_text">
									<p>Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div><div class="feature_icon"><img src="images/icon_14.svg" alt=""></div></div>
							<div class="feature_content">
								<div class="feature_title">Arcu at lobortis ultrices, nequt erat</div>
								<div class="feature_text">
									<p>Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div><div class="feature_icon"><img src="images/icon_15.svg" alt=""></div></div>
							<div class="feature_content">
								<div class="feature_title">Arcu at lobortis ultrices, nequt erat</div>
								<div class="feature_text">
									<p>Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Extra -->
				<div class="col-lg-5">
					<div class="extra">
						<div class="extra_content">
							<div class="extra_image text-center"><img src="images/extra.png" alt=""></div>
							<div class="extra_title"><span>30</span> Days Money Back Guarantee</div>
							<div class="extra_text">
								<p>Aliquam erat volutpat. Sed efficitur diam ut inte rdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
							</div>
						</div>
						<div class="button extra_button"><a href="#">learn more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
			<div>Need Help? Call Us 24/7</div>
			<div class="d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>652-345 3222 11</div>
			</div>
		</div>
		<div class="footer_content">
			<div class="container">
				<div class="row footer_row">

					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="footer_title">Hosting Packages</div>
						<div class="footer_list">
							<ul>
								<li><a href="#">Cloud Hosting</a></li>
								<li><a href="#">Web Hosting</a></li>
								<li><a href="#">Reseller Hosting</a></li>
								<li><a href="#">VPS Hosting</a></li>
								<li><a href="#">Dedicated Servers</a></li>
								<li><a href="#">Windows Hosting</a></li>
								<li><a href="#">Linux Servers</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="footer_title">Our Services</div>
						<div class="footer_list">
							<ul>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Logo Design</a></li>
								<li><a href="#">Domains Register</a></li>
								<li><a href="#">Search Advertising</a></li>
								<li><a href="#">Email Marketing</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="footer_title">Useful Links</div>
						<div class="footer_list">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="logo footer_logo"><a href="#"><span>b</span>Host</a></div>
						<div class="footer_info">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Address</div></div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Phone</div></div>
									<div>+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
						<div class="cards">
							<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li><a href="#"><img src="images/card_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_4.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_5.png" alt=""></a></li>
							</ul>
						</div>
						<div class="social footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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