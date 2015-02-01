@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Register</title>
@stop

@section('content')
	@section('page')
		Mentorski sustav | Register
	@stop 

			<form role="form" method="POST" action="{{ URL::route('postCreate') }}">
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
				<div class="form-group">	
					<label class="col-md-1">Status:</label>
					<select name="status" class="col-md-4">
					<option value="redovni">Redovni</option>
					<option value="izvanredni">Izvanredni</option>
					</select>
				</div>
					{{ Form::token() }}
					<div class="col-md-4">
						<input type="submit" name="register" value="Register" class="btn btn-default"></input>
					</div>
			</form>	
@stop