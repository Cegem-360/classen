<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\ManagePageContentController;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/kollekciok', [CategoryController::class, 'index'])->name('category.index');
Route::get('/kollekciok/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/ajtok', [DoorController::class, 'index'])->name('door.index');
Route::get('/ajtok/{door}', [DoorController::class, 'show'])->name('door.show');

Route::get('/blog', [ManagePageContentController::class, 'blog'])->name('blog');
Route::get('/favorites', [ManagePageContentController::class, 'favorites'])->name('favorites');

Route::get('/letoltesek', function () {
    return view('letoltesek/index');
})->name('downloads');

// ne nyulj hozzá
Route::post('/xmlExport', [ManagePageContentController::class, 'xmlExport']);
