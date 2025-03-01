<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentsController::class, 'myView'])->name('std.myView');
Route::post('/add-new', [StudentsController::class, 'addNewStudent'])->name('std.addNewStudent');
Route::post('/students/update/{id}', [StudentsController::class, 'updateStudent'])->name('std.updateStudent');
Route::delete('/students/delete/{id}', [StudentsController::class, 'deleteStudent'])->name('std.deleteStudent');
