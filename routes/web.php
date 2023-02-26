<?php

use App\Http\Controllers\DailySalesReportController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //For Product List
    Route::get('/product-list', [ProductListController::class, 'index'])->name('product-list.index');
    Route::post('/create-product', [ProductListController::class, 'store'])->name('product-list.store');
    Route::delete('/delete-product/{id}', [ProductListController::class, 'destroy'])->name('product-list.destroy');
    Route::put('/update-product/{id}', [ProductListController::class, 'update'])->name('product-list.update');

    Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
    Route::get('/daily-sales', [DailySalesReportController::class, 'index'])->name('daily-sales.index');
    Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenance.index');
});

require __DIR__.'/auth.php';
