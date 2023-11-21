<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManagePageContentController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', [ManagePageContentController::class, 'blog'])->name('blog');
Route::get('/favorites', [ManagePageContentController::class, 'favorites'])->name('favorites');
Route::resource('door', DoorController::class);
Route::resource('category', CategoryController::class);
Route::get('/door', [DoorController::class, 'index'])->name('doors');

Route::get('test', [ManagePageContentController::class, 'test']);
