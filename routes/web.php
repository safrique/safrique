<?php

Route::view('/categories', 'categories.categories');
Route::view('/categories/{any}', 'categories.categories')->where('any', '.*');

Route::view('/', 'home.welcome');
Route::view('/about', 'home.about');

Route::view('/site-layout', 'layout.site_layout');





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
