<?php

Route::get('/', function () {
  return view('welcome');
});

Route::get('/home', 'FirstController@hello');

Route::get("posts/{postName}", function($postName){
		return $postName;
});

Route::get("/page1/{var}/{jantina}", "FirstController@returnViewPage1");

Route::get("calc/{operation}/{num1}/{num2}", "FirstController@calculator");

Route::get("/admin", "FirstController@returnYieldView");

Route::get('/pizza', "PizzaController@hello");


