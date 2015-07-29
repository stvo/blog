<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return "you have found the secret page!";
});
Route::get('login', function () {
    return "you can login here if you want!";
});
Route::get('contact', function () {
    return "contact page!";
});
Route::get('admin', function () {
    return "Here will we show our admin page";
});

