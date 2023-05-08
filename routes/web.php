<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [BooksController::class, 'index'])->middleware(['auth'])->name('books.index');
Route::get('/books/create', [BooksController::class, 'create'])->middleware(['auth'])->name('books.create');
Route::get('/books/{book}/edit', [BooksController::class, 'edit'])->middleware(['auth'])->name('books.edit');
Route::get('/books/{book}', [BooksController::class, 'show'])->name('books.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
