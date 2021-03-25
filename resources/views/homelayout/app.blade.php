<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css?v=1" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('website/style.css')}}">
</head>
<body>

	
	
		
			<nav class="navbar navbar-expand-lg navbar-light bg-light stickey-top">
				<a class="navbar-brand" href="#"><img src="{{ asset('website/img/logo.png')}}"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item active">
					  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
					  <a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item active">
					  <a class="nav-link" href="#">Team</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Services</a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="#">Contact Us</a>
					  </li>
					  <li class="nav-item active">
						  <a class="nav-link "href="#">Login</a>
					  </li>
					
				  </ul>
				</div>
			  </nav>
		
	
	<!--- Image Slider -->
@yield('content')

<!--- Footer -->

	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="{{ asset('website/img/w3newbie.png')}}">
					<hr class="light">
					<p>555-555-555</p>
					<p>website@gmail.com</p>
					<p>100 Street Name</p>
					<p>City, State, 0000</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Our hours</h5>
					<hr class="light">
					<p>Monday: 9am - 5pm</p>
					<p>Saturday: 10am - 4pm</p>
					<p>Sunday: Closed</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Services Area</h5>
					<hr class="light">
					<p>City, State, 0000</p>
					<p>City, State, 0000</p>
					<p>City, State, 0000</p>
					<p>City, State, 0000</p>
				</div>
				<div class="col-12">
					<hr class="light-100">
					<h5>&copy w3newbie.com</h5>
				</div>
			</div>
		</div>
		</footer>




</body>
</html>




<!-- View in Browser: Drew's #1 Trending YouTube Tutorial -->
<!-- <div class="youtube-tutorial">
	<a href="http://w3n.link/bundle-bonus-playlist" target="_blank" style="cursor: pointer!important;">
    <img src="https://w3newbie.com/wp-content/uploads/12-site-bundle-banner.png" style="max-width: 100%; position: absolute; bottom: 0;">
  </a>
</div> -->
<!-- End View in Browser: Drew's #1 Trending YouTube Tutorial -->


