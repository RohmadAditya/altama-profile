<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {

    $title = 'Services';

    return view('sections.services', 
    [
        'title' => $title
    ]);
});

Route::get('/portfolio', function () {
    $title = 'Portfolio';
    return view('sections.portfolio', 
    [
        'title' => $title
    ]);
});

Route::get('/about', function () {
    $title = 'About';
    return view('sections.about', 
    [
        'title' => $title
    ]);
});

Route::get('/contact', function () {
    $title = 'Contact';
    return view('sections.contact', 
    [
        'title' => $title
    ]);
});