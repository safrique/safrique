<?php

//Route::get('/', 'HomeController@index')
//    ->name('home')
//    ->description('Dashboard');

//Route::view('/test/{any}', 'test')->where('any', '.*');
//Route::view('/test', 'test');


Route::view('/categories', 'categories.categories');
Route::view('/categories/{any}', 'categories.categories')->where('any', '.*');


//Route::view('/', 'home.welcome');
//
//Route::get('/', function () {
//    return view('home.welcome');
//});
//
//Route::get('/about', function () {
//    return view('home.about');
//});
//
//Route::get('/categories', function () {
//    return view('categories.categories');
//});
//
//Route::get('/challenges', function () {
//    return view('challenges.challenges');
//});
//
//Route::get('/login', function () {
//    return view('members.login');
//});
//
//Route::get('/blog', function () {
//    return view('blog.blog');
//});
