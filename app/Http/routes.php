<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
	});
	
	
	Route::get('/insert', function(){
		DB::insert("INSERT INTO posts(title, content) values(?, ?)",['PHP with laravel', 'laravel is the Best Thing that happern to PHP']);
		
	});
	
	
	Route::get('/read', function(){
		$results = DB::select("SELECT * FROM posts WHERE id = ?", [1]);
		//foreach($results as $post){
			//return $post->title;
		//}
		return $results;
	});


