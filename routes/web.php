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

Route::any('/mailer', function () {
	//dd(request()->input());
	$res  = \Mail::to('contactme@zairee.ga')
	->send(new \App\Mail\ContactMe(request()->input()));
	\Log::info($res);
	return $res;
    
})->name("emal_send");

Route::get('/', function () {
    return view('template');
});
