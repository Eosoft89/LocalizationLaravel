<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/example', [WelcomeController::class, 'index'])->name('example');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');
