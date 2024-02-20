<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'home'])->name('welcome');

Route::middleware('auth')->group(function(){

    Route::resource('books',BookController::class)->except('index');
});
Route::resource('/books',BookController::class)->only('index');
