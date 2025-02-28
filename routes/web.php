<?php

declare(strict_types=1);

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DatabaseUpdaterController;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\ManagePageContentController;
use App\Http\Controllers\QuotationController;
use Illuminate\Support\Facades\Artisan;
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

// home
Route::get('/', [ManagePageContentController::class, 'index'])->name('index');

Route::get('/ajtok', [DoorController::class, 'index'])->name('door.index');
Route::get('/ajtok/{door}', [DoorController::class, 'show'])->name('door.show');

Route::prefix('kollekciok')->as('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
});
Route::get('/category-import', [CategoryController::class, 'upload']);
Route::post('/category-proccess', [CategoryController::class, 'import'])->name('exel.proccess');

Route::get('/rolunk', [ManagePageContentController::class, 'rolunk'])->name('rolunk');

Route::get('/kapcsolat', [ManagePageContentController::class, 'kapcsolat'])->name('kapcsolat');

Route::prefix('mail')->as('mail.')->group(function () {
    // Route::get('/contact', [ManagePageContentController::class, 'contact'])->name('contact');
    Route::post('/sendContact', [ManagePageContentController::class, 'sendContact'])->name('sendContact');
});

Route::get('/szolgaltatasaink', [ManagePageContentController::class, 'szolgaltatasaink'])->name('szolgaltatasaink');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('kedvencek')->as('favorites.')->group(function () {
    Route::get('/', [ManagePageContentController::class, 'favorites'])->name('index');
});
Route::get('/letoltesek', function () {
    return view('letoltesek/index');
})->name('downloads');

Route::view('/kilincsek', 'kilincsek.index')->name('kilincsek');
Route::view(
    '/'.Str::slug('Fa mintázatú beltéri ajtók, festett beltéri ajtók, modul beltéri ajtók, technikai beltéri ajtók', '-', 'hu'),
    'google.index'
)->name('meta');
Route::view(
    '/'.Str::slug('Enteriőrbe illő bejárati ajtók - Stílus és biztonság', '-', 'hu'),
    'google.enterior'
)->name('enterior');
Route::view(
    '/'.Str::slug('Modulajtók - Stílus, funkcionalitás és minőség', '-', 'hu'),
    'google.modern'
)->name('modern');
Route::view(
    '/'.Str::slug('Fa mintázatú ajtók - Természetes elegancia és stílus', '-', 'hu'),
    'google.woodenstyle'
)->name('woodenstyle');

Route::view('/kiemelt-termekeink', 'kiemelt-termekeink')->name('kiemelt-termekeink');

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

Route::view('/aszf', 'jogi.aszf')->name('aszf');
Route::view('/adatvedelmi-nyilatkozat', 'jogi.adatvedelem')->name('adatvedelem');
Route::get('/refreshDatabase', function () {
    Artisan::call('migrate:fresh', ['--seed' => 1]);
});

Route::get('/clearCache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return 'Cache cleared';
});
Route::get('/sitemap', function () {
    Artisan::call('sitemap:generate');

    return 'Sitemap generated';
});
