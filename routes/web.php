<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\ManagePageContentController;
use App\Http\Controllers\QuotationController;
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

//home
Route::get('/', [ManagePageContentController::class, 'index'])->name('index');

Route::get('/kollekciok', [CategoryController::class, 'index'])->name('category.index');
Route::get('/kollekciok/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/ajtok', [DoorController::class, 'index'])->name('door.index');
Route::get('/ajtok/{door}', [DoorController::class, 'show'])->name('door.show');

Route::get('/blog', [ManagePageContentController::class, 'blog'])->name('blog');
Route::get('/favorites', [ManagePageContentController::class, 'favorites'])->name('favorites');

Route::get('/letoltesek', function () {
    return view('letoltesek/index');
})->name('downloads');

Route::get('/ajanlatkeres', [QuotationController::class, 'index'])->name('quotation.index');
Route::prefix('quotation')->as('quotation.')->group(function () {

    Route::post('/add/{door}', [QuotationController::class, 'addItem'])->name('add');
    Route::post('/store', [QuotationController::class, 'store'])->name('store');
    Route::get('/sikeres', [QuotationController::class, 'success'])->name('success');
    Route::delete('/delete/{quotationItem}', [QuotationController::class, 'deleteItem'])->name('remove');
});

// ne nyulj hozzá
Route::post('/xmlExport', [ManagePageContentController::class, 'xmlExport']);
Route::get('/xmlFile', [ManagePageContentController::class, 'xmlFile']);
