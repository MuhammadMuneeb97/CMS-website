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
				<!-- Topbar Search -->
				<!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
				<div class="collapse navbar-collapse" id="navbarNav">
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item active">
					  <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
					  <a class="nav-link" href="{{ route('home')}}">Dashboard</a>
					</li>
					<li class="nav-item active">
					  <a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item active">
					  <a class="nav-link" href="#team">Team</a>
					</li>
					  <li class="nav-item active">
						<a class="nav-link" href="#contact">Contact Us</a>
					  </li>
					  
                      @guest
                            @if (Route::has('login'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
                                    </a>
								@can('manage-users')
									<a class="dropdown-item" href="{{route('adminusers.index')}}">
									User Management
									</a>
								@endcan
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
				  </ul>
				</div>
			  </nav>
		
	
	<!--- Image Slider -->
	<main class="py-4">
	
	@include('partials.alerts')
@yield('content')
@yield('jumbotron')
@yield('welcome')
@yield('column')
@yield('column1')
@yield('fixed')
@yield('emoji')
@yield('team')
<!-- @yield('column2') -->
@yield('content1')
@yield('users')

</main>


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


