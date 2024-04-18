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

Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/chisono',[PublicController::class,'chisono'])->name('chisono');
Route::get('/consulenze',[PublicController::class,'consulenze'])->name('consulenze');
Route::get('/yoga',[PublicController::class,'yoga'])->name('yoga');
Route::get('/contattami',[PublicController::class,'contattami'])->name('contattami');
Route::get('/info',[PublicController::class,'info'])->name('info');
Route::post('/contattami/submit',[PublicController::class,'submit'])->name('contattami.submit');
