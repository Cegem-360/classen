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
use Illuminate\Support\Str;

Route::get('/', [ManagePageContentController::class, 'index'])->name('index');

Route::get('/ajtok', [DoorController::class, 'index'])->name('door.index');
Route::get('/ajtok/{door}', [DoorController::class, 'show'])->name('door.show');

Route::prefix('kollekciok')->as('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
});
Route::get('/category-import', [CategoryController::class, 'upload']);
Route::post('/category-proccess', [CategoryController::class, 'import'])->name('exel.proccess');

Route::prefix('mail')->as('mail.')->group(function () {
    Route::post('/sendContact', [ManagePageContentController::class, 'sendContact'])->name('sendContact');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('kedvencek')->as('favorites.')->group(function () {
    Route::get('/', [ManagePageContentController::class, 'favorites'])->name('index');
});

Route::view('/rolunk', 'pages.rolunk')->name('rolunk');
Route::view('/kapcsolat', 'pages.kapcsolat')->name('kapcsolat');
Route::view('/letoltesek', 'pages.letoltesek')->name('downloads');
Route::view('/szolgaltatasaink', 'pages.szolgaltatasaink')->name('szolgaltatasaink');
Route::view('/kilincsek', 'pages.kilincsek')->name('kilincsek');
Route::view('/kiemelt-termekeink', 'pages.kiemelt-termekeink')->name('kiemelt-termekeink');
Route::view('/raktari-ajtok–megbizhatosag-tartossag', 'google.raktari-ajtok–megbizhatosag-tartossag')->name('seo.raktari-ajtok-megbizhatosag-tartossag');
Route::view('/raktari-ajtok-tokeletes-valasztas-otthonaba-es-munkahelyere', 'google.raktari-ajtok-tokeletes-valasztas-otthonaba-es-munkahelyere')->name('seo.raktari-ajtok-tokeletes-valasztas-otthonaba-es-munkahelyere');
Route::view('beltéri-ajtók–stilus-minőség-tartósság', 'google.belteri')->name('seo.belteri-ajtok');
Route::view('/cpl-belteri-ajtok-karcallo-modern-ajtok', 'google.cpl')->name('seo.cpl');
Route::view('/aszf', 'pages.aszf')->name('aszf');
Route::view('/adatvedelmi-nyilatkozat', 'pages.adatvedelem')->name('adatvedelem');
Route::view('/ir-wenge-belteri-ajto-akcio', 'pages.ir-wenge-belteri-ajto-akcio')->name('ir-wenge-akcio');
Route::view('/CPL-folias-es-dekor-belteri-ajtok-akcio', 'pages.CPL-folias-es-dekor-belteri-ajtok-akcio')->name('pages.CPL-folias-es-dekor-belteri-ajtok-akcio');
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

Route::prefix('ajanlatkeres')->as('quotation.')->middleware('ensure.quotation')->group(function () {
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

Route::prefix('kiemelt-ertekesitesi-teruleteink')->as('featured-sales-areas.')->group(function () {
    Route::view('/', 'pages.featured-sales-areas.index')->name('index');
    Route::get('/{slug}', function ($slug) {
        return view('pages.featured-sales-areas.show', ['slug' => $slug]);
    })->name('show');

});
