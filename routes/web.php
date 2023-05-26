<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;

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

Route::get('/{id}', [BookController::class, 'index']);

Route::get('/{id}/category/{idCategory}', [CategoryController::class, 'show']);
Route::get('/detail/{id}', [DetailController::class, 'show']);
Route::get('/contact', function(){
    return view("contact");
});
