<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return "Welcome to the contact page!";
});

Route::get('/blog', function () {
    return view('blog.index');
});