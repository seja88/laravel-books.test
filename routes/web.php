<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// INDEX
Route::get('/', [IndexController::class, 'index'])->name('homepage');
//ABOUT US
Route::get('/about-us', [AboutusController::class, 'index'])->name('about-us');
//CREATE NEW AUTHOR
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
//Array response
Route::get('/api/test/array', [TestController::class, 'arrayResponse']);
//model response
Route::get('/api/test/model', [TestController::class, 'modelResponse']);
//colection response
Route::get('/api/test/collection', [TestController::class, 'collectionResponse']);
//Home after registration
Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');
// SEARCH AUTHOR
Route::get('/authors/search', [AuthorController::class, 'search'])->name('authors.search');
// AUTHOR DETAIL
Route::get('/authors/{authorId}/detail', [AuthorController::class, 'detail'])->name('authors.detail');
