<!DOCTYPE html>
<html lang="en">
<head>
<title>Centro Atletico - Reserve Now</title>
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
								<!-- <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li> -->
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
				<!-- Contact Form -->
				<div class="col-lg-6 contact_form_col">
					<div class="contact_form_container">
						<div class="contact_title">Personal Information</div>
						<form class="contact_form" id="reserve_form">
							@csrf
							<div class="row contact_row">
								<div class="col-lg-7">
									Name*
								</div>
								<div class="col-lg-7">
									<input type="text" class="contact_input" name="fname" placeholder="*First Name" required="required">
								</div>
								<div class="col-lg-7">
									<input type="text" class="contact_input" name="mname" placeholder="Middle Name">
								</div>
								<div class="col-lg-7">
									<input type="text" class="contact_input" name="sname" placeholder="*Last Name" required="required">
								</div>
								<div class="col-lg-7">
									Contact*
								</div>
								<div class="col-lg-7">
									<input type="text" class="contact_input" name="contactNumber" placeholder="*Contact Number" required="required" required data-parsley-error-message="Invalid Contact Number" data-parsley-type="digits" data-parsley-minLength="11" data-parsley-maxLength="11">
								</div>
								<div class="col-lg-7">
									<input type="email" class="contact_input" name="email" placeholder="*Email Address" required="required">
								</div>
								<div class="col-lg-7">
									Number of People Attending*
								</div>
								<div class="col-lg-7">
									<input type="number" class="contact_input" name="people" min='0' id="people" required="required">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6 contact_form_col">
					<div class="contact_form_container">
						<div class="contact_title">Schedule</div>
						<form class="contact_form" id="reserve_form_schedule">
							@csrf
							<div class="row contact_row">
								<div class="col-lg-7">
									Date*
								</div>
								<div class="col-lg-7">
									<input type="date" class="contact_input" name="date" required="required">
								</div>
								<div class="col-lg-7">
									Start Time*
								</div>
								<div class="col-lg-7">
									<input type="time" class="contact_input" name="startTime" required="required">
								</div>
								<div class="col-lg-7">
									End Time*
								</div>
								<div class="col-lg-7">
									<input type="time" class="contact_input" name="endTime" required="required">
								</div>
								<div class="col-lg-7">
									Court*
								</div>
								<div class="col-lg-7">
									<select name="court" class="contact_input" required>
					                  <option value="">-Select Court-</option>
					                  <option value="1">Court 1</option>
					                  <option value="2">Court 2</option>
					                  <option value="3">Court 3</option>
					                  <option value="4">Court 4</option>
					                  <option value="5">Court 5</option>
					                  <option value="6">Court 6</option>
					                  <option value="7">Court 7</option>
					                  <option value="8">Court 8</option>
					                </select>
								</div>
								<div class="col-lg-7">
									Total Assessment*
								</div>
								<div class="col-lg-7">
									<input type="text" class="contact_input" name="totalAssessment" required="required">
								</div>
								<div class="col-lg-7">
									Payment Requirement*
								</div>
								<div class="col-lg-7">
									<input type="text" class="contact_input" name="payment" required="required">
								</div>
							</div>
							
						</form>
					</div>
				</div>
				
			</div>
			<center>
					<button class="contact_button trans_200" id="btnNext" style="margin-top: 50px;">Next</button>
			</center>
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
	$(document).ready(function(){
		$('#reserve_form').parsley();
		$('#reserve_form_schedule').parsley();
		$('#agreeForm').parsley();
		$('#btnNext').on('click', function(){
			$('#reserve_form').parsley().validate();
			$('#reserve_form_schedule').parsley().validate();
			if ($('#reserve_form').parsley().isValid() && $('#reserve_form_schedule').parsley().isValid()){
				$('#termsConditionModal').modal('show');
			}
			
		});

		$('#agreeForm').submit(function(e){
			e.preventDefault();
			$('#agreeForm').parsley().validate();
			if ($('#agreeForm').parsley().isValid()) {
				$.ajax({
					url: '/reserve/user',
					type: 'post',
					data: $('#reserve_form').serialize() + '&' + $('#reserve_form_schedule').serialize(),
					success: function(output){
						$('#termsConditionModal').modal('hide');
			            swal({
			                type: 'success',
			                title: 'SUCCESS',
			                text: 'Successfully reserved',
			             })
			            .then((value)=>{
			            	location.reload(true);
			            });
					}
				});
			}
			
		});

		$('#people').bind('keyup mouseup', function () {
		              
		});
	});
</script>
</body>
</html>