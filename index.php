<?php


function say_hello($firstname, $lastname)
{
    return $firstname . " ".  $lastname;

}

$firstname = "Rashid";
$lastname = "Omar";


echo $prt = say_hello($lastname, $firstname);

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
						<button type="submit" class="btn btn-primary" id="login" name="logIn" >login</button>
						<button type="submit" class="btn btn-primary" id="login" name="admin" >Click to Sin Up</button>
						<button type="submit" class="btn btn-primary" id="login" name="admin" >forgetten password</button>
					</div>
			</form>
	</div>
    </body>
</html>