<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/kontakt', function () {
    return view("pages.contact");
});
Route::get('/tarifa', function () {
    return view("pages.tarifa");
});
