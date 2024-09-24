<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm']);

use App\Http\Controllers\whyUsController;

Route::get('/whyUs', [whyUsController::class, 'whyUs']);

use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'showWelcomePage']);

use App\Http\Controllers\SearchController;
Route::get('/search',[SearchController::class,'search'])->name('search');
