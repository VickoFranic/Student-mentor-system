<?php

class StudentController extends BaseController {

	public function studentRedHome() {

		$predmeti = Predmet::all();
		$student = DB::table('users')->where('email', (Auth::user()->email))->first();
		$upisi = DB::table('upisi')->where('student_id', '=', $student->id)->get();

		return View::make('student.studentRedHome')->with('upisi', $upisi)->with('predmeti', $predmeti)->with('student', $student);
	}

	public function studentIzvHome() {

		$predmeti = Predmet::all();
		$student = DB::table('users')->where('email', (Auth::user()->email))->first();
		$upisi = DB::table('upisi')->where('student_id', '=', $student->id)->get();

		return View::make('student.studentIzvHome')->with('upisi', $upisi)->with('upisi', $upisi)->with('predmeti', $predmeti)->with('student', $student);
	}


	public function Add() {
		$id_predmeta = Input::get('id');
		$id_studenta = Auth::user()->id;

		DB::insert('insert into upisi (student_id, predmet_id, status) values (?, ?, ?)', array($id_studenta, $id_predmeta, 'enrolled'));
	}	

	public function Remove() {
		$id_predmeta = Input::get('id');
		$id_studenta = Auth::user()->id;

		DB::table('upisi')
						->where('student_id', '=', $id_studenta)
						->where('predmet_id', '=', $id_predmeta)
						->delete();
	}

	public function Check() {
		$id_predmeta = Input::get('id');
		$id_studenta = Auth::user()->id;

		DB::table('upisi')
						->where('student_id', '=', $id_studenta)
						->where('predmet_id', '=', $id_predmeta)
						->update(array('status' => 'passed'));
	}		
}