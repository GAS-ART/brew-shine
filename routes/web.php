<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Группа маршрутов с префиксом языка
Route::get('/locale/{locale}', [Controllers\ChangeLanguagesController::class, 'changeLocale'])->name('locale');
//Route::post('/send-main-form', [Controllers\sendController::class, 'submit'])->name('sendMainForm');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/{locale}', [HomeController::class, 'index'])->name('home');