<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href={{asset("images/icons/favicon.ico")}}/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("vendor/bootstrap/css/bootstrap.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("fonts/iconic/css/material-design-iconic-font.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("vendor/animate/animate.css")}}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset("vendor/css-hamburgers/hamburgers.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("vendor/animsition/css/animsition.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("vendor/select2/select2.min.css")}}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset("vendor/daterangepicker/daterangepicker.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("css/util.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("css/main.css")}}>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="loginForm">
					@csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btnLogin">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src={{asset("vendor/jquery/jquery-3.2.1.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("vendor/animsition/js/animsition.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("vendor/bootstrap/js/popper.js")}}></script>
	<script src={{asset("vendor/bootstrap/js/bootstrap.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("vendor/select2/select2.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("vendor/daterangepicker/moment.min.js")}}></script>
	<script src={{asset("vendor/daterangepicker/daterangepicker.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("vendor/countdowntime/countdowntime.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("js/main.js")}}></script>
	<script src={{asset("js/sweetalert2-7.28.8/package/dist/sweetalert2.all.min.js")}}></script>

	<script>
		$(document).ready(function(){
			$('#btnLogin').click(function(e){
				e.preventDefault();
				$.ajax({
					url: '/login/admin',
					type: 'post',
					data: $('#loginForm').serialize(),
					success: function(output){
						 if (output.title == 'error') {
						 	swal({
				                type: output.title,
				                title: output.title,
				                text: output.text,
			             	})
						 }
						 else{
						 	window.location.href = output.location
						 }
					}
				});
			});
		});
	</script>

</body>
</html>