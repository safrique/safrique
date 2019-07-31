<?php

Route::view('/test', 'test');

//Route::get('/', 'HomeController@index')
//    ->name('home')
//    ->description('Dashboard');

//Route::view('/lms/{any}', 'home')->where('any', '.*');
Route::view('/', 'home.welcome');

//Route::get('/', function () {
//    return view('home.welcome');
//});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/categories', function () {
    return view('categories.categories');
});

Route::get('/challenges', function () {
    return view('challenges.challenges');
});

Route::get('/login', function () {
    return view('members.login');
});

Route::get('/blog', function () {
    return view('blog.blog');
});
