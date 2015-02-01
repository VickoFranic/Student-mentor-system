@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Predmeti</title>
@stop

@section('content')

  		@section('page')
  			Mentorski sustav | Predmeti
  		@stop

  		<div class="panel-body col-md-6" style="overflow:auto;height:450px">
  			<div class="list-group">
  				@foreach($predmeti as $predmet)
	  				<p class="list-group-item">
	  						{{ $predmet->ime }}
                ({{ $predmet->kod }})
                  <a role="presentation" href="{{ URL::route('predmetDetails', array('id' => $predmet->id)) }}">Detalji</a>
                  <a role="presentation" href="{{ URL::route('predmetEdit', array('id' => $predmet->id)) }}">Edit</a>
	  				</p>
  				@endforeach
  			</div>
  		</div>

      <div class="col-md-6">
        <div class="panel-body col-md-6" style="overflow:auto;height:450px">
          <div class="list-group">
            <p class="list-group-item">
              <a role="presentation" href="{{ URL::route('predmetNew') }}">Dodaj novi predmet</a>
            </p>
        </div>
      </div>
      </div>
@stop
