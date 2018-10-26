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
								<li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
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
						<div class="contact_info">
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

<!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="termsConditionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="agreeForm">
            @csrf
          <div class="modal-body">
            <center>
               TERMS AND CONDITION
            </center>
            <pre>
             
• Youth under 12 years old must be accompanied by a parent/guardian in all areas of the facility
, unless they are participating in an organized program or activity.
• Alcoholic beverages are strictly prohibited.
• Centro Atletico is a smoke free facility.
• Centro Atletico or staff is not responsible for any lost or stolen articles.
 It is strongly recommended that all belongings be placed in a locker and secured 
 with a personal lock. Please do not bring valuables into the facility. 
• Children 4 years of age or older may not use the locker room of the opposite sex. 
Please make appropriate arrangements to avoid any problems.
• Eating and drinking is permitted in designated areas only.
• No spitting, chewing tobacco or alcohol beverages in the facility.
• Only gum sole shoes are allowed in the activity areas of the building.
 Dark soled running shoes, turf shoes, spiked shoes and any other types of shoes which mark 
 the floors are absolutely prohibited. Muddy or dirty shoes are not permitted. 
 Participants are asked to please change into a separate, clean pair of shoes for their 
 indoor recreational use. 
• Proper behavior is required at all times in the facility.
• The following activities are not permitted and will result in suspension, expulsion or 
termination of membership and/or use of the facility.

            </pre>
            <p>
              <input type="checkbox" name="agree" value="1" required data-parsley-errors-messages-disabled> I hereby acknowledge that I have read, understand and agree to the Terms and Conditions
            </p>
              
            
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="btnOk">OK</button>
            </form>
          </div>
        </div>
      </div>
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