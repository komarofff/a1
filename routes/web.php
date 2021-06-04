<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/request', [App\Http\Controllers\PageController::class, 'request'])->name('request');
Route::get('/check1', [App\Http\Controllers\PageController::class, 'check1'])->name('check1');
Route::get('/check2', [App\Http\Controllers\PageController::class, 'check2'])->name('check2');
Route::get('/accept', [App\Http\Controllers\PageController::class, 'accept'])->name('accept');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
	Artisan::call('route:clear');
    return "Кэш очищен.";
});
