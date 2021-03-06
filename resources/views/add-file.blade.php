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

	
	<section>
		
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
		
	</section>
	<!--- Image Slider -->
<section>
	<div class="container">
		
    <div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1" ></li>
		<li data-target="#slides" data-slide-to="2" ></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ asset('website/img/background.png')}}" >
			<div class="carousel-caption">
				<h1 class="display-2">Bootstrap</h1>
				<h3>Complete Website Layout</h3>
				<button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="{{ asset('website/img/background2.png')}}" >
		</div>
		<div class="carousel-item">
			<img src="{{ asset('website/img/background3.png')}}" >
		</div>
	</div>
	<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
</div>
	</div>
</section>


<!--- Jumbotron -->
<section>
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
			</div>
		</div>
	</div>
</section>


<!--- Welcome Section -->
<section>
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Built With ease.</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">Welcome to my Bootstrap 4 website tutorial!
					Bootstrap is a free and open-source front-end library with HTML and CSS based designs.
				</p>
			</div>
		</div>
	</div>
</section>


<!--- Three Column Section -->
<section>
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-code"></i>
				<h3>HTML5</h3>
				<p>Buit with the latest version of HTML,HTML5.</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-bold"></i>
				<h3>BOOTSTRAP</h3>
				<p>Buit with the latest version of Bootstrap,Bootstrap4.</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fab fa-css3"></i>
				<h3>CSS3</h3>
				<p>Buit with the latest version of CSS,CSS3.</p>
			</div>
		</div>
		<hr class="my-4">
	</div>
	
</section>

<!--- Two Column Section -->
<section>
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6">
				<h2>If you build it...</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam ab error tempore qui deleniti? Culpa quaerat obcaecati dolore accusantium quo assumenda, reiciendis voluptas tenetur necessitatibus nam, adipisci similique maxime!
				</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatem maiores doloremque. Saepe officia aperiam quo voluptates vel dolor sit accusamus possimus maiores libero. Incidunt quae placeat corrupti ad fuga.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam impedit beatae temporibus a nisi debitis sit distinctio sunt maiores eos vero est, aliquid facilis laboriosam consequatur facere magnam qui dolore.</p>
				<br>
				<a href="#" class="btn btn-primary">Learn More</a>
			</div>
			<div class="col-lg-6">
				<img src="{{ asset('website/img/desk.png')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<hr class="my-4">
	
</section>

<!--- Fixed background -->
<section>
	<figure>
		<div class="fixed-wrap">
			<div id="fixed">
	
			</div>
		</div>
	</figure>
</section>


<!--- Emoji Section -->
<section>
	<button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun</button>
    <div class="collapse" id="emoji">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img src="{{ asset('website/img/gif/panda.gif')}}" class="gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="{{ asset('website/img/gif/poo.gif')}}" class="gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="{{ asset('website/img/gif/unicorn.gif')}}" class="gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="{{ asset('website/img/gif/chicken.gif')}}" class="gif">
			</div>
		</div>
	</div>
</div>
</section>

  
<!--- Meet the team -->
<section>
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Meet the Team</h1>
			</div>
			<hr>
		</div>
	</div>
</section>


<!--- Cards -->
<section>
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="{{ asset('website/img/team1.png')}}">
					<div class="card-body">
						<h4 class="card-title">John Doe</h4>
						<p class="card-text">John is an Internet interpreneur with almost 20 years of experience</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="{{ asset('website/img/team2.png')}}">
					<div class="card-body">
						<h4 class="card-title">Mary Jo</h4>
						<p class="card-text">Marry is a designer with almost 10 years of digital design experience</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="{{ asset('website/img/team3.png')}}">
					<div class="card-body">
						<h4 class="card-title">Phil Ho</h4>
						<p class="card-text">Phil Ho is a developer with over 5 years of web development experience</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
	
		</div>
	</div>
	
</section>

		

<!--- Two Column Section -->
<section>
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6">
				<h2>Our Philosphy</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam ab error tempore qui deleniti? Culpa quaerat obcaecati dolore accusantium quo assumenda, reiciendis voluptas tenetur necessitatibus nam, adipisci similique maxime!
				</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatem maiores doloremque. Saepe officia aperiam quo voluptates vel dolor sit accusamus possimus maiores libero. Incidunt quae placeat corrupti ad fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ullam optio, labore earum suscipit, nihil voluptates voluptas recusandae amet rerum quod ea obcaecati corporis necessitatibus. Quaerat eos assumenda iusto tenetur!</p>
				
				<br>
				
			</div>
			<div class="col-lg-6">
				<img src="{{ asset('website/img/bootstrap2.png')}}" class="img-fluid">
			</div>
		</div>
	</div>
	<div>
		<hr class="my-4">
	</div>
</section>


<!--- Connect -->
<section>
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
</section>


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


