<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileSendController;


// Группа маршрутов с префиксом языка
Route::get('/locale/{locale}', [Controllers\ChangeLanguagesController::class, 'changeLocale'])->name('locale');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/{locale}', [HomeController::class, 'index'])->name('home');

//Route::post('/send-main-form', [FileSendController::class, 'submit'])->name('sendMainForm');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'ru|ro|en']], function () {
    Route::post('/send-main-form', [FileSendController::class, 'submit'])
        ->name('sendMainForm');
});