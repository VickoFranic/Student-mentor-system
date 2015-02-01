@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Login</title>
@stop

@section('content')

	@section('page')
			Mentorski sustav | Login
	@stop

	@if(Session::has('fail'))
		<div class="alert alert-fail">{{ Session::get('fail') }}</div>
	@endif

		<form role="form" method="POST" action="{{ URL::route('postLogin') }}">
			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				<label>E-mail: </label>
				<input name="email" type="text" class="form-control"></input>
				@if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
			</div>
			<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">	
				<label>Password: </label>
				<input name="password" type="password" class="form-control"></input>
				@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
			</div>
			{{ Form::token() }}
				<div class="col-md-4">
					<input type="submit" name="login" value="Login" class="btn btn-default"></input>
				</div>
		</form>	
@stop