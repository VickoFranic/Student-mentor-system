@extends('layouts.master')

@section('head')
	@parent
		<title>Mentorski sustav | Home</title>

		@if(Auth::user()->role == 'student')
			<script>
				$(document).ready(function() {
					$("button[name='dodaj']").click(function() {
						var id = ($(this).val());
					   	$.get('/student/add?id=' + id, function() {
					   		location.reload('true');
					   	}); 
					});

					$("button[name='izbrisi']").click(function() {
					    var id = ($(this).val());
					   	$.get('/student/remove?id=' + id, function() {
					   		location.reload('true');
					   	});
					});

					$("button[name='polozen']").click(function() {
					    var id = ($(this).val());
					   	$.get('/student/check?id=' + id, function() {
					   		location.reload('true');
					   	});
					});
				});
			</script>

		@elseif(Auth::user()->role == 'mentor')
			<script>
				$(document).ready(function() {
					$("button[name='dodaj']").click(function() {
						var id = ($(this).val());
						var st_id = ($("button[name='st_id']").val());
					   	$.get('/mentor/studenti/' + st_id + '/add?id=' + id, function() {
					   		location.reload('true');
					   	}); 
					});

					$("button[name='izbrisi']").click(function() {
					    var id = ($(this).val());
					    var st_id = ($("button[name='st_id']").val());
					   	$.get('/mentor/studenti/' + st_id + '/remove?id=' + id, function() {
					   		location.reload('true');
					   	});
					});

					$("button[name='polozen']").click(function() {
					    var id = ($(this).val());
					    var st_id = ($("button[name='st_id']").val());
					   	$.get('/mentor/studenti/' + st_id + '/check?id=' + id, function() {
					   		location.reload('true');
					   	});
					});
				});
			</script>
		@endif

@stop

@section('content')
  		@section('page')
  			Mentorski sustav | Student
  		@stop

  				<form>
  					<div class="col-md-12">
  						<div class="col-md-6 alert alert-success text-center"><p>Predmeti:</p></div>
  						<div class="col-md-5 alert alert-success text-center col-md-offset-1"><p>Student: {{ $student->email }}</p></div>
  						<button name="st_id" style="display:none" value="{{ $student->id }}"></button>
  					</div>

	  				<div class="panel-body col-md-6" style="height:380px;overflow:auto;">
		  				<div class="list-group">
			  				@foreach($predmeti as $predmet)
			  						<p class="list-group-item">
			  							<button name="dodaj" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  								<span class="glyphicon glyphicon-plus"></span>
			  							</button>
			  							{{ $predmet->ime }}
			  						</p>
			  				@endforeach
			  			</div>
			  		</div>

			  		<div class="panel-body col-md-5 col-md-offset-1">
			  			<div class="list-group">
				  		<h4>Semestar 1:</h4>
				  			@foreach($upisi as $upis)
				  				@foreach($predmeti as $predmet)
					  					@if(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '1') && ($upis->status == 'passed'))
				  							<p class="list-group-item">
				  								<button type="button" class="btn btn-default btn-sm">
			  										<span class="glyphicon glyphicon-ok"></span>
			  									</button>
			  								{{ $predmet->ime }}</p>
			  							
			  							@elseif(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '1') && ($upis->status == 'enrolled'))			
			  								<p class="list-group-item">
				  								<button name="polozen" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-check"></span>
			  									</button>
			  									<button name="izbrisi" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-remove"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@endif
			  					@endforeach
			  				@endforeach
			  			</div>

			  			<div class="list-group">
				  		<h4>Semestar 2:</h4>
				  			@foreach($upisi as $upis)
				  				@foreach($predmeti as $predmet)
					  					@if(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '2') && ($upis->status == 'passed'))
				  							<p class="list-group-item">
				  								<button type="button" class="btn btn-default btn-sm">
			  										<span class="glyphicon glyphicon-ok"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						
				  						@elseif(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '2') && ($upis->status == 'enrolled'))			
			  								<p class="list-group-item">
				  								<button name="polozen" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-check"></span>
			  									</button>
			  									<button name="izbrisi" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-remove"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@endif
			  					@endforeach
			  				@endforeach
			  			</div>
						
						<div class="list-group">
				  		<h4>Semestar 3:</h4>
				  			@foreach($upisi as $upis)
				  				@foreach($predmeti as $predmet)
					  					@if(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '3') && ($upis->status == 'passed'))
				  							<p class="list-group-item">
				  								<button type="button" class="btn btn-default btn-sm">
			  										<span class="glyphicon glyphicon-ok"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>

				  						@elseif(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '3') && ($upis->status == 'enrolled'))			
			  								<p class="list-group-item">
				  								<button name="polozen" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-check"></span>
			  									</button>
			  									<button name="izbrisi" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-remove"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@endif
			  					@endforeach
			  				@endforeach
			  			</div>			

			  			<div class="list-group">
				  		<h4>Semestar 4:</h4>
				  			@foreach($upisi as $upis)
				  				@foreach($predmeti as $predmet)
					  					@if(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '4') && ($upis->status == 'passed'))
				  							<p class="list-group-item">
				  								<button type="button" class="btn btn-default btn-sm">
			  										<span class="glyphicon glyphicon-ok"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@elseif(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '4') && ($upis->status == 'enrolled'))			
			  								<p class="list-group-item">
				  								<button name="polozen" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-check"></span>
			  									</button>
			  									<button name="izbrisi" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-remove"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@endif
			  					@endforeach
			  				@endforeach
			  			</div>  		

			  			<div class="list-group">
				  		<h4>Semestar 5:</h4>
				  			@foreach($upisi as $upis)
				  				@foreach($predmeti as $predmet)
					  					@if(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '5') && ($upis->status == 'passed'))
				  							<p class="list-group-item">
				  								<button type="button" class="btn btn-default btn-sm">
			  										<span class="glyphicon glyphicon-ok"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@elseif(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '5') && ($upis->status == 'enrolled'))			
			  								<p class="list-group-item">
				  								<button name="polozen" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-check"></span>
			  									</button>
			  									<button name="izbrisi" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-remove"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@endif
			  					@endforeach
			  				@endforeach
			  			</div>	

			  			<div class="list-group">
				  		<h4>Semestar 6:</h4>
				  			@foreach($upisi as $upis)
				  				@foreach($predmeti as $predmet)
					  					@if(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '6') && ($upis->status == 'passed'))
				  							<p class="list-group-item">
				  								<button type="button" class="btn btn-default btn-sm">
			  										<span class="glyphicon glyphicon-ok"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@elseif(($upis->predmet_id == $predmet->id) && ($predmet->sem_redovni == '6') && ($upis->status == 'enrolled'))			
			  								<p class="list-group-item">
				  								<button name="polozen" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-check"></span>
			  									</button>
			  									<button name="izbrisi" type="button" class="btn btn-default btn-sm" value="{{ $predmet->id }}">
			  										<span class="glyphicon glyphicon-remove"></span>
			  									</button>
				  								{{ $predmet->ime }}</p>
				  						@endif
			  					@endforeach
			  				@endforeach
			  			</div>	
				  	</div>
				</form>
	  	
@stop