<?php

class UserController extends BaseController {

// Registracija novog studenta
	public function getCreate() {
		return View::make('user.register');
	}

	public function postCreate() {
		$validate = Validator::make(Input::all(), array(
				'email' => 'required|email|unique:users',
				'password' => 'required|min:6',
				'status' => 'required',
			));

		if($validate->fails()) {
			return Redirect::route('getCreate')->withErrors($validate);
		}
		else {
				$user = new User();

				$user->email = Input::get('email');
				$user->password = Hash::make(Input::get('password'));
				$user->role = 'student';
				$user->status = Input::get('status');
		}

		// Ako se uspjesno kreira user
		if($user->save()) {
			return Redirect::route('pocetna')->with('user', $user->email);
		}
		// Ako se user nije uspio kreirati (greska u komunikaciji s bazom)
		else {
			return Redirect::route('pocetna')->with('fail', 'Pogreška kod kreiranja korisnika ! Pokušajte ponovno.');
		}

	}

// Login korisnika
	public function getLogin() {
		return View::make('user.login');
	}

	public function postLogin() {
			$validate = Validator::make(Input::all(), array(
				'email' => 'required|email',
				'password' => 'required'
			));

		if($validate->fails()) {
			return Redirect::route('getLogin')->withErrors($validate);
		}
		else {
			$auth = Auth::attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				), 'true');
		}

		if($auth) {
			$userRole = Auth::user()->role;
			$userMail = Auth::user()->email;
			$studentStatus = Auth::user()->status;

			if($userRole == 'mentor') {
				return Redirect::route('mentorHome')->with('mail', $userMail);
			}
			else if(($userRole == 'student') && ($studentStatus == 'redovni')) {
				return Redirect::route('studentRedHome')->with('mail', $userMail);
			}
			else if(($userRole == 'student') && ($studentStatus == 'izvanredni')) {
				return Redirect::route('studentIzvHome')->with('mail', $userMail);
			}
		}

		else {
			return Redirect::route('getLogin')->with('fail', 'Unešeni podaci nisu ispravni !');
		}

	}
}