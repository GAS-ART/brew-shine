<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendController;


// Группа маршрутов с префиксом языка
Route::get('/locale/{locale}', [Controllers\ChangeLanguagesController::class, 'changeLocale'])->name('locale');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/{locale}', [HomeController::class, 'index'])->name('home');

Route::post('/send-main-form', [SendController::class, 'submit'])->name('sendMainForm');