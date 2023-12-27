<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Login</title>
		
		<!-- Error CSS -->
		<link href="<?php echo base_url();?>css/login.css" rel="stylesheet" media="screen">

		<!-- Animate CSS -->
		<link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" media="screen">

		<!-- Font Awesome -->
		<link href="<?php echo base_url();?>fonts/font-awesome.min.css" rel="stylesheet">
		<style>
			body{
				background-image: url('<?php echo base_url();?>img/bgimg.jpg');
				background-repeat: no-repeat;
				background-size:cover;
			}
		</style>
	</head>
	<body>
		<form action="index.html" id="wrapper">
			<div id="box" class="animated bounceIn">
				<div id="top_header">
					<a href="#">
						<img class="logo" src="<?php echo base_url();?>img/logo.png" alt="logo">
					</a>
					<h5>
						Sign in to continue to your<br />
						Admin Panel.
					</h5>
				</div>
				<div id="inputs">
					<div class="form-control">
						<input type="text" placeholder="Email">
						<i class="fa fa-envelope-o"></i>
					</div>
					<div class="form-control">
						<input type="password" placeholder="Password">
						<i class="fa fa-key"></i>
					</div>
					<input type="submit" value="Sign In">
				</div>
				<!--<div id="bottom">
					<div class="squared-check">
						<input type="checkbox" value="None" id="remember" name="check" checked="">
						<label for="remember"></label>
						<div class="cb-label">Remember</div>
					</div>
					<a class="right_a" href="#">Forgot password?</a>
				</div>-->
			</div>
		</form>
	</body>
</html>