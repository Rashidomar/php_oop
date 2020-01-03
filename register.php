<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3" id="signup_container">
			<form class="form-horizontal" method="post">
				<legend><h3>Register an account</h3></legend>
					<div class="form-group">
						<label class="col-lg-2 control-label">Name</label>
						<span id="message"></span>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password" id="password">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Confirm password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password_confirmation" id="con_password">
						</div>
					</div>
					<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary" id="reg" name="submit">Submit</button>
					</div>
			</form>
	</div>
    </body>
</html>