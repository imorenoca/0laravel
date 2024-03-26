<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
// view es un atajo. vista estática sin hacer nada. podemos ahorrarnos el controlador.

// siempre parte de views.
// Route::view('/', 'welcome');
/*Route::get('mi/ruta', ControladorRuta);
Route::post();
Route::put();
Route::delete();
Route::patch();*/
Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
