<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>

	</title>
	<link rel="stylesheet" type="text/css" href="{{asset('project_asset/css/style.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<body class="container">
		<div class="header">
			<video autoplay muted loop id="myVideo">
				<source src="{{asset('project_asset/video/login.mp4')}}" type="video/mp4">
			</video>
			<div class="navbar">
				<ul>
					<li><a class="active" href="{{url('home')}}">Home</a></li>
					<li><a href="#news">News</a></li>
					<li class="logo"><a href="index.html">Viet Rolex</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#about">About</a></li>
					<div class="navbar-sig">
						<ul>


							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</ul>

			</div>
			<div class="caption-log">
				<ul>
					<li>
						<p>Welcome To</p>
					</li>
					<li>
						<h1>VIET ROLEX</h1>
					</li>
				</ul>
				<h3>Please choose login or logout</h3>
				<a href="{{url('register')}}">Sign Up</button>
					<a href="{{url('login')}}">Sign In</button>

			</div>



		</div>





	</body>


</body>

</html>
