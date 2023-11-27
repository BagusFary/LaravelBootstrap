<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BeritaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::middleware(['auth'])->group(function(){
// });
Route::get('/', [IndexController::class, 'home']);
Route::get('/layanan', [IndexController::class, 'layanan']);
Route::get('/tentang', [IndexController::class, 'tentang']);
Route::get('/hubungi', [IndexController::class, 'hubungi']);
Route::get('/news',[IndexController::class, 'berita']);
Route::get('/news/{id}',[IndexController::class, 'beritaShow']);
Route::get('/artikel',[IndexController::class, 'artikel']);
Route::get('/artikel/{id}',[IndexController::class, 'artikelShow']);
Route::get('/artikel/cetakpdf', [IndexController::class, 'cetakPdf']);
Route::resource('article', ArticleController::class);
Route::resource('berita', BeritaController::class)->middleware('auth');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
