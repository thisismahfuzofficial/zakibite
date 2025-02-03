<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['controller' => PagesController::class, 'as' => 'page.'], function () {
    Route::get('/', 'index')->name('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
