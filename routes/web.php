<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentsController::class, 'myView'])->name('std.myView');
Route::post('/add-new', [StudentsController::class, 'addNewStudent'])->name('std.addNewStudent');

