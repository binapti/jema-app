<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>: : Jema</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/scrollbar/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style type="text/css">
			.hide{display: none;}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#" style="font-size: 30px;">Jema</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse navbar-right" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#" id="showUsers">Users <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Log Out</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="jema-app">
			<div class="signup">
			
			</div>
			
			<div class="login">
			
			</div>
			
			<div class="dashboard">
				<div class="mobile-users hide" id="usersOnline">
					<div style="height: 50px; background: #fff;">	
						<button type="button" class="close" id="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<b style="margin-left: 25px; margin-top: 30px;">Online Users</b>
					</div>
					<ul>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
					</ul>
				</div>
				<div class="left">
					<ul class="online-users">
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
						<li>User_Online</li>
					</ul>
				</div>
					
					
				<div class="right">
					<ul class="chat-pan mCustomScrollbar mCS-autoHide" data-mcs-theme="dark">
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
						<li>
							<b>User_name</b>
							<p>Ipsum lorem et inlar ret sectarat ilupsum</p>
						</li>
					</ul>
					<div class="card-footer">
						<form>
							<div class="form-group">
								<textarea class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Send" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/scrollbar/jquery.mCustomScrollbar.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#showUsers').click(function(){
					$('#usersOnline').removeClass('hide');
				});
				$('#close').click(function(){
					$('#usersOnline').addClass('hide');
				});
			});
		</script>
		<script>
    (function($){
        $(window).on("load",function(){
            $(".chat-pan").mCustomScrollbar();
        });
    })(jQuery);
</script>
	</body>
</html>
