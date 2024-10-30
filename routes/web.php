<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::resource('notes', NotesController::class);
Route::get('notes/{noteId}/delete', [NotesController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
