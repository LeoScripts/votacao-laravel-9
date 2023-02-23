<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionAnswerController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/vote', [QuestionAnswerController::class,'index'])->middleware(['auth'])->name('vote');
Route::post('/vote', [QuestionAnswerController::class,'store'])->middleware(['auth'])->name('vote.store');

Route::resource('/question', QuestionController::class)->middleware(['auth', 'admin']);
Route::resource('/answer', AnswerController::class)->middleware(['auth', 'admin']);

