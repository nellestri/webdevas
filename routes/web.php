<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [StudentsController::class, 'myView'])->name('std.myView');
Route::post('/add-new', [StudentsController::class, 'addNewStudent'])->name('std.addNewStudent');
Route::post('/students/update/{id}', [StudentsController::class, 'updateStudent'])->name('std.updateStudent');
Route::delete('/students/delete/{id}', [StudentsController::class, 'deleteStudent'])->name('std.deleteStudent');


Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});