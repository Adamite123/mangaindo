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


//========= ROUTES INPUT MANGA =========
Route::get('/insert', [App\Http\Controllers\ScraperController::class, 'insert_scraper']);
Route::post('/cek', [App\Http\Controllers\ScraperController::class, 'cek'])->name('cek');

//========== SCRAP MANGA =========
Route::post('/parse_url', [App\Http\Controllers\ScraperController::class, 'parseUrl'])->name('parse_url');
// Route::post('/mangawest', [App\Http\Controllers\ScraperController::class, 'mangawest'])->name('mangawest');
Route::post('/komikcast', [App\Http\Controllers\ScraperController::class, 'komikcast'])->name('komikcast');
Route::post('/mikoroku', [App\Http\Controllers\ScraperController::class, 'mikoroku'])->name('mikoroku');

