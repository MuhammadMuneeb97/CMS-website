@extends('layouts.app')

@section('content')
<section>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			@php $number = 0; @endphp
		@foreach($images as $row)
				<div class="carousel-item @php echo $n = ($number == 0) ? 'active' : ''; @endphp">
					<img src="images/{{$row->image}}" alt="{{$row->id}}">
				</div>
				@php $number++; @endphp
		@endforeach
	
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</section>
@endsection

<!--- Jumbotron -->
@section('jumbotron')
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
@endsection

<!--- Welcome Section -->
@section('welcome')
<section id="home">
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
@endsection

<!--- Three Column Section -->
@section('column')
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
@endsection
<!--- Two Column Section -->
@section('column1')
<section>
	<div class="container-fluid padding" id="about">
		<div class="row padding">
			<div class="col-lg-6">
			@foreach($datai as $row)
			
				{!!$row->text!!}
				<br>
				<a href="#" class="btn btn-primary">Learn More</a>
			</div>
			
			<div class="col-lg-6">
				<img src="datai/{{$row->image}}" alt="{{$row->id}}" class="img-fluid">
			</div>
			@endforeach
		</div>
	</div>
	<hr class="my-4">
	
</section>
@endsection
<!--- Fixed background -->
@section('fixed')
<section>
	<figure>
		<div class="fixed-wrap">
			<div id="fixed">
				
			</div>
		</div>
	</figure>
</section>
@endsection

<!--- Emoji Section -->
@section('emoji')
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
@endsection
  
<!--- Meet the team -->
@section('team')
<section id="team">
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
		@foreach($teamimage as $row)
			<div class="col-md-4">
			
				<div class="card">
				
					<img class="card-img-top" src="teamimage/{{$row->image}}" alt="{{$row->id}}">
					<div class="card-body">
						<h4 class="card-title">{{$row->name}}</h4>
						<p class="card-text">{!!$row->text!!}</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
					
				</div>
				
			 </div>
			 @endforeach
			<!--<div class="col-md-4">
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
			</div> -->
	
		</div>
		
	</div>
	
</section>
@endsection

		

<!--- Two Column Section -->
<!-- @section('column2')
<section id="about">
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
@endsection -->

<!--- Connect -->
@section('content1')
<section id="contact">
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
@endsection
