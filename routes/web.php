<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\IncomingItemController;
use App\Http\Controllers\OutgoingItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ActivityLogController;

Route::get('/', function () {

    return redirect()->route('dashboard');

});

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Laporan
    |--------------------------------------------------------------------------
    */

    Route::get('/reports/export-csv', [ReportController::class, 'exportCsv'])
        ->name('reports.export.csv');

    Route::get('/reports/print', [ReportController::class, 'print'])
        ->name('reports.print');

    Route::get('/reports/incoming', [ReportController::class, 'incoming'])
        ->name('reports.incoming');

    Route::get('/reports/incoming/print', [ReportController::class, 'printIncoming'])
        ->name('reports.incoming.print');

    Route::get('/reports/outgoing', [ReportController::class, 'outgoing'])
        ->name('reports.outgoing');

    Route::get('/reports/outgoing/print', [ReportController::class, 'printOutgoing'])
        ->name('reports.outgoing.print');    


    Route::post('/reports/incoming/filter',[ReportController::class,'filterIncoming'])
        ->name('reports.incoming.filter');

    Route::post('/reports/outgoing/filter',[ReportController::class,'filterOutgoing'])
        ->name('reports.outgoing.filter');    

    Route::get('/reports/incoming/export-csv', [ReportController::class, 'exportIncomingCsv'])
        ->name('reports.incoming.csv');

    Route::get('/reports/outgoing/export-csv', [ReportController::class, 'exportOutgoingCsv'])
        ->name('reports.outgoing.csv');
        
    /*
    |--------------------------------------------------------------------------
    | Admin Only
    |--------------------------------------------------------------------------
    */

    Route::middleware('admin')->group(function () {

        Route::resource('categories', CategoryController::class);

        Route::resource('suppliers', SupplierController::class);

        Route::resource('units', UnitController::class);

        Route::resource('users', UserController::class);

        Route::get('/activity-logs', [ActivityLogController::class, 'index'])
    ->name('activity-logs.index');

    });

    /*
    |--------------------------------------------------------------------------
    | Inventory
    |--------------------------------------------------------------------------
    */

    Route::resource('items', ItemController::class);

    Route::resource('incoming-items', IncomingItemController::class);

    Route::resource('outgoing-items', OutgoingItemController::class);

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';