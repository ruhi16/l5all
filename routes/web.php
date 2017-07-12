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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
	$names = DB::table('users')->get();


	// echo "Hello";
	// foreach ($names as $key) {
	// 	echo $key->name;
	// }
    return view('welcome', compact('names'));
    //return view('welcome');
});
