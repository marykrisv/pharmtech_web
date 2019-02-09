<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

	<style type="text/css">

	body {
		background-color: #36d7b7;
	}

	.loginPanel{
		margin: auto;
		height: 400px;
		width: 100%;
		background-color: #ffffff;
		position: relative;
		top: 150px;
		margin-bottom: 80px;
	}

	.login{
		padding: 15px;
		margin: auto;
		text-align: center;
		top: 80px;
		position: relative;

	}

	.forgot{		
		position: relative;
		top: 80px;
		font-size: 13px;
	}

	.inputStyle {
		width:100%;
		height:35px;
		margin-bottom:20px;
	}

	.loginButton {
		width:100%;
		height:35px;
		background-color: #38ada9;
	}

	.forgotPassword:hover {
		color:green;
		cursor: default;
	}

	.register:hover {
		color:green;
		cursor: default;
	}
	</style>
</head>
<body>
<!-- <?php echo base_url?> -->
<div class="container-fluid">
		<div class="row">
			<div class="col-sm-offset-4 col-sm-4 col-xs-10 col-xs-offset-1">
				<div class="loginPanel">
					<div class="login">
						<form>
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<input class="inputStyle form-control" type="text" name="username" placeholder="Username">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<input class="inputStyle form-control" type="password" name="password" placeholder="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<input class="btn btn-info btn-md loginButton" type="button" name="loginbutton" value="LOGIN">
								</div>
							</div>
						</form>
						<div class="row">
							<br>
							<div class="col-sm-10 col-sm-offset-1">
								<span class="forgotPassword">Forgot Password? </span>
								<span> | </span>
								<span class="register">Register</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>