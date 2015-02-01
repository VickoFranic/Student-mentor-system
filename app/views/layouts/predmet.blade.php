@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Predmeti</title>
@stop

@section('content')

  		@section('page')
  			Mentorski sustav | Detalji predmeta
  		@stop

  		<div class="panel-body col-md-6">
  			<div class="list-group">
  			   <p class="list-group-item">
              Id: <b>{{ $predmet->id }}</b>
            </p>
            <p class="list-group-item">
              Ime: <b>{{ $predmet->ime }}</b>
            </p>
            <p class="list-group-item">
              Kod: <b>{{ $predmet->kod }}</b>
            </p>
            <p class="list-group-item">
              Program: <b>{{ $predmet->program }}</b>
            </p>
            <p class="list-group-item">
              Bodovi: <b>{{ $predmet->bodovi }}</b>
            </p>
            <p class="list-group-item">
              Semestar(redovni): <b>{{ $predmet->sem_redovni }}</b>
            </p>
            <p class="list-group-item">
              Semestar(izvanredni): <b>{{ $predmet->sem_izvanredni }}</b>
            </p>
            <p class="list-group-item">
              Izborni: <b>{{ $predmet->izborni }}</b>
            </p>
          </div>
  		</div>
@stop
