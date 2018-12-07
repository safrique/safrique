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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/categories/basketball', function () {
    return view('categories.basketball');
});

Route::get('/categories/dev', function () {
    return view('categories.dev');
});

Route::get('/categories/music', function () {
    return view('categories.music');
});

Route::get('/categories/scuba', function () {
    return view('categories.scuba');
});

Route::get('/challenges/20-hour-challenges', function () {
    return view('challenges.20-hour-challenges');
});

Route::get('/members/login', function () {
    return view('members.login');
});

Route::get('/blog', function () {
    return view('blog.blog');
});
