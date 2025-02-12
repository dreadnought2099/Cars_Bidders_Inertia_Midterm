<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/about', function () {
    return inertia('About');
});

Route::get('/contact', function () {
    return inertia('Contact');
});

Route::get('/faq', function () {
    return inertia('FAQ');
});
