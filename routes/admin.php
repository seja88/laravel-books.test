<?php
// ADMIN

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::middleware('can:admin')->group(function () {

    Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin-authors');
});
// Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin-authors');

// USERS
//          /admin/users
Route::get('/users', [UserController::class, 'index'])->name('admin.users');
