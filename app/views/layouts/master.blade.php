<!doctype html>
<html lang="en">
<head>
	@section('head')
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	@show
</head>
<body>
	
			<div class="container">
					<div class="panel panel-default alert alert-info">
	  					<div class="panel-body">
	  						<h3>
	  							@yield('page')
	  						</h3>
	  						<img src="http://projekt.vfdesign.org/moodle.png" class="img-responsive img-circle" alt="Responsive image" style="float:right">
	  					</div>
	  				</div>
			
					@if(!Auth::check())
						<nav>
							<ul class="nav nav-tabs">
								<li><a role="presentation" href="{{ URL::route('getCreate') }}">Registracija</a></li>
								<li><a role="presentation" href="{{ URL::route('getLogin') }}">Login</a></li>
							</ul>
						</nav>
						
					@elseif(Auth::check())
							<nav>
								<ul class="nav nav-tabs">
									@if(Auth::user()->role == 'student')
										<li role="presentation"><a href="{{ URL::route('logout') }}">Logout</a></li>
									@elseif(Auth::user()->role = 'mentor')
										<li role="presentation"><a href="{{ URL::route('logout') }}">Logout</a></li>
										<li role="presentation"><a href="{{ URL::route('predmeti') }}">Predmeti</a></li>
										<li role="presentation"><a href="{{ URL::route('studenti') }}">Studenti</a></li>
									@endif
								</ul>
							</nav>
					@endif
		
					@yield('content')
				</div>
		
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
