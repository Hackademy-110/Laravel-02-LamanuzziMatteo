<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class,'Welcome'])->name('Welcome');
Route::get('/persone',[PublicController::class,'People'])->name('People');

Route::get('/mercenaries',[PublicController::class, 'Mercenary'])->name('Merc');
Route::get('/mercenaries/{scelto}',[PublicController::class,'Selezionato'])->name('Selezionato');