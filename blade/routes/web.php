<?php

use Illuminate\Support\Facades\Route;

Route::view('/index', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contacta-con-nosotros', 'contact')->name('contact');
