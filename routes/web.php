<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('sections.services');
});

Route::get('/portfolio', function () {
    return view('sections.portfolio');
});

Route::get('/about', function () {
    return view('sections.about');
});

Route::get('/contact', function () {
    return view('sections.contact');
});