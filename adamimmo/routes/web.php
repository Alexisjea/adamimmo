<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotationsController;

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
    return view('welcome');
});

// Cotations
Route::get('/cotations', [CotationsController::class, 'index'])->name('cotations.index');
Route::get('/cotations/create', [CotationsController::class, 'create'])->name('cotations.create');
Route::post('/cotations', [CotationsController::class, 'store'])->name('cotations.store');
Route::get('/cotations/{id}', [CotationsController::class, 'show'])->name('cotations.show');
Route::get('/cotations/{id}/edit', [CotationsController::class, 'edit'])->name('cotations.edit');
Route::put('/cotations/{id}', [CotationsController::class, 'update'])->name('cotations.update');
Route::delete('/cotations/{id}', [CotationsController::class, 'destroy'])->name('cotations.destroy');
Route::get('/employee/pdf', [CotationsController::class, 'createPDF']);

