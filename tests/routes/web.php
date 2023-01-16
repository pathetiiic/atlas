<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;


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
    return 'atlas';
});
Route::get('/admin', function() {
    return 'admin';
});

//          DASHBOARD
Route::get('/admin/dashboard', [PageController::class, 'show'])->name('dashboard');

//          SERVICES
// create
Route::get('/admin/services', [ServicesController::class, 'show'])->name('services');
Route::post('/admin/services/create', [ServicesController::class, 'store']);
// edit
Route::get('/admin/services/edit/{id}', [ServicesController::class, 'show_edit'])->name('services.edit');
Route::put('/admin/services/edit/{service}', [ServicesController::class, 'edit']);
// delete
Route::post('/admin/service/delete', [ServicesController::class, 'destroy']);

//          PORTFOLIO
// create
Route::get('/admin/portfolio', [PortfolioController::class, 'show'])->name('portfolio');
Route::post('/admin/portfolio/create', [PortfolioController::class, 'store']);
// edit
Route::get('/admin/portfolio/edit/{id}', [PortfolioController::class, 'showEdit'])->name('portfolio.edit');
Route::put('/admin/portfolio/edit/{portfolio}', [PortfolioController::class, 'edit']);
// delete
Route::post('/admin/portfolio/delete', [PortfolioController::class, 'destroy']);

