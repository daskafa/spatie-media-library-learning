<?php

use Carbon\Carbon;
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

Route::resource('article', \App\Http\Controllers\ArticleController::class);
Route::resource('butchers', \App\Http\Controllers\ButcherController::class);

Route::get('article/{id}/delete', [\App\Http\Controllers\ArticleController::class, 'delete'])->name('delete.article');
