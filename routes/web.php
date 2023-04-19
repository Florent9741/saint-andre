<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
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


Route::get('/lien', [FilmsController::class, 'test'])->name('lien');
Route::get('/crud', [FilmsController::class, 'test2'])->name('crud');