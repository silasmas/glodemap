<?php

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

Route::get('/', [ProfileController::class, 'home'])->name('home');
Route::get('about', [ProfileController::class, 'about'])->name('about');
Route::get('services', [ProfileController::class, 'services'])->name('services');

Route::get('detailService/{id}', [ProfileController::class, 'detail'])->name('detailService');
Route::post('sendMsg', [ProfileController::class, 'sendMessage'])->name('sendMsg');
Route::get('contact', [ProfileController::class, 'contact'])->name('contact');
Route::get('/download', [ProfileController::class, 'download'])->name('download');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
