<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('service');
});

Route::view('/home', 'home');
Route::view('/about', 'about');

Route::get('/services/{slug?}', function($slug = null) {
    return view('service-detail', ['slug' => $slug]);
});
