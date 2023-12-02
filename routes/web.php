<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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

// Show All News List
Route::get('/', [NewsController::class, 'index']);

// Create News Form
Route::get('/news/create', [NewsController::class, 'create'])->middleware('auth');

// Store News Data
Route::post('/news', [NewsController::class, 'store'])->middleware('auth');

// Edit News Form
Route::get('/news/{newsItem}/edit', [NewsController::class, 'edit'])->middleware('auth');

// Submit Update
Route::put('/news/{newsItem}', [NewsController::class, 'update'])->middleware('auth');

// Delete News Data
Route::delete('/news/{newsItem}', [NewsController::class, 'delete'])->middleware('auth');

// Manage News Data
Route::get('/news/manage', [NewsController::class, 'manage'])->middleware('auth');

// Show Single Item News
Route::get('/news/{newsItem}', [NewsController::class, 'show']);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::post('/admin/approve-comment/{comment}', [AdminController::class, 'approveComment'])->name('admin.approve.comment')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
