<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', 'PagesController@index' );
Route::get( '/about', 'PagesController@about' );
Route::group(
	[ 'middleware' => [ 'auth' ] ],
	function() {
		Route::get( '/dashboard', 'PagesController@dashboard' );
		Route::get( '/upload', 'PagesController@upload' );
		Route::get( '/review', 'PagesController@review' );
		Route::get( '/users', 'PagesController@users' );
		Route::get( '/reports', 'PagesController@reports' );
		Route::get( '/integrations', 'PagesController@integrations' );
	}
);


Auth::routes();

