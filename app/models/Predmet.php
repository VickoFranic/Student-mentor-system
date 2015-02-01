<?php

	class Predmet extends Eloquent {

		protected $table = 'predmeti';

		protected $fillable = array('ime', 'kod', 'program', 'bodovi', 'sem_redovni', 'sem_izvanredni', 'izborni');
	}