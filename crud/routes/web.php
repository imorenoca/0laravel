<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/note/{id?}', [NoteController::class, 'index']) -> name('note.index');