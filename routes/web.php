<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $news=["One news","Second news","Third news"];
    return view('pages.about')->with('articles',$news);
});

Route::get('about',function (){
    return view('pages.about');
});
