<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DatabaseUpdaterController;
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

Route::get('/ajtok', [DoorController::class, 'index'])->name('door.index');
Route::get('/ajtok/{door}', [DoorController::class, 'show'])->name('door.show');

Route::prefix('kollekciok')->as('category.')->group(function () {

    Route::get('/', [CategoryController::class, 'index'])->name('index');

    Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
});
Route::get('/rolunk', [ManagePageContentController::class, 'rolunk'])->name('rolunk');

Route::get('/kapcsolat', [ManagePageContentController::class, 'kapcsolat'])->name('kapcsolat');

Route::get('/szolgaltatasaink', [ManagePageContentController::class, 'szolgaltatasaink'])->name('szolgaltatasaink');

Route::get('/blog', [ManagePageContentController::class, 'blog'])->name('blog');

Route::prefix('kedvencek')->as('favorites.')->group(function () {
    Route::get('/', [ManagePageContentController::class, 'favorites'])->name('index');
});
Route::get('/letoltesek', function () {
    return view('letoltesek/index');
})->name('downloads');

Route::prefix('ajanlatkeres')->as('quotation.')->group(function () {
    Route::get('/', [QuotationController::class, 'index'])->name('index');
    Route::post('/add/{door}', [QuotationController::class, 'addItem'])->name('add');
    Route::post('/store', [QuotationController::class, 'store'])->name('store');
    Route::get('/sikeres', [QuotationController::class, 'success'])->name('success');
    Route::delete('/delete/{quotationItem}', [QuotationController::class, 'deleteItem'])->name('remove');
    Route::patch('/update/{quotationItem}', [QuotationController::class, 'updateItem'])->name('updateItem');
});

// ne nyulj hozzá
Route::post('/xmlExport', [ManagePageContentController::class, 'xmlExport']);
Route::get('/xmlFile', [ManagePageContentController::class, 'xmlFile']);

Route::get('/quoteMail', function () {
    return view('mail.quotation.sended');
})->name('quote');
Route::prefix('updateWebsiteDatabase')->as('updateWebsiteDatabase.')->group(function () {
    Route::get('/', [DatabaseUpdaterController::class, 'trigger'])->name('trigger');
});
