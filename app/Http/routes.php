<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return "you have found the secret page!";
});

