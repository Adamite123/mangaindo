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

// Route::get('/scraper', [App\Http\Controllers\ScraperController::class, 'scraper'])->name('scraper');
// Route::post('/parse_absen', [App\Http\Controllers\ScraperController::class, 'parseAbsen'])->name('parse_absen');
// Route::get('/absen', [App\Http\Controllers\ScraperController::class, 'parseAbsen']);


Route::get('/insert', [App\Http\Controllers\ScraperController::class, 'insert_scraper']);

Route::post('/parse_url', [App\Http\Controllers\ScraperController::class, 'parseUrl'])->name('parse_url');
// Route::post('/mangawest', [App\Http\Controllers\ScraperController::class, 'mangawest'])->name('mangawest');
Route::post('/komikcast', [App\Http\Controllers\ScraperController::class, 'komikcast'])->name('komikcast');
Route::post('/tes', [App\Http\Controllers\ScraperController::class, 'tes'])->name('tes');