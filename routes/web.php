<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('compro.pages.index');
});

Route::get('/gallery', function () {
    return view('compro.pages.gallery');
});
