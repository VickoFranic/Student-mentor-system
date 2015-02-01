@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Mentor</title>
@stop

@section('content')

  		@section('page')
  			Mentorski sustav | Studenti
  		@stop

  		<div class="panel-body col-md-6" style="overflow:auto;height:450px;">
  			<div class="list-group">
  				@foreach($studenti as $student)
	  				<p class="list-group-item">
						<a role="presentation" href="{{ URL::route('edit', array('id' => $student->id)) }}">{{ $student->email }}</a>
	  				</p>
  				@endforeach
  			</div>
  		</div>


@stop