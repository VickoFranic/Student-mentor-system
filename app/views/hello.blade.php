@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Home</title>
@stop

@section('content')

  		@section('page')
  			Mentorski sustav | Home
  		@stop

  		<div class="jumbotron" id="home">
  			<h1 align="center">Dobrodošli !</h1>
  		</div>

	@if(Session::has('user'))
		<div class="alert alert-success">{{ "Korisnik sa email adresom " . Session::get('user') . " je kreiran ! Možete se ulogirati u sustav."; }}</div>
			<script type="text/javascript">
				document.getElementById("home").style.display = "none";
			</script>

	@elseif(Session::has('fail'))
		<div class="alert alert-fail">{{ Session::get('fail') }}</div>
	@endif
@stop