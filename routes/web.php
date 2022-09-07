<?php

use Illuminate\Support\Facades\Route;

Route::get('/dark-light-theme', function () {
    return view('dark_light_theme');
});

Route::get('/html-camera', function () {
    return view('html_camera');
});
