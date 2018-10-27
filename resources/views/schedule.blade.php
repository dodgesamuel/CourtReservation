<!DOCTYPE html>
<html lang="en">
<head>
<title>Centro Atletico - Schedule</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href={{asset("styles/bootstrap-4.1.2/bootstrap.min.css")}}>
<link href={{asset("plugins/font-awesome-4.7.0/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.carousel.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.theme.default.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/animate.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/contact.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/contact_responsive.css")}}>
<link rel="stylesheet" href={{asset("js/bootstrap-calendar-master/csscss/calendar.css")}}>
<style type="text/css" media="screen">
	.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}

.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}

.parsley-errors-list {
  margin: 2px 0 3px;
  padding: 0;
  list-style-type: none;
  font-size: 0.9em;
  line-height: 0.9em;
  opacity: 1;
  color: red;

  transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
}

.parsley-errors-list.filled {
  opacity: 1;
}
</style>
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
								<li><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
							<!-- 	<li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li> -->
								<li><a href="{{ url('/schedule') }}" class="nav-link">Schedule</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
	
		</div>
	</header>

	
	
	<!-- Contact -->

	<div class="contact" style="margin-top: 100px;">
		<div class="container">
			<div class="row">
				<div id="calendar"></div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
			<div>Need Help? Call Us </div>
			<div class="d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>0905-746-9567</div>
			</div>
		</div>
		<div class="footer_content">
			<div class="container">
				<div class="row footer_row">

					<!-- Footer Column -->
					
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
<script src={{asset("https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA")}}></script>
<script src={{asset("js/contact.js")}}></script>
 <script src={{asset("js/Parsley.js-2.8.1/dist/parsley.min.js")}}></script>
 <script src={{asset("js/sweetalert2-7.28.8/package/dist/sweetalert2.all.min.js")}}></script>

<script>

</script>
</body>
</html>