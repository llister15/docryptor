<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index() {
		$title = 'Home';
		return view( 'pages.index' )->with( 'title', $title );
	}

	public function dashboard() {
		$title = 'Dashboard';
		return view( 'pages.dashboard' )->with( 'title', $title );
	}

	public function upload() {
		$title = 'Upload';
		return view( 'pages.upload' )->with( 'title', $title );
	}

	public function about() {
		$title = 'About';
		return view( 'pages.about' )->with( 'title', $title );
	}
}
