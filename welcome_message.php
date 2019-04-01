<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/it/job/assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/it/job/assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/it/job/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/it/job/assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/it/job/assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/it/job/assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/it/job/assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/it/job/assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<html lang="en">
<body>	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/it/job/assets/login/images/img-01.png" alt="IMG">
				</div>
				<form id="login" name="login" method="post" action="index.php/Welcome/login" class="login100-form validate-form">
					<span class="login100-form-title">
						JOB ASSIGNMENT
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" placeholder="Username" autofocus="" required="" type="text" name="user"> 
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" id="key" placeholder="Password" required="" type="password" name="key">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="/it/job/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/it/job/assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/it/job/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/it/job/assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/itjob/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/it/job/assets/login/js/main.js"></script>

</body>
</html>