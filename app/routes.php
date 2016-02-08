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
Route::get('brand', function(){
	$categories = Category::all();
	$brands 		= Brand::all();
	return View::make('index')->with('categories', $categories)->with('brands',$brands);


});
