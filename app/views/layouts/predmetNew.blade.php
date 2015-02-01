@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Predmeti</title>
@stop

@section('content')

  		@section('page')
  			Mentorski sustav | Novi predmet
  		@stop

      <div class="panel-body col-md-4">
        <form role="form" method="POST" action="{{ URL::route('predmetSave') }}">
          <div class="form-group">
            <label>Ime:</label>
            <input type="text" value="{{ Input::old('ime') }}" name="ime">
          </div>
          <div class="form-group">
            <label>Kod:</label>
            <input type="text" value="{{ Input::old('kod') }}" name="kod">
          </div>
          <div class="form-group">
            <label>Program:</label>
            <input type="text" value="{{ Input::old('program') }}" name="program">
          </div>
          <div class="form-group">
            <label>Bodovi:</label>
            <input type="text" value="{{ Input::old('bodovi') }}" name="bodovi">
          </div>
          <div class="form-group">
            <label>Semestar(redovni):</label>
            <input type="text" value="{{ Input::old('sem_redovni') }}" name="sem_redovni">
          </div>
          <div class="form-group">
            <label>Semestar(izvanredni):</label>
            <input type="text" value="{{ Input::old('sem_izvanredni') }}" name="sem_izvanredni">
          </div>
         <div class="form-group"> 
          <label class="col-md-3">Izborni:</label>
            <input type="radio" value="da" name="izborni">Da</radio>
            <input type="radio" value="ne" name="izborni">Ne</radio>
        </div>
       
          <input type="submit" name="submit" value="Save" class="btn btn-default"></input>
        </form>
      </div>

      <div class="col-md-4">
        @if($errors->has())
          @foreach($errors->all() as $e)
            <p>{{ $e }}</p>
          @endforeach
        @endif

        @if(Session::has('predmet'))
          <div class="alert alert-success">Predmet {{ Session::get('predmet') }} uspješno sačuvan !</div>
        @endif
      </div>
@stop
