<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BuckIt Up</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript" src="/javascript/main.js"></script>
</head>
<body>
	<div class="header">	
		<header>
			<nav>
				<a class="logo" href="home">BuckIt Up</a>
				
				@if (!Auth::check())	
					<a class="logo" href="auth/login">BuckIt Up</a>
				@else
                	<a class="main" href="bucket">MyBuckIt</a>
				@endif

				<a class="main" href="new_bucket">Make List</a>
				<a class="main" href="all_items">Find Ideas</a>
				<a class="main" href="about">About</a>	

				@if (!Auth::check())	
					<a class="nav-login" href="auth/login">Login</a>		
					<a class="nav-signup" href="auth/register">Sign Up</a>
				@else
					<a class="nav-login" href="user">Account</a>		
					<a class="nav-signup" href="auth/logout">Logout</a>
				@endif			
			</nav>
		</header>		
	</div>
	<div class="hero">
		<div class="carousel">
			<div><img src="images/auroraborealis.jpg" alt=""></div>
			<div><img src="images/marathon.jpg" alt=""></div>
			<div><img src="images/greatwall.jpg" alt=""></div>
			<div><img src="images/rio.jpg" alt=""></div>
			<div><img src="images/oregon.jpg" alt=""></div>
			<div><img src="images/africa.jpg" alt=""></div>
		</div>
		<div>
			<h1>Your Dreams Await ...Turn Them Into Reality.</h1>
			@if (!Auth::check())
				<div class="buttons">
					<a class="signup" href="auth/register">Sign Up</a>
					<a class="login" href="auth/login">Login</a>		
				</div>
			@else 

			@endif
			<div class="inspire">
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</div>
	<div class="main-footer">
		<footer>
			<div>
				<a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
				<a href="#"><i class="fa fa-facebook-official fa-3x"></i></a>
				<a href="#"><i class="fa fa-instagram fa-3x"></i></a>
				<a href="#"><i class="fa fa-pinterest-square fa-3x"></i></i></a>
				<a href="#"><i class="fa fa-tumblr-square fa-3x"></i></a>
			</div>
		</footer>
	</div>
</body>
</html>