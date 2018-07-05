<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>: : Sign Up</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#" style="font-size:30px;">Jema</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse navbar-right" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" href="#">Signup</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Login</a>
				</li>
			</ul>
		</div>
	</nav>
	<div style="text-align:center;padding-top:5px; margin-top:30px;">
		<h3>Sign Up form</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="login">
					<form>
						<div class="form-group">
							<label class="col-form-label" for="formGroupExampleInput">Username:</label>
							<input type="text" class="form-control" id="Username" placeholder="Username">
						</div>
						<div class="form-group">
							<label class="col-form-label" for="formGroupExampleInput2">Password:</label>
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<div class="form-group">
							<label class="col-form-label" for="formGroupExampleInput2">Email:</label>
							<input type="Email" class="form-control" id="Email" placeholder="Email">
						</div>
						<button type="Login" class="btn btn-primary btn-block">Sign Up</button>
					</form>
					Already have an account?<a href="#"> Click here</a>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>