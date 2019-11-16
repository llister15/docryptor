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

	public function review() {
		$title = 'Review';
		return view( 'pages.review' )->with( 'title', $title );
	}

	public function users() {
		$title = 'Users';
		return view( 'pages.users' )->with( 'title', $title );
	}


	public function reports() {
			$title = 'Reports';
			return view( 'pages.reports' )->with( 'title', $title );
	}


	public function integrations() {
			$title = 'Integrations';
			return view( 'pages.integrations' )->with( 'title', $title );
	}

}
