<?php

class MentorController extends BaseController {

	public function mentorHome() {

		return View::make('mentor.mentorHome');
	}

	public function predmeti() {
		$predmeti = Predmet::all();

		return View::make('mentor.predmeti')->with('predmeti', $predmeti);
	}

	public function studenti() {
		$studenti = DB::table('users')->where('role', 'student')->get();	

		return View::make('mentor.studenti')->with('studenti', $studenti);
	}

	public function edit($id_studenta) {
		$predmeti = Predmet::all();
		$student = DB::table('users')->where('id', $id_studenta)->first();
		$upisi = DB::table('upisi')->where('student_id', '=', $id_studenta)->get();

		if($student->status == 'redovni')
			return View::make('student.studentRedHome')->with('upisi', $upisi)->with('predmeti', $predmeti)->with('student', $student);
		else
			return View::make('student.studentIzvHome')->with('upisi', $upisi)->with('predmeti', $predmeti)->with('student', $student);
	}	

	public function Add($id_studenta) {
		$id_predmeta = Input::get('id');

		DB::insert('insert into upisi (student_id, predmet_id, status) values (?, ?, ?)', array($id_studenta, $id_predmeta, 'enrolled'));
	}	

	public function Remove($id_studenta) {
		$id_predmeta = Input::get('id');

		DB::table('upisi')
						->where('student_id', '=', $id_studenta)
						->where('predmet_id', '=', $id_predmeta)
						->delete();
	}

	public function Check($id_studenta) {
		$id_predmeta = Input::get('id');

		DB::table('upisi')
						->where('student_id', '=', $id_studenta)
						->where('predmet_id', '=', $id_predmeta)
						->update(array('status' => 'passed'));
	}	

	public function predmetDetails($id_predmeta) {
		$predmet = Predmet::find($id_predmeta);

		return View::make('layouts.predmet')->with('predmet', $predmet);
	}

	public function predmetEdit($id_predmeta) {
		$predmet = Predmet::find($id_predmeta);

		return View::make('layouts.predmetEdit')->with('predmet', $predmet);
	}

	public function updatePredmet($id) {
		$validate = Validator::make(Input::all(), array(
				'ime' => 'required|unique:predmeti',
				'kod' => 'required|alpha_num',
				'program' => 'required|alpha',
				'bodovi' => 'required|integer|min:1|max:10',
				'sem_redovni' => 'required|integer|min:1|max:6',
				'sem_izvanredni' => 'required|integer|min:1|max:6',
				'izborni' => 'required'
			));

			if($validate->fails()) {
				return Redirect::route('updatePredmet', array('id' => $id))->withErrors($validate)->withInput();
			}
			else {
			$post_data = Input::all();

			$predmet = Predmet::find($id);
			
			$predmet->fill($post_data);
			$predmet->save();
		}
	}

	public function predmetNew() {
		return View::make('layouts.predmetNew');
	}

	public function predmetSave() {
	$validate = Validator::make(Input::all(), array(
			'ime' => 'required|unique:predmeti',
			'kod' => 'required|alpha_num',
			'program' => 'required|alpha',
			'bodovi' => 'required|integer|min:1|max:10',
			'sem_redovni' => 'required|integer|min:1|max:6',
			'sem_izvanredni' => 'required|integer|min:1|max:6',
			'izborni' => 'required'
		));

		if($validate->fails()) {
			return Redirect::route('predmetNew')->withErrors($validate)->withInput();
		}
		else {
		$post_data = Input::all();
		$predmet = new Predmet();
		$predmet->fill($post_data);
		$predmet->save();

		return Redirect::route('predmetNew')->with('predmet', $predmet->ime);
	}
}
}

