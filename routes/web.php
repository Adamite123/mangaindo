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
    return view('landing/animelist');
});
Route::get('/admin', function () {
    return view('admin/Dashboard');
});
Route::get('/Hero', function () {
    return view('admin/detailmanga');
});
Route::get('/action', function () {
    return view('admin/action');
});


Route::get('/scraper', [App\Http\Controllers\ScraperController::class, 'scraper'])->name('scraper');

Route::get('/insert', [App\Http\Controllers\ScraperController::class, 'insert_scraper']);

// Route::get('/absen', [App\Http\Controllers\ScraperController::class, 'parseAbsen']);



Route::post('/parse_url', [App\Http\Controllers\ScraperController::class, 'parseUrl'])->name('parse_url');
// Route::post('/parse_absen', [App\Http\Controllers\ScraperController::class, 'parseAbsen'])->name('parse_absen');
