<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@pocetna', 'as' => 'pocetna'));
Route::get('/logout', array('uses' => 'HomeController@logout', 'as' => 'logout'));


Route::group(array('before' => 'guest'), function() {

	Route::get('/user/create', array('uses' => 'UserController@getCreate', 'as' => 'getCreate'));
	Route::get('/user/login', array('uses' => 'UserController@getLogin', 'as' => 'getLogin'));

	Route::group(array('before' => 'csrf'), function() {

		Route::post('/user/create', array('uses' => 'UserController@postCreate', 'as' => 'postCreate'));
		Route::post('/user/login', array('uses' => 'UserController@postLogin', 'as' => 'postLogin'));
	});
});


Route::get('/student/redovni', array('uses' => 'StudentController@studentRedHome', 'as' => 'studentRedHome'));
Route::get('/student/izvanredni', array('uses' => 'StudentController@studentIzvHome', 'as' => 'studentIzvHome'));

Route::get('/student/add', array('uses' => 'StudentController@Add', 'as' => 'Add'));
Route::get('/student/remove', array('uses' => 'StudentController@Remove', 'as' => 'Remove'));
Route::get('/student/check', array('uses' => 'StudentController@Check', 'as' => 'Check'));

Route::get('/mentor', array('uses' => 'MentorController@mentorHome', 'as' => 'mentorHome'));
Route::get('/mentor/predmeti', array('uses' => 'MentorController@predmeti', 'as' => 'predmeti'));
Route::get('/mentor/studenti', array('uses' => 'MentorController@studenti', 'as' => 'studenti'));


Route::get('/mentor/studenti/{id_studenta}', array('uses' => 'MentorController@edit', 'as' => 'edit'));
Route::get('/mentor/studenti/{id_studenta}/add', array('uses' => 'MentorController@Add', 'as' => 'Add'));
Route::get('/mentor/studenti/{id_studenta}/remove', array('uses' => 'MentorController@Remove', 'as' => 'Remove'));
Route::get('/mentor/studenti/{id_studenta}check', array('uses' => 'MentorController@Check', 'as' => 'Check'));


Route::get('/mentor/predmeti/details/{id_predmeta}', array('uses' => 'MentorController@predmetDetails', 'as' => 'predmetDetails'));

Route::get('/mentor/predmeti/edit/{id_predmeta}', array('uses' => 'MentorController@predmetEdit', 'as' => 'predmetEdit'));
Route::post('/mentor/predmeti/edit/{id_predmeta}', array('uses' => 'MentorController@updatePredmet', 'as' => 'updatePredmet'));

Route::get('/mentor/predmeti/new', array('uses' => 'MentorController@predmetNew', 'as' => 'predmetNew'));
Route::post('/mentor/predmeti/save', array('uses' => 'MentorController@predmetSave', 'as' => 'predmetSave'));


