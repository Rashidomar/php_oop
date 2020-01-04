<?php
	require "handler.php";

	#creating a user object
	$user = new User();

	if(isset($_POST['logIn']))
	{
		$username = $_POST['name'];
		$password = $_POST['password'];
		$user->user_login($username, $password);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3" id="login_container">
			<form class="form-horizontal" method="post">
				<legend><h3>Log In</h3></legend>
					<div class="form-group">
						<label class="col-lg-2 control-label">Name</label>
						<span id="message"></span>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password" id="password">
						</div>
					</div>
					<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary" id="login" name="logIn">login</button>
						<a href="register.php" class="btn btn-primary" >Click to Sin Up</a>
						<a href="#" class="btn btn-primary">forgetten password </a>
					</div>
			</form>
	</div>
    </body>
</html>