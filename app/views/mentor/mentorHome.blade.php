@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Home</title>
@stop

@section('content')

  		@section('page')
  			Mentorski sustav | Mentor home
  		@stop

  		<div class="alert alert-warning"><h2>Dobrodošli !</h2></div>
  		<div class="alert alert-success"><h3>Mentor: {{ Auth::user()->email }} </h3>
@stop