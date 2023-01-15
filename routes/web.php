<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesController;


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
Route::get('/admin/services', [ServicesController::class, 'show'])->name('services');
Route::get('/admin/dashboard', [PageController::class, 'show'])->name('dashboard');
Route::get('/admin/services/edit/{id}', [ServicesController::class, 'show_edit'])->name('services.edit');

Route::post('/admin/services/edit/{service}', [ServicesController::class, 'edit']);
Route::post('/admin/services/create', [ServicesController::class, 'store']);

